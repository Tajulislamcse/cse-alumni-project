<?php

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name', 'admin')->first();
        $admin = new user();
        $admin->name = 'tajul';
        $admin->status=1;
        $admin->email = 'tajulislam8028@gmail.com';
        $admin->password = bcrypt('11508028');
        $admin->save();
        $admin->roles()->attach($role_admin);
    }
}
