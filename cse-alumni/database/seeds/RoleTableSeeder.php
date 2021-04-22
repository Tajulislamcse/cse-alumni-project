<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $admin=new Role();
      $admin->name='admin';
      $admin->description='A role for Admins';
      $admin->save();

      $committeeMember=new Role();
      $committeeMember->name='CommitteeMember';
      $committeeMember->description='A role for Committee members';
      $committeeMember->save();
 
      $generalMember=new Role();
      $generalMember->name='GeneralMember';
      $generalMember->description='A role for General members';
      $generalMember->save();


    }
}