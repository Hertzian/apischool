<?php

use App\User;
use Illuminate\Database\Seeder;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = new User();
        $user1->name = 'user';
        $user1->surname = 'user';
        $user1->lastsurname = 'user';
        $user1->email = 'user@user.com';
        $user1->password = bcrypt('12345678');
        $user1->save();

        $user2 = new User();
        $user2->name = 'user2';
        $user2->surname = 'user2';
        $user2->lastsurname = 'user2';
        $user2->email = 'user2@user2.com';
        $user2->password = bcrypt('12345678');
        $user2->save();
        
        $admin = new User();
        $admin->name = 'admin';
        $admin->surname = 'admin';
        $admin->lastsurname = 'admin';
        $admin->email = 'admin@admin.com';
        $admin->role = '1';
        $admin->password = bcrypt('12345678');
        $admin->save();

        // factory(User::class, 5)->create();
    }
}
