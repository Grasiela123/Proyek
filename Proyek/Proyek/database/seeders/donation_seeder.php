<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class donation_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker_data = Faker::create();
        DB::table('donations')->insert([
            [
                'user_id' => '1',
                'title' => 'Donasi untuk pasien yang sedang sakit Kanker',
                'image' =>  url('images/donasi1.jpeg'),
                'detail' => 'Saat ini banyak pasien di rumah sakit yang sedang mengidap kanker dan membutuhkan bantuan untuk memenuhi biaya penunjangan rumah sakit. Maka itu kami dari pihak DonAnon meminta seluruh orang di dunia untuk membantu mereka yang sedang kesusahan',
                'organization' => 'DonAnon',
                'ttl_donation' => 'Rp. 120,000,000'
            ],
            [
                'user_id' => '1',
                'title' => 'Bantu Arkhan Lawan Kanker Dan Efek Berat Kemo',
                'image' => url('images/donasi2.jpg'),
                'detail' => 'Tolong bantu Arkhan yang sedang menydap Kanker dan mengalami efek sampingan dari Kemo yang telah dijalani Arkhan untuk menyembuhkan penyakitnya Arkhan harus menghadapi kenyataan yang belum tentu ia sanggup menerimanya.',
                'organization' => 'Bantu Bersama',
                'ttl_donation' => 'Rp. 90,000,000'
            ],
            [
                'user_id' => '1',
                'title' => 'Bantu pak Joko sembuh dari kecelekaan berat',
                'image' => url('images/donasi3.jpg'),
                'detail' => 'Pak Tilam sangat membutuhkan bantuan dan uluran tangan dari orang-orang baik. Kami dan pihak keluarga sudah habis-habisan mengumpulkan uang, dan menjual motor satu2nya.',
                'organization' => 'Bantu Bersama',
                'ttl_donation' => 'Rp. 49,000,000'
            ],
            [
                'user_id' => '1',
                'title' => 'Bantuan untuk panti asuhan Banten',
                'image' => url('images/donasi4.jpg'),
                'detail' => 'Penggalangan dana untuk panti asuhan akan dialihkan terhadap uang pembangunan terlebih dahulu agar panti asuhan di daerah Banten akan lebih layak untuk dtinggali',
                'organization' => 'Community of good',
                'ttl_donation' => 'Rp. 150,000,000'
            ],
            [
                'user_id' => '1',
                'title' => 'Rizky tidak bisa sekolah, tolong bantuannya',
                'image' => url('images/donasi5.jpg'),
                'detail' => 'Tolong bantu Rizky yang ingin sekolah namun tidak mampu karena masalah keuangan yang dimiliki keluarganya',
                'organization' => 'EduAll',
                'ttl_donation' => 'Rp. 15,000,000'
            ],
            [
                'user_id' => '1',
                'title' => 'Membantu Anak Yatim (Bantuan bagi 500 anak yatim)',
                'image' => url('images/donasi6.jpg'),
                'detail' => 'Bagi Kalian yang ingin membantu anak yatim dapat melakukan penyumbangan ke sini',
                'organization' => 'WeCan',
                'ttl_donation' => 'Rp. 500,000,000'
            ],
            [
                'user_id' => '1',
                'title' => 'Peduli anak anak panti asuhan',
                'image' => url('images/donasi7.jpg'),
                'detail' => 'Membantu panti asuhan agar seluruh penghuni dapat hidup selayak mungkin',
                'organization' => 'Miracle',
                'ttl_donation' => 'Rp. 105,000,000'
            ],
            [
                'user_id' => '1',
                'title' => 'Bantuan untuk para korban bencana banjir',
                'image' => url('images/donasi8.jpg'),
                'detail' => 'Kota banten terkena banjir pada tanggal 23 yang lalu, banyak orang yang kehilangan barang akibat terkena banjir sehingga membutuhkan bantuan untuk melewati masa yang keras ini',
                'organization' => 'WorkOfGood',
                'ttl_donation' => 'Rp. 105,000,000'
            ],
            [
                'user_id' => '1',
                'title' => 'Bantuan untuk korban Gempa Cianjur',
                'image' => url('images/donasi9.jpg'),
                'detail' => 'Cianjur terkena gempa 5,6 skala ritcher, banyak rumah yang hancur dan juga orang yang kekurangan makanan serta tenda',
                'organization' => 'NiceG',
                'ttl_donation' => 'Rp. 25,000,000'
            ],
            [
                'user_id' => '1',
                'title' => 'Kakak saya mengalami kecelakaan yang sangat parah',
                'image' => url('images/donasi10.jpg'),
                'detail' => 'Kakak saya minggu lalu mengalami kecelakaan parah sehingga membutuhkan operasi, namun kami tidak memiliki uang untuk operasi, mohon bantuan nya.',
                'organization' => 'JusticeCode',
                'ttl_donation' => 'Rp. 105,000,000'
            ]
        ]);
    }
}
