<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //membuat role admin
      $adminRole = new Role();
      $adminRole->name = "admin";
      $adminRole->display_name = "Admin";
      $adminRole->save();   

      //membuat sample admin
      $admin = new User();
      $admin->name = 'admin';
      $admin->email = 'admin@gmail.com';
      $admin->password = Hash::make('rahasia');
      $admin->save();
      $admin->attachRole($adminRole);
    
    }
}
