<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PindahanLongTrip implements FromCollection, WithHeadings
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
            'destinasi_provinsi',
            'destinasi_kabupaten',
            'destinasi_kecamatan',
            'armada',
            'harga',
        ];
    }
}
