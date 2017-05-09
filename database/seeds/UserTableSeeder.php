<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$role_user = Role::where('name', 'User')->first();
        $role_author = Role::where('name', 'Author')->first();
        $role_admin = Role::where('name', 'Admin')->first();

        $user = new User();
        $user->firstname = 'Visitor';
        $user->lastname = 'Visitor';
        $user->phonenumber = '12345678';
        $user->email = 'visitor@example.com';
        $user->password = bcrypt('visitor');
        $user->save();
        $user->roles()->attach($role_user);

        $admin = new User();
        $admin->firstname = 'Alex';
        $admin->lastname = 'Admin';
        $admin->phonenumber = '12345678';
        $admin->email = 'admin@example.com';
        $admin->password = bcrypt('admin');
        $admin->save();
        $admin->roles()->attach($role_admin);

        $author = new User();
        $author->firstname = 'Andy';
        $author->lastname = 'Author';
        $author->phonenumber = '12345678';
        $author->email = 'author@example.com';
        $author->password = bcrypt('Author');
        $author->save();
        $author->roles()->attach($role_author);

    }
}
