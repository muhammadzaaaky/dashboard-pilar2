<?php

namespace App\Http\Controllers;

use App\Models\ShortTripPindahan;
use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;

class ShortTripPindahanController extends Controller
{

    /**
     * Displays the dashboard screen
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        // $dataFeed = new DataFeed();

        // return view('pages/dashboard/dashboard', compact('dataFeed'));
        $hargas = ShortTripPindahan::latest()->when(request()->search, function ($hargas) {
            $hargas = $hargas->where('origin_kabupaten', 'like', '%' . request()->search . '%');
            $hargas = $hargas->orWhere('alamat', 'like', '%' . request()->search . '%');
            $hargas = $hargas->orWhere('nama_driver', 'like', '%' . request()->search . '%');
        })->paginate(100);
        return view('pages/shorttrippindahan/index', compact('hargas'));
    }

    public function kabupaten(Request $request)
    {
        $id_provinsi = $request->id_provinsi;

        $kabuptens = Regency::where('province_id', $id_provinsi)->get();

        return response()->json($kabuptens);
    }

    public function kecamatan(Request $request)
    {
        $id_kabupaten = $request->id_kabupaten;

        $kecamatans = District::where('regency_id', $id_kabupaten)->get();

        return response()->json($kecamatans);
    }

    public function kelurahan(Request $request)
    {
        $id_kecamatan = $request->id_kecamatan;

        $kelurahans = Village::where('district_id', $id_kecamatan)->get();

        return response()->json($kelurahans);
    }

    public function kabupatencek(Request $request)
    {
        $id_provinsi = $request->id_provinsi;

        $kabuptens = Regency::where('province_id', $id_provinsi)->get();

        return response()->json($kabuptens);
    }

    public function kecamatancek(Request $request)
    {
        $id_kabupaten = $request->id_kabupaten;

        $kecamatans = District::where('regency_id', $id_kabupaten)->get();

        return response()->json($kecamatans);
    }

    public function kelurahancek(Request $request)
    {
        $id_kecamatan = $request->id_kecamatan;

        $kelurahans = Village::where('district_id', $id_kecamatan)->get();

        return response()->json($kelurahans);
    }

    public function create()
    {
        $provinces = Province::all();
        return view('pages.shorttrippindahan.create', compact('provinces'));
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'origin_provinsi' => 'required',
            'origin_kabupaten' => 'required',
            'origin_kecamatan' => 'required',
            'origin_kelurahan' => 'required',
            'destinasi_provinsi' => 'required',
            'destinasi_kabupaten' => 'required',
            'destinasi_kecamatan' => 'required',
            'destinasi_kelurahan' => 'required',
            'armada' => 'required',
            'jarak' => 'required',
            'harga' => 'required',
        ]);

        // Mendapatkan nama provinsi, kabupaten, dan kecamatan berdasarkan ID yang dipilih
        $originProvinsi = Province::find($request->origin_provinsi)->name;
        $originKabupaten = Regency::find($request->origin_kabupaten)->name;
        $originKecamatan = District::find($request->origin_kecamatan)->name;
        $originKelurahan = Village::find($request->origin_kelurahan)->name;
        $destinasiProvinsi = Province::find($request->destinasi_provinsi)->name;
        $destinasiKabupaten = Regency::find($request->destinasi_kabupaten)->name;
        $destinasiKecamatan = District::find($request->destinasi_kecamatan)->name;
        $destinasiKelurahan = Village::find($request->destinasi_kelurahan)->name;

        // Membuat objek Data baru
        $data = new ShortTripPindahan;
        $data->origin_provinsi = $originProvinsi;
        $data->origin_kabupaten = $originKabupaten;
        $data->origin_kecamatan = $originKecamatan;
        $data->origin_kelurahan = $originKelurahan;
        $data->destinasi_provinsi = $destinasiProvinsi;
        $data->destinasi_kabupaten = $destinasiKabupaten;
        $data->destinasi_kecamatan = $destinasiKecamatan;
        $data->destinasi_kelurahan = $destinasiKelurahan;
        $data->armada = $request->armada;
        $data->jarak = $request->jarak;
        $data->harga = $request->harga;
        $data->save();
        // Fetch provinces again for use in the view
        $provinces = Province::all();

        return redirect()->route('listharga-pindahanshorttrip')
            ->with('provinces', $provinces)
            ->with('success', 'Data created successfully.');
    }
    public function destroy($id)
    {
        $hargas = ShortTripPindahan::findOrFail($id);
        $hargas->delete();
        return redirect()->route('listharga-pindahanshorttrip')->with('delete', 'Data deleted successfully');
    }
}
