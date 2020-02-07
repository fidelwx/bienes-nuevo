<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;
use App\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('roles')->insert([
            'name'      =>      'Admin',
            'slug'     =>      'admin',
            'special'  =>      'all-access'
        ]);

        DB::table('users')->insert([
            'name'      =>      'admin',
            'email' 	=> 		'admin@gmail.com',
            'password' 	=> 		bcrypt('admin'),
    		//'level'		=>		'admin',
    		//'status'	=>		'1',
    		//'person_id'	=>		'1',
        ]);
    }
}
