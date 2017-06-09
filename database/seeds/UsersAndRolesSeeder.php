<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use App\User;

class UsersAndRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create some roles
        $adminRole = Role::create(['name' => 'admin']);

        // Create some permissions
        Permission::create(['name' => 'modify user accounts']);

        // Create some users

        $masterUser = new User();
        $masterUser->firstname = "Mr. Web Master";
        $masterUser->lastname = "bob";
        $masterUser->phonenumber = "12345678";
        $masterUser->email = "master@example.com";
        $masterUser->password = bcrypt('password');
        $masterUser->save();

        $masterUser->assignRole('admin');

        // Give an account a permission
        $masterUser->givePermissionTo( 'modify user accounts' );
    }
}

