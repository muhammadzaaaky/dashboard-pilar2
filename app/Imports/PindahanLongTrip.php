<?php

namespace App\Imports;

use App\Models\LongTripPindahan;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PindahanLongTrip implements ToCollection, WithHeadingRow
{
    public function collection(\Illuminate\Support\Collection $rows)
    {
        foreach ($rows as $row) {
            LongTripPindahan::create([
                'origin_provinsi' => $row['origin_provinsi'],
                'origin_kabupaten' => $row['origin_kabupaten'],
                'origin_kecamatan' => $row['origin_kecamatan'],
                'destinasi_provinsi' => $row['destinasi_provinsi'],
                'destinasi_kabupaten' => $row['destinasi_kabupaten'],
                'destinasi_kecamatan' => $row['destinasi_kecamatan'],
                'armada' => $row['armada'],
                'harga' => $row['harga'],
            ]);
        }
    }
}
