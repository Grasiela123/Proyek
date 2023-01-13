<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class user_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => '2',
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('Admin123'),
                'phoneNumber' => '081324362862',
                'role' => 'admin',
            ]
        ]);
        DB::table('users')->insert([
            [
                'id' => '1',
                'name' => 'user',
                'email' => 'user@user.com',
                'password' => bcrypt('User123'),
                'phoneNumber' => '081329352369',
            ]
        ]);
    }
}
