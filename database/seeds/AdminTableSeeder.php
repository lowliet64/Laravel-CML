<?php

use Illuminate\Database\Seeder;
use App\AdminUser;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

     $user= new AdminUser();
       $user->name="kaduadmin";
       $user->email="kadu@admin.com";
       $user->password=crypt("secret",'');
       $user->save();
     
    }
}
