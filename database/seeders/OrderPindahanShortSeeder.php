<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OrderPindahanShort;

class OrderPindahanShortSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'origin_provinsi' => 'Provinsi1',
                'origin_kabupaten' => 'Kabupaten1',
                'origin_kecamatan' => 'Kecamatan1',
                'origin_kelurahan' => 'Kelurahan1',
                'destinasi_provinsi' => 'Provinsi2',
                'destinasi_kabupaten' => 'Kabupaten2',
                'destinasi_kecamatan' => 'Kecamatan2',
                'destinasi_kelurahan' => 'Kelurahan2',
                'jarak' => '100 km',
                'armada' => 'pickup',
                'tkbm' => '3 Orang',
                'harga' => 500000,
                'whatsapp' => '081234567890',
                'nama' => 'John Doe',
                'email' => 'johndoe@example.com',
                'home_provinsi' => 'Provinsi3',
                'home_kabupaten' => 'Kabupaten3',
                'home_kecamatan' => 'Kecamatan3',
                'home_kelurahan' => 'Kelurahan3',
                'detail_alamat_home' => 'Home Address 123',
                'detail_alamat_origin' => 'Origin Address 456',
                'detail_alamat_destinasi' => 'Destinasi Address 789',
                'rencana_kirim' => '2023-07-26',
            ],
            // Add more dummy data here as needed
        ];

        OrderPindahanShort::insert($data);
    }
}
