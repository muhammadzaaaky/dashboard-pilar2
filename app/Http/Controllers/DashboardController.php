<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\DataFeed;
use App\Models\Vendor;
use App\Models\Regency;
use App\Models\Province;
use Carbon\Carbon;

class DashboardController extends Controller
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
        $vendors = Vendor::latest()->when(request()->search, function ($vendors) {
            $vendors = $vendors->where('nama_vendor', 'like', '%' . request()->search . '%');
            $vendors = $vendors->orWhere('alamat', 'like', '%' . request()->search . '%');
            $vendors = $vendors->orWhere('nama_driver', 'like', '%' . request()->search . '%');
        })->paginate(100);
        return view('pages/dashboard/dashboard', compact('vendors'));
    }

    public function create()
    {
        // $states = Province::select('id', 'provinsi')->get();
        // return view('pages.vendor.create', compact('states'));

        $regencies = Regency::all();
        return view('pages.vendor.create', compact('regencies'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'validator' => 'required',
            'nama_validator' => 'required',
            'wa_validator' => 'required',
            'nama_vendor' => 'required',
            'nama_driver' => 'nullable',
            'wa_driver' => 'required',
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

        // Store the validated data in the session

        // $input['minat'] = $request->input('minat');
        // Get the regency name based on the provided 'kota' ID
        $regency = Regency::find($request->input('kota'));

        if ($regency) {
            $input['kota'] = $regency->name;
        }


        Vendor::create($input);

        return redirect('/dashboard')->with('success', 'Terima kasih sudah mendaftar sebagai Mitra Vendor. Data kamu sudah tersimpan.');
    }

    public function edit($id)
    {
        $vendors = Vendor::findOrFail($id);
        $regencies = Regency::all();
        return view('pages/vendor/edit', compact('vendors', 'regencies'));
    }

    public function update(Request $request, $id)
    {
        $vendors = Vendor::findOrFail($id);
        $request->validate([
            'validator' => 'required',
            'nama_validator' => 'required',
            'wa_validator' => 'required',
            'nama_vendor' => 'required',
            'nama_driver' => 'nullable',
            'wa_driver' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
            'nopol' => 'nullable',
            'covarage' => 'nullable',
            'homebase' => 'required',
            'kota' => 'nullable',
        ]);
        $regency = Regency::find($request->input('kota'));

        if ($regency) {
            $input['kota'] = $regency->name;
        }
        $vendors->update($request->all());

        return redirect()->route('vendors.index')->with('success', 'Vendor updated successfully.');
    }

    public function destroy($id)
    {
        $vendor = Vendor::findOrFail($id);
        $vendor->delete();
        return redirect()->route('dashboard')->with('delete', 'Vendor deleted successfully');
    }
}
