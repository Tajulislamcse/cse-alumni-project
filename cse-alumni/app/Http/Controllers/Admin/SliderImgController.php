<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\SliderImg;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class SliderImgController extends Controller
{
   
    
    public function index()
    {
        

        
      
     $getAll=SliderImg::all();
   
        return view('admin.Sliderimage.index',compact('getAll'));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
       // get form image
         
           if ($image = $request->file('name'))
           {
                  
          
            $currentDate = Carbon::now()->toDateString();
            $imagename = 'slider'.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
//            check category dir is exists
             


            //            check category slider dir is exists
            if (!Storage::disk('public')->exists('images/slider'))
            {
                Storage::disk('public')->makeDirectory('images/slider');
            }
            //            resize image for category slider and upload
            $resizeImg = Image::make($image)->resize(1110,660)->stream();
            Storage::disk('public')->put('images/slider/'.$imagename,$resizeImg);
              //$files[]=$imagename;

         
          
        $slider = new SliderImg();
      
        $slider->name=$imagename;
        $slider->save();
    }
       return redirect('admin/slider');
        

                
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    



      
          
          $fetchRecordById=SliderImg::find($id);
         
          if( $image = $request->file('name'))
          {
           
            $currentDate = Carbon::now()->toDateString();
            $imagename = 'slider'.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension(); 
//            check category dir is exists
            
            //            check category slider dir is exists
            if (!Storage::disk('public')->exists('images/slider'))
            {
                Storage::disk('public')->makeDirectory('images/slider');
            }
//            delete old image
            if (Storage::disk('public')->exists('images/slider/'.$fetchRecordById->name))
             {
            Storage::disk('public')->delete('images/slider/'.$fetchRecordById->name);
             }
//            resize image for category and upload
            $resizeImg = Image::make($image)->resize(1110,660)->stream();
            Storage::disk('public')->put('images/slider/'.$imagename,$resizeImg);


         $fetchRecordById->name = $imagename;
        
       
        $fetchRecordById->save();

    }
    
       return redirect('/admin/slider');
        

         

    }

    public function destroy($id)
    {
        
        $image=SliderImg::find($id);
        if (Storage::disk('public')->exists('images/slider/'.$image->name))
        {
            Storage::disk('public')->delete('images/slider/'.$image->name);
        }
       
        $image->delete();
         
       return redirect('/admin/slider');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
   */







      
    
}
