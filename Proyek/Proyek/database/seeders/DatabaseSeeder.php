<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            user_seeder::class,
            donation_seeder::class,
            category_seeder::class,
            category_donation_seeder::class,
        ]);
    }
}
