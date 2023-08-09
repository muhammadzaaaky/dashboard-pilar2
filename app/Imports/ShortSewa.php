<?php

namespace App\Imports;

use App\Models\ShortTripTruk;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ShortSewa implements ToCollection, WithHeadingRow
{
    public function collection(\Illuminate\Support\Collection $rows)
    {
        foreach ($rows as $row) {
            ShortTripTruk::create([
                'origin_provinsi' => $row['origin_provinsi'],
                'origin_kabupaten' => $row['origin_kabupaten'],
                'origin_kecamatan' => $row['origin_kecamatan'],
                'origin_kelurahan' => $row['origin_kelurahan'],
                'destinasi_provinsi' => $row['destinasi_provinsi'],
                'destinasi_kabupaten' => $row['destinasi_kabupaten'],
                'destinasi_kecamatan' => $row['destinasi_kecamatan'],
                'destinasi_kelurahan' => $row['destinasi_kelurahan'],
                'jarak' => $row['jarak'],
                'armada' => $row['armada'],
                'harga' => $row['harga'],
            ]);
        }
    }
}
