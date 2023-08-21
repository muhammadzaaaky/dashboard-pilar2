<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderSewaTrukShort;
use App\Models\Province;

class OrderSewaTrukShortController extends Controller
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
        $hargas = OrderSewaTrukShort::latest()->when(request()->search, function ($hargas) {
            $hargas = $hargas->where('origin_kabupaten', 'like', '%' . request()->search . '%');
            $hargas = $hargas->orWhere('alamat', 'like', '%' . request()->search . '%');
            $hargas = $hargas->orWhere('nama_driver', 'like', '%' . request()->search . '%');
        })->paginate(100);
        return view('pages/ordersewatrukshort/index', compact('hargas'));
    }

    public function edit($id)
    {
        $hargas = OrderSewaTrukShort::findOrFail($id);
        // $regencies = Regency::all();
        $provinces = Province::all();
        return view('pages/ordersewatrukshort/edit', compact('hargas', 'provinces'));
    }

    public function update(Request $request, $id)
    {
        $order = OrderSewaTrukShort::findOrFail($id);

        $order->update([
            // 'origin_provinsi' => $request->input('origin_provinsi'),
            // 'origin_kabupaten' => $request->input('origin_kabupaten'),
            // 'origin_kecamatan' => $request->input('origin_kecamatan'),
            // 'destinasi_provinsi' => $request->input('destinasi_provinsi'),
            // 'destinasi_kabupaten' => $request->input('destinasi_kabupaten'),
            // 'destinasi_kecamatan' => $request->input('destinasi_kecamatan'),
            // 'armada' => $request->input('armada'),
            // 'tkbm' => $request->input('tkbm'),
            // 'harga' => $request->input('harga'),
            // 'whatsapp' => $request->input('whatsapp'),
            'status' => $request->input('status'),
            // 'user_id' => $request->input('user_id'),
            // 'gambar' => $request->input('gambar'),
            // 'nama' => $request->input('nama'),
            // 'email' => $request->input('email'),
            // 'paket' => $request->input('paket'),
            // 'home_provinsi' => $request->input('home_provinsi'),
            // 'home_kabupaten' => $request->input('home_kabupaten'),
            // 'home_kecamatan' => $request->input('home_kecamatan'),
            // 'detail_alamat_home' => $request->input('detail_alamat_home'),
            // 'detail_alamat_origin' => $request->input('detail_alamat_origin'),
            // 'detail_alamat_destinasi' => $request->input('detail_alamat_destinasi'),
            // 'rencana_kirim' => $request->input('rencana_kirim'),
        ]);

        return redirect()->route('ordersewa-shorttriptruk')->with('success', 'Data berhasil diperbarui.');
    }
}
