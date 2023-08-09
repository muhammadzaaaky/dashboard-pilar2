<?php

namespace App\Imports;

use App\Models\Vendor;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DataImport implements ToCollection, WithHeadingRow
{
    public function collection(\Illuminate\Support\Collection $rows)
    {
        foreach ($rows as $row) {
            Vendor::create([
                'validator' => $row['validator'],
                'nama_validator' => $row['nama_validator'],
                'wa_validator' => $row['wa_validator'],
                'nama_vendor' => $row['nama_vendor'],
                'nama_driver' => $row['nama_driver'],
                'wa_driver' => $row['wa_driver'],
                'telepon' => $row['telepon'],
                'alamat' => $row['alamat'],
                'ktp' => $row['ktp'],
                'sim' => $row['sim'],
                'kir' => $row['kir'],
                'stnk' => $row['stnk'],
                'armada1' => $row['armada1'],
                'armada2' => $row['armada2'],
                'armada3' => $row['armada3'],
                'covarage' => $row['covarage'],
                'homebase' => $row['homebase'],
                'nopol' => $row['nopol'],
                'minat' => $row['minat'],
                'kota' => $row['kota'],
            ]);
        }
    }
}
