<?php

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $role_admin = Role::where('name', 'admin')->first();
        $role_alumni = Role::where('name', 'alumni')->first();
        
        
        
        $admin = new user();
        $admin->name = 'admin';
        $admin->email = 'tajulislam8028@gmail.com';
        $admin->password = bcrypt('11508028');
        $admin->save();
        $admin->roles()->attach($role_admin);


        $alumni = new User();
        $alumni->name = 'alumni';
        $alumni->email = 'simulislam8028@gmail.com';
        $alumni->password = bcrypt('11508028');
        $alumni->save();
        $alumni->roles()->attach($role_alumni);
    }
}