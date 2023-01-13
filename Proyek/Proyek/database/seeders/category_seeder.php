<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class category_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker_data = Faker::create();
        DB::table('categories')->insert([
            [
                'category' => 'Pendidikan'
            ],
            [
                'category' => 'Bencana'
            ],
            [
                'category' => 'Penyakit'
            ],
            [
                'category' => 'Bantuan'
            ]
        ]);
    }
}
