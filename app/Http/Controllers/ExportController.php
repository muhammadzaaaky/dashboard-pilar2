<?php

namespace App\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;
//export-vendor
use App\Models\Vendor;
use App\Exports\DataExport;
//export-sewatruk-longtrip
use App\Models\LongTripTruk;
use App\Exports\LongSewa;
//export-pindahan-longtrip
use App\Models\LongTripPindahan;
use App\Exports\PindahanLongTrip;
//export-sewatruk-shorttrip
use App\Models\ShortTripTruk;
use App\Exports\ShortSewa;
//export-pindahan-longtrip
use App\Models\ShortTripPindahan;
use App\Exports\PindahanShortTrip;

use Illuminate\Http\Request;

class ExportController extends Controller
{
    public function exportData()
    {
        $data = Vendor::all();

        return Excel::download(new DataExport($data), 'data.xlsx');
    }

    public function exportDataLongsewa()
    {
        $data = LongTripTruk::all();

        return Excel::download(new LongSewa($data), 'longtripsewatruk.xlsx');
    }
    public function exportDataPindahanLongTrip()
    {
        $data = LongTripPindahan::all();

        return Excel::download(new PindahanLongTrip($data), 'pindahanlongtrip.xlsx');
    }
    public function exportDataShortsewa()
    {
        $data = ShortTripTruk::all();

        return Excel::download(new ShortSewa($data), 'shorttripsewatruk.xlsx');
    }
    public function exportDataPindahanShortTrip()
    {
        $data = ShortTripPindahan::all();

        return Excel::download(new PindahanShortTrip($data), 'pindahanshorttrip.xlsx');
    }
}
