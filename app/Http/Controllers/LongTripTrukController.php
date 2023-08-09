<?php

namespace App\Http\Controllers;

use App\Models\LongTripTruk;
use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use Illuminate\Support\Facades\DB;

class LongTripTrukController extends Controller
{

    /**
     * Displays the dashboard screen
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        // $dataFeed = new DataFeed();
        $originKabupatens = DB::table('longtrip_truk')->distinct('origin_kabupaten')->pluck('origin_kabupaten');
        $destinasiKabupatens = DB::table('longtrip_truk')->distinct('destinasi_kabupaten')->pluck('destinasi_kabupaten');
        // return view('pages/dashboard/dashboard', compact('dataFeed'));
        $hargas = LongTripTruk::latest()->when(request()->search, function ($hargas) {
            $hargas = $hargas->where('origin_kabupaten', 'like', '%' . request()->search . '%');
            $hargas = $hargas->orWhere('alamat', 'like', '%' . request()->search . '%');
            $hargas = $hargas->orWhere('nama_driver', 'like', '%' . request()->search . '%');
        })->paginate(100);
        return view('pages/longtriptruk/index', compact('hargas', 'originKabupatens', 'destinasiKabupatens'));
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

    public function create()
    {
        $provinces = Province::all();
        return view('pages.longtriptruk.create', compact('provinces'));
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'origin_provinsi' => 'required',
            'origin_kabupaten' => 'required',
            'origin_kecamatan' => 'required',
            'destinasi_provinsi' => 'required',
            'destinasi_kabupaten' => 'required',
            'destinasi_kecamatan' => 'required',
            'armada' => 'required',
            'harga' => 'required',
        ]);

        // Mendapatkan nama provinsi, kabupaten, dan kecamatan berdasarkan ID yang dipilih
        $originProvinsi = Province::find($request->origin_provinsi)->name;
        $originKabupaten = Regency::find($request->origin_kabupaten)->name;
        $originKecamatan = District::find($request->origin_kecamatan)->name;
        $destinasiProvinsi = Province::find($request->destinasi_provinsi)->name;
        $destinasiKabupaten = Regency::find($request->destinasi_kabupaten)->name;
        $destinasiKecamatan = District::find($request->destinasi_kecamatan)->name;

        // Membuat objek Data baru
        $data = new LongTripTruk;
        $data->origin_provinsi = $originProvinsi;
        $data->origin_kabupaten = $originKabupaten;
        $data->origin_kecamatan = $originKecamatan;
        $data->destinasi_provinsi = $destinasiProvinsi;
        $data->destinasi_kabupaten = $destinasiKabupaten;
        $data->destinasi_kecamatan = $destinasiKecamatan;
        $data->armada = $request->armada;
        $data->harga = $request->harga;
        $data->save();
        // Fetch provinces again for use in the view
        $provinces = Province::all();

        return redirect()->route('listharga-longtriptruk')
            ->with('provinces', $provinces)
            ->with('success', 'Data created successfully.');
    }

    public function edit($id)
    {
        $hargas = LongTripTruk::findOrFail($id);
        // $regencies = Regency::all();
        $provinces = Province::all();
        return view('pages.longtriptruk.edit', compact('hargas', 'provinces'));
    }


    public function update(Request $request, int $id)
    {
        $longTripTruk = LongTripTruk::findOrFail($id);

        $longTripTruk->origin_provinsi = $request->input('origin_provinsi');
        $longTripTruk->origin_kabupaten = $request->input('origin_kabupaten');
        $longTripTruk->origin_kecamatan = $request->input('origin_kecamatan');
        $longTripTruk->destinasi_provinsi = $request->input('destinasi_provinsi');
        $longTripTruk->destinasi_kabupaten = $request->input('destinasi_kabupaten');
        $longTripTruk->destinasi_kecamatan = $request->input('destinasi_kecamatan');
        $longTripTruk->armada = $request->input('armada');
        $longTripTruk->harga = $request->input('harga');

        $longTripTruk->update($request->all());

        return redirect()->route('listharga-longtriptruk')->with('update', 'Data Update successfully.');
    }

    public function destroy($id)
    {
        $hargas = LongTripTruk::findOrFail($id);
        $hargas->delete();
        return redirect()->route('listharga-longtriptruk')->with('delete', 'Data deleted successfully');
    }

    public function search(Request $request)
    {
        $originKabupatens = DB::table('longtrip_truk')->select('origin_kabupaten')->distinct()->get();
        $destinasiKabupatens = DB::table('longtrip_truk')->select('destinasi_kabupaten')->distinct()->get();
        $hargas = DB::table('longtrip_truk')->select('harga')->distinct()->get();

        $query = LongTripTruk::query();

        if ($request->origin_kabupaten) {
            $query->where('origin_kabupaten', 'LIKE', '%' . $request->origin_kabupaten . '%');
        }

        if ($request->destinasi_kabupaten) {
            $query->where('destinasi_kabupaten', 'LIKE', '%' . $request->destinasi_kabupaten . '%');
        }

        // Menggunakan distinct pada builder sebelum paginasi
        $query->distinct();

        // Lakukan paginasi pada hasil query
        $result = $query->get();

        return view('pages.longtriptruk.search', compact('originKabupatens', 'destinasiKabupatens', 'hargas', 'result'));
    }

    public function liveSearch(Request $request)
    {
        $query = $request->input('query');

        // Lakukan query pencarian berdasarkan teks yang diberikan
        $results = LongTripTruk::where('origin_kabupaten', 'LIKE', '%' . $query . '%')
            ->pluck('origin_kabupaten')
            ->toArray();

        // Mengembalikan hasil dalam bentuk JSON
        return response()->json($results);
    }
}
