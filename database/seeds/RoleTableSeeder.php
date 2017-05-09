<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //


        $role_user = new Role();
        $role_user->name = 'user';
        $role_user->description = 'A normal user';
        $role_user->save();


        $role_author = new Role();
        $role_author->name = 'Author';
        $role_author->description = 'An Author';
        $role_author->save();


        $role_admin = new Role();
        $role_admin->name = 'Admin';
        $role_admin->description = 'A Admin';
        $role_admin->save();
    }
}
