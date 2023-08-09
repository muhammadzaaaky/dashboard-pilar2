<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\OrderSewaTrukLong;
use Illuminate\Support\Carbon;


class OrderLongSewaTruk extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Your dummy data for the 'short_trip_truk' table
        $dummyData = [
            [
                'origin_provinsi' => 'Jawa Barat',
                'origin_kabupaten' => 'Bandung',
                'origin_kecamatan' => 'Cimenyan',
                'destinasi_provinsi' => 'Jawa Timur',
                'destinasi_kabupaten' => 'Surabaya',
                'destinasi_kecamatan' => 'Gresik',
                'armada' => 'L300',
                'harga' => 1500000,
                'whatsapp' => '081234567890',
                'nama' => 'John Doe',
                'email' => 'johndoe@example.com',
                'home_provinsi' => 'Jakarta',
                'home_kabupaten' => 'Jakarta Selatan',
                'home_kecamatan' => 'Kebayoran Baru',
                'detail_alamat_home' => 'Jl. Sudirman No. 123',
                'detail_alamat_origin' => 'Jl. Cimindi No. 456',
                'detail_alamat_destinasi' => 'Jl. Gresik No. 789',
                'rencana_kirim' => Carbon::now()->addDays(7)->format('Y-m-d'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            // Add more dummy data here as needed
        ];

        // Insert the dummy data into the 'short_trip_truk' table
        OrderSewaTrukLong::insert($dummyData);
    }
}
