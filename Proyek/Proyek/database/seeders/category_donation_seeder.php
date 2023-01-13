<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class category_donation_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker_data = Faker::create();
        DB::table('category_donation')->insert([
            [
                'donation_id' => '1',
                'category_id' => '3'
            ],
            [
                'donation_id' => '2',
                'category_id' => '3'
            ],
            [
                'donation_id' => '3',
                'category_id' => '3'
            ],
            [
                'donation_id' => '4',
                'category_id' => '4'
            ],
            [
                'donation_id' => '5',
                'category_id' => '1'
            ],
            [
                'donation_id' => '6',
                'category_id' => '4'
            ],
            [
                'donation_id' => '7',
                'category_id' => '4'
            ],
            [
                'donation_id' => '8',
                'category_id' => '2'
            ],
            [
                'donation_id' => '9',
                'category_id' => '2'
            ],
            [
                'donation_id' => '10',
                'category_id' => '3'
            ],
        ]);
    }
}
