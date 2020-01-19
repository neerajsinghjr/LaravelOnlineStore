<?php

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admins = [
            [
                'id' => 1,
                'name' => 'Devil',
                'email' => 'devil@mestore.com',
                'password' => bcrypt('devil'),
                'role' => 'admin',
            ]
        ];

        Admin::insert($admins);

    }
}
