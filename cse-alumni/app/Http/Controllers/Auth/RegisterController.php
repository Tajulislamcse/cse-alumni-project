<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Role;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
   protected $redirectTo ='/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'roll' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'batch' => ['required', 'string', 'max:255'],
            'session' => ['required', 'string', 'max:255'],
            'bloodgroup' => ['required', 'string', 'max:255'],
            'image' => ['required'],
            'profession' => ['required', 'string', 'max:255'],
            'phonenumber' => ['required', 'string', 'max:255'],
           // 'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    
    protected function create(array $data)
    {  
        $request=request();

        /*
        $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();
         $request->file('image')->move(public_path('uploads'), $imageName);
        // $this->image = $imageName;
       */

                     // get form image
            $image = $request->file('image');
       
       
//            make unique name for image
            $currentDate = Carbon::now()->toDateString();
            $imageName = $request->name.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
//            check category dir is exists
         

            //            check category slider dir is exists
            if (!Storage::disk('public')->exists('images/Alumni'))
            {
                Storage::disk('public')->makeDirectory('images/Alumni');
            }
            //            resize image for category slider and upload
            $alumniImg = Image::make($image)->resize(200,200)->stream();
            Storage::disk('public')->put('images/Alumni/'.$imageName,$alumniImg);




        $user=User::create([
             'roll'=>$data['roll'],
             'name' => $data['name'],
             'batch'=>$data['batch'],
             'session'=>$data['session'],
             'bloodgroup'=>$data['bloodgroup'],
             'image'=>$imageName,
             'profession'=>$data['profession'],
             'phonenumber'=>$data['phonenumber'],
             'email' => $data['email'],
             'password' => Hash::make($data['password']),
        ]);
        $user->roles()->attach(Role::where('name','alumni')->first());
        return $user;
    }
}
