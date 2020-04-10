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
        $admin->roll='11508028';
        $admin->name = 'tajul';
        $admin->batch='CSE-7th';
        $admin->session='2014-15';
        $admin->bloodgroup='o+';
        $admin->image='3.jpg';
        $admin->profession='brainstation';
        $admin->phonenumber='01767704837';
        $admin->email = 'tajulislam8028@gmail.com';
        $admin->password = bcrypt('11508028');
        $admin->save();
        $admin->roles()->attach($role_admin);


        $admin = new user();
        $admin->roll='11508045';
        $admin->name = 'simul';
        $admin->batch='CSE-7th';
        $admin->session='2014-15';
        $admin->bloodgroup='o+';
        $admin->image='3.jpg';
        $admin->profession='brainstation';
        $admin->phonenumber='01750368459';
        $admin->email = 'simul@gmail.com';
        $admin->password = bcrypt('11508045');
        $admin->save();
        $admin->roles()->attach($role_admin);


        $alumni = new User();
        $alumni->roll='11508044';
        $alumni->name = 'test';
        $alumni->batch='CSE-7th';
        $alumni->session='2014-15';
        $alumni->bloodgroup='o+';
        $alumni->image='3.jpg';
        $alumni->profession='brainstation';
        $alumni->phonenumber='01750368459';
        $alumni->email = 'test@gmail.com';
        $alumni->password = bcrypt('11508045');
        $alumni->save();
        $alumni->roles()->attach($role_alumni);
    }
}