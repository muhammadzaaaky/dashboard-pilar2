<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DataExport implements FromCollection, WithHeadings
{
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function collection()
    {
        return $this->data;
    }

    public function headings(): array
    {

        return [
            'validator',
            'nama_validator',
            'wa_validator',
            'nama_vendor',
            'nama_driver',
            'wa_driver',
            'telepon',
            'alamat',
            'ktp',
            'sim',
            'kir',
            'stnk',
            'armada1',
            'armada2',
            'armada3',
            'covarage',
            'homebase',
            'nopol',
            'minat',
            'kota',

        ];
    }
}
