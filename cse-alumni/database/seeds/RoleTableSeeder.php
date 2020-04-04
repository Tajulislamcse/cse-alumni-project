<?php

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'admin', 'description' => 'A role for admins']);
        Role::create(['name' => 'alumni', 'description' => 'A role for alumnis']);
    }
}