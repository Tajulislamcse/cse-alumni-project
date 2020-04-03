<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert(
     	[   'role_id'=>'1',
     		'roll'=>'11508028',
     		'name'=>'tajulislam',
     		 'batch'=>'7th',
     		 'session'=>'2014-2015',
     		  'bloodgroup'=>'o+',
     		  'image'=>'3.jpg',
     		   'profession'=>'developer',
                'phonenumber'=>'01767704837', 
                'email'=>'tajulislam8028@gmail.com',
                'password'=>bcrypt('11508028')
          

        ]
     );	

       DB::table('users')->insert(
     	[   'role_id'=>'2',
     		'roll'=>'11508028',
     		'name'=>'simulislam',
     		 'batch'=>'7th',
     		 'session'=>'2014-2015',
     		  'bloodgroup'=>'o+',
     		  'image'=>'3.jpg',
     		   'profession'=>'developer',
                'phonenumber'=>'01767704837', 
                'email'=>'simulislam8028@gmail.com',
                'password'=>bcrypt('11508045')
          

        ]
     );	

  }
}
