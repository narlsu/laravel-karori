<?php

use Illuminate\Database\Seeder;

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
        $adminUser->name = "Mr. Admin";
        $adminUser->email = "admin@example.com";
        $adminUser->password = bcrypt('password');
        $adminUser->save();

        $meetingUser = new User();
        $meetingUser->name = "Mr. Meeting";
        $meetingUser->email = "meeting@example.com";
        $meetingUser->password = bcrypt('password');
        $meetingUser->save();

        $masterUser = new User();
        $masterUser->name = "Mr. Web Master";
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
