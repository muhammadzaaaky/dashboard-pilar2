<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataFeedController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\vendor\VendorController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\LongTripTrukController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\LongTripPindahanController;
use App\Http\Controllers\ShortTripTrukController;
use App\Http\Controllers\ShortTripPindahanController;
use App\Http\Controllers\OrderSewaTrukLongController;
use App\Http\Controllers\OrderSewaTrukShortController;
use App\Http\Controllers\OrderPindahanLongController;
use App\Http\Controllers\OrderPindahanShortController;
use App\Models\LongTripTruk;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/', 'login');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    // Route for the getting the data feed
    Route::get('/json-data-feed', [DataFeedController::class, 'getDataFeed'])->name('json_data_feed');
    Route::fallback(function () {
        return view('pages/utility/404');
    });

    // vendor
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/create-vendor', [DashboardController::class, 'create']);
    Route::get('/edit-vendor/{id}', [DashboardController::class, 'edit']);
    Route::post('/update/{id}', [DashboardController::class, 'update']);
    Route::delete('/delete/{id}', [DashboardController::class, 'destroy']);
    Route::get('/import-vendor', [ImportController::class, 'showImportForm'])->name('import-vendor');
    Route::post('/import-vendor', [ImportController::class, 'importData'])->name('import-vendor');
    Route::get('/download-vendor', [ExportController::class, 'exportData'])->name('export.data');
    Route::post('/1dashboard', [DashboardController::class, 'store']);
    Route::post('/list-member-vendor', [VendorController::class, 'store']);

    //get wilayah indonesia
    Route::post('/kabupaten', [LongTripTrukController::class, 'kabupaten'])->name('kabupaten');
    Route::post('/kecamatan', [LongTripTrukController::class, 'kecamatan'])->name('kecamatan');
    Route::post('/kelurahan', [ShortTripTrukController::class, 'kelurahan'])->name('kelurahan');

    // long sewa truk
    Route::get('/listharga-longtriptruk', [LongTripTrukController::class, 'index'])->name('listharga-longtriptruk');
    Route::get('/create-harga', [LongTripTrukController::class, 'create'])->name('harga.create');
    Route::get('/listharga-longtriptruk/search', [LongTripTrukController::class, 'search'])->name('longtriptruk.search');
    Route::get('/delete-longsewatruk/{id}', [LongTripTrukController::class, 'destroy']);
    Route::get('/edit-longsewatruk/{id}', [LongTripTrukController::class, 'edit']);
    Route::post('/update-longsewatruk/{id}', [LongTripTrukController::class, 'update'])->name('update-longsewatruk');
    Route::get('/import-longtripsewa', [ImportController::class, 'showImportForm'])->name('import-longtripsewa');
    Route::post('/import-longtripsewa', [ImportController::class, 'importDataLongsewa'])->name('import-longtripsewa');
    Route::get('/download-longsewa', [ExportController::class, 'exportDataLongsewa'])->name('export.data');
    Route::post('/data', [LongTripTrukController::class, 'store'])->name('data.store');
    Route::get('/search', [LongTripTrukController::class, 'index']);
    Route::get('/search/result', [LongTripTrukController::class, 'search']);
    Route::get('/search/live', [LongTripTrukController::class, 'searchLive']);


    // LongTrip pindahan
    Route::get('/listharga-pindahanlongtrip', [LongTripPindahanController::class, 'index'])->name('listharga-pindahanlongtrip');
    Route::get('/create-harga-pindahanlongtrip', [LongTripPindahanController::class, 'create'])->name('create-harga-pindahanlongtrip');
    Route::get('/delete-pindahanlongtrip/{id}', [LongTripPindahanController::class, 'destroy']);
    Route::get('/edit-pindahanlongtrip/{id}', [LongTripPindahanController::class, 'edit']);
    Route::post('/update-pindahanlongtrip/{id}', [LongTripPindahanController::class, 'update'])->name('update-pindahanlongtrip');
    Route::post('/import-pindahanlongtrip', [ImportController::class, 'importDataPindahanLongTrip'])->name('import-longtripsewa');
    Route::get('/download-pindahanlongtrip', [ExportController::class, 'exportDataPindahanLongTrip'])->name('export.data');
    Route::post('/data-pindahanlongtrip', [LongTripPindahanController::class, 'store'])->name('datapindahan.store');

    // short sewa truk
    Route::get('/listharga-shorttriptruk', [ShortTripTrukController::class, 'index'])->name('listharga-shorttriptruk');
    Route::get('/create-harga-shorttruk', [ShortTripTrukController::class, 'create'])->name('harga.create');
    Route::get('/delete-shortsewatruk/{id}', [ShortTripTrukController::class, 'destroy']);
    Route::get('/edit-shorttriptruk/{id}', [ShortTripTrukController::class, 'edit']);
    Route::post('/update-shorttriptruk/{id}', [ShortTripTrukController::class, 'update'])->name('update-shorttriptruk');
    Route::post('/import-shorttripsewa', [ImportController::class, 'importDataShortsewa'])->name('import-shorttripsewa');
    Route::get('/download-shortsewa', [ExportController::class, 'exportDataShortsewa'])->name('export.data');
    Route::post('/data-shortsewa', [ShortTripTrukController::class, 'store'])->name('data.store');

    // shortTrip pindahan
    Route::get('/listharga-pindahanshorttrip', [ShortTripPindahanController::class, 'index'])->name('listharga-pindahanshorttrip');
    Route::get('/create-harga-pindahanshorttrip', [ShortTripPindahanController::class, 'create'])->name('create-harga-pindahanshorttrip');
    Route::get('/delete-pindahanshort/{id}', [ShortTripPindahanController::class, 'destroy']);
    Route::post('/import-pindahanshorttrip', [ImportController::class, 'importDataPindahanShortTrip'])->name('import-shorttripsewa');
    Route::get('/download-pindahanshorttrip', [ExportController::class, 'exportDataPindahanShortTrip'])->name('export.data');
    Route::post('/data-pindahanshorttrip', [ShortTripPindahanController::class, 'store'])->name('datapindahan.store');

    //order sewa truk longtrip
    Route::get('/ordersewa-longtriptruk', [OrderSewaTrukLongController::class, 'index'])->name('ordersewa-longtriptruk');

    //order sewa truk shorttrip
    Route::get('/ordersewa-shorttriptruk', [OrderSewaTrukShortController::class, 'index'])->name('ordersewa-shorttriptruk');

    //order pindahan longtrip
    Route::get('/order-pindahanlong', [OrderPindahanLongController::class, 'index'])->name('order-pindahanlong');

    //order pindahan shorttrip
    Route::get('/order-pindahanshort', [OrderPindahanShortController::class, 'index'])->name('order-pindahanshort');
});
