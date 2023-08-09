<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ShortSewa implements FromCollection, WithHeadings
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
            'id',
            'origin_provinsi',
            'origin_kabupaten',
            'origin_kecamatan',
            'origin_kelurahan',
            'destinasi_provinsi',
            'destinasi_kabupaten',
            'destinasi_kecamatan',
            'destinasi_kelurahan',
            'jarak',
            'armada',
            'harga',
        ];
    }
}
