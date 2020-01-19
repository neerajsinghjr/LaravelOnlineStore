<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'id' => 1,
                'name' => 'Devil',
                'email' => 'devil@mestore.com',
                'password' => bcrypt('devil'),
                'role' => 'admin',
            ]
        ];

        User::insert($users);
    }
}
