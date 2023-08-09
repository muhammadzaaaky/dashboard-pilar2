<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//import-vendor
use App\Imports\DataImport;
//import-sewatruk-longtrip
use App\Imports\LongSewa;
//import-sewatruk-shorttrip
use App\Imports\ShortSewa;
//import-pindahan-longtrip
use App\Imports\PindahanLongTrip;
//import-pindahan-shorttrip
use App\Imports\PindahanShortTrip;

class ImportController extends Controller
{
    public function showImportForm()
    {
        return view('import');
    }

    public function importData(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,csv'
        ]);

        $file = $request->file('file');


        \Excel::import(new DataImport, $file);

        return redirect()->route('dashboard')->with('success', 'Data berhasil diimpor!');
    }
    public function importDataLongsewa(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,csv'
        ]);

        $file = $request->file('file');


        \Excel::import(new LongSewa, $file);

        return redirect()->route('listharga-longtriptruk')->with('success', 'Data berhasil diimpor!');
    }
    public function importDataPindahanLongTrip(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,csv'
        ]);

        $file = $request->file('file');


        \Excel::import(new PindahanLongTrip, $file);

        return redirect()->route('listharga-pindahanlongtrip')->with('success', 'Data berhasil diimpor!');
    }
    public function importDataShortsewa(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,csv'
        ]);

        $file = $request->file('file');


        \Excel::import(new ShortSewa, $file);

        return redirect()->route('listharga-shorttriptruk')->with('success', 'Data berhasil diimpor!');
    }
    public function importDataPindahanShortTrip(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,csv'
        ]);

        $file = $request->file('file');


        \Excel::import(new PindahanShortTrip, $file);

        return redirect()->route('listharga-pindahanshorttrip')->with('success', 'Data berhasil diimpor!');
    }
}
