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
        Role::create(['name' => 'meeting manager']);

        // Create some permissions
        Permission::create(['name' => 'modify user accounts']);

        // Create some users
        $adminUser = new User();
        $adminUser->firstname = "Mr. Admin";
        $adminUser->lastname = "bob";
        $adminUser->phonenumber = "12345678";
        $adminUser->email = "admin@example.com";
        $adminUser->password = bcrypt('password');
        $adminUser->save();

        $meetingUser = new User();
        $meetingUser->firstname = "Mr. Meeting";
        $meetingUser->lastname = "bob";
        $meetingUser->phonenumber = "12345678";
        $meetingUser->email = "meeting@example.com";
        $meetingUser->password = bcrypt('password');
        $meetingUser->save();

        $masterUser = new User();
        $masterUser->firstname = "Mr. Web Master";
        $masterUser->lastname = "bob";
        $masterUser->phonenumber = "12345678";
        $masterUser->email = "master@example.com";
        $masterUser->password = bcrypt('password');
        $masterUser->save();

        // Give the accounts some roles
        $adminUser->assignRole('admin');

        $meetingUser->assignRole('meeting manager');

        $masterUser->assignRole('admin');
        $masterUser->assignRole('meeting manager');

        // Give an account a permission
        $masterUser->givePermissionTo( 'modify user accounts' );
    }
}

