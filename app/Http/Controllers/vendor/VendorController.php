<?php

namespace App\Http\Controllers\vendor;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Province;
use App\Models\Vendor;

class VendorController extends Controller
{
    public function index()
    {
        return view('components/dashboard/dashboard-card-07');
    }

    public function index2()
    {
        $vendors = Vendor::latest()->when(request()->search, function ($vendors) {
            $vendors = $vendors->where('nama_vendor', 'like', '%' . request()->search . '%');
            $vendors = $vendors->orWhere('alamat', 'like', '%' . request()->search . '%');
            $vendors = $vendors->orWhere('nama_driver', 'like', '%' . request()->search . '%');
        })->paginate(100);
        return view('components.dashboard.dashboard-card-07', compact('vendors'));
    }



    public function store(Request $request)
    {
        $request->validate([
            'validator' => 'required',
            'nama_validator' => 'required',
            'wa_validator' => 'required',
            'nama_vendor' => 'required',
            'nama_driver' => 'nullable',
            'telepon' => 'required',
            'alamat' => 'required',
            'ktp' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'sim' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'stnk' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'kir' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'armada1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'armada2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'armada3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'nopol' => 'nullable',
            'covarage' => 'nullable',
            'homebase' => 'required',
            'minat' => 'required',
            'kota' => 'nullable',
        ]);

        $input = $request->all();
        if ($ktp = $request->file('ktp')) {
            $gambarKtp = time() . '.' . $request->ktp->extension();
            $ktp->move(public_path('ktpvendor/'), $gambarKtp);
            $input['ktp'] = $gambarKtp;
        }

        if ($sim = $request->file('sim')) {
            $gambarSim = time() . '.' . $request->sim->extension();
            $sim->move(public_path('sim/'), $gambarSim);
            $input['sim'] = $gambarSim;
        }

        if ($stnk = $request->file('stnk')) {
            $gambarStnk = time() . '.' . $request->stnk->extension();
            $stnk->move(public_path('stnk/'), $gambarStnk);
            $input['stnk'] = $gambarStnk;
        }

        if ($kir = $request->file('kir')) {
            $gambarKir = time() . '.' . $request->kir->extension();
            $kir->move(public_path('kir/'), $gambarKir);
            $input['kir'] = $gambarKir;
        }

        if ($armada1 = $request->file('armada1')) {
            $gambarArmada1 = time() . '.' . $request->armada1->extension();
            $armada1->move(public_path('armadadepan/'), $gambarArmada1);
            $input['armada1'] = $gambarArmada1;
        }

        if ($armada2 = $request->file('armada2')) {
            $gambarArmada2 = time() . '.' . $request->armada2->extension();
            $armada2->move(public_path('armadasamping/'), $gambarArmada2);
            $input['armada2'] = $gambarArmada2;
        }

        if ($armada3 = $request->file('armada3')) {
            $gambarArmada3 = time() . '.' . $request->armada3->extension();
            $armada3->move(public_path('armadabelakang/'), $gambarArmada3);
            $input['armada3'] = $gambarArmada3;
        }

        $input['minat'] = $request->input('minat');

        Vendor::create($input);

        return redirect('/success')->with('status', 'Terima kasih sudah mendaftar sebagai Mitra Vendor. Data kamu sudah tersimpan. Tunggu Tim Kami menghubungi Anda.');
    }

    public function view($id)
    {
        $vendors = Vendor::findOrFail($id);
        $states = Province::select('id', 'provinsi')->get();
        return view('vendor.edit', compact('vendors', 'states'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'validator' => 'nullable',
            'nama_validator' => 'nullable',
            'wa_validator' => 'nullable',
            'nama_vendor' => 'nullable',
            'nama_driver' => 'nullable',
            'telepon' => 'nullable',
            'alamat' => 'nullable',
            'ktp' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'sim' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'stnk' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'kir' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'armada1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'armada2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'armada3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'nopol' => 'nullable',
            'covarage' => 'nullable',
            'homebase' => 'nullable',
            'minat' => 'nullable',
            'kota' => 'required',
        ]);
        $states = Province::select('id', 'provinsi')->get();

        $input = $request->all();

        if ($ktp = $request->file('ktp')) {
            $gambarKtp = time() . '.' . $request->ktp->extension();
            $ktp->move(public_path('ktpvendor/'), $gambarKtp);
            $input['ktp'] = $gambarKtp;
        }

        if ($sim = $request->file('sim')) {
            $gambarSim = time() . '.' . $request->sim->extension();
            $sim->move(public_path('sim/'), $gambarSim);
            $input['sim'] = $gambarSim;
        }

        if ($stnk = $request->file('stnk')) {
            $gambarStnk = time() . '.' . $request->stnk->extension();
            $stnk->move(public_path('stnk/'), $gambarStnk);
            $input['stnk'] = $gambarStnk;
        }

        if ($kir = $request->file('kir')) {
            $gambarKir = time() . '.' . $request->kir->extension();
            $kir->move(public_path('kir/'), $gambarKir);
            $input['kir'] = $gambarKir;
        }

        if ($armada1 = $request->file('armada1')) {
            $gambarArmada1 = time() . '.' . $request->armada1->extension();
            $armada1->move(public_path('armadadepan/'), $gambarArmada1);
            $input['armada1'] = $gambarArmada1;
        }

        if ($armada2 = $request->file('armada2')) {
            $gambarArmada2 = time() . '.' . $request->armada2->extension();
            $armada2->move(public_path('armadasamping/'), $gambarArmada2);
            $input['armada2'] = $gambarArmada2;
        }

        if ($armada3 = $request->file('armada3')) {
            $gambarArmada3 = time() . '.' . $request->armada3->extension();
            $armada3->move(public_path('armadabelakang/'), $gambarArmada3);
            $input['armada3'] = $gambarArmada3;
        }

        $vendors = Vendor::findOrFail($id);
        $vendors->update($input);

        return redirect('/dashboard')->with('status', 'Terima kasih sudah mendaftar sebagai Mitra Vendor. Data kamu sudah tersimpan. Tunggu Tim Kami menghubungi Anda.');
    }
}
