<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get('/', 'Dashboard@index')->name('home.index');

    Route::get('/', 'Landing@landing')->name('landing');
    // Route::get('/landing-detail/{uuid}', 'Landing@detail')->name('landing-detail');

    // Route::post('/register', 'RegisterController@store')->name('register');
    Route::post('/add-ket-usaha', 'KeteranganUsahaController@store')->name('add-ket-usaha');
    Route::post('/add-ket-pindah', 'KeteranganPindahDomisiliController@store')->name('add-ket-pindah');
    Route::post('/add-ket-hewan', 'KeteranganPengantarHewanController@store')->name('add-ket-hewan');
    Route::post('/add-ket-jualbeli', 'KeteranganJualBeliController@store')->name('add-ket-jualbeli');
    Route::post('/add-ket-wali', 'KeteranganWaliController@store')->name('add-ket-wali');
    Route::post('/add-ket-kematian', 'KeteranganKematianController@store')->name('add-ket-kematian');
    Route::post('/add-ket-hilang', 'KeteranganHilangController@store')->name('add-ket-hilang');
    Route::post('/add-ket-tidak_mampu', 'KeteranganTidakMampuController@store')->name('add-ket-tidak_mampu');

    Route::group(['prefix' => 'login', 'middleware' => ['guest'], 'as' => 'login.'], function () {
        Route::get('/login-akun', 'Auth@show')->name('login-akun');
        Route::post('/login-proses', 'Auth@login_proses')->name('login-proses');
    });

    Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin.'], function () {
        Route::get('/dashboard-admin', 'Dashboard@dashboard_admin')->name('dashboard-admin');

        Route::get('/data-penduduk', 'DataPendudukController@index')->name('data-penduduk');
        Route::get('/get-data-penduduk', 'DataPendudukController@get')->name('get-data-penduduk');
        Route::get('/show-data-penduduk/{params}', 'DataPendudukController@show')->name('show-data-penduduk');
        Route::post('/add-data-penduduk', 'DataPendudukController@store')->name('add-data-penduduk');
        Route::post('/update-data-penduduk/{params}', 'DataPendudukController@update')->name('update-data-penduduk');
        Route::delete('/delete-data-penduduk/{params}', 'DataPendudukController@delete')->name('delete-data-penduduk');

        Route::get('/data-inventoris', 'InventorisController@index')->name('data-inventoris');
        Route::get('/get-data-inventoris', 'InventorisController@get')->name('get-data-inventoris');
        Route::get('/show-data-inventoris/{params}', 'InventorisController@show')->name('show-data-inventoris');
        Route::post('/add-data-inventoris', 'InventorisController@store')->name('add-data-inventoris');
        Route::post('/update-data-inventoris/{params}', 'InventorisController@update')->name('update-data-inventoris');
        Route::delete('/delete-data-inventoris/{params}', 'InventorisController@delete')->name('delete-data-inventoris');

        Route::get('/pengumuman', 'PengumumanController@index')->name('pengumuman');
        Route::get('/get-pengumuman', 'PengumumanController@get')->name('get-pengumuman');
        Route::get('/show-pengumuman/{params}', 'PengumumanController@show')->name('show-pengumuman');
        Route::post('/add-pengumuman', 'PengumumanController@store')->name('add-pengumuman');
        Route::post('/update-pengumuman/{params}', 'PengumumanController@update')->name('update-pengumuman');
        Route::delete('/delete-pengumuman/{params}', 'PengumumanController@delete')->name('delete-pengumuman');

        Route::get('/suratmasuk', 'SuratMasukController@index')->name('suratmasuk');
        Route::get('/get-suratmasuk', 'SuratMasukController@get')->name('get-suratmasuk');
        Route::get('/show-suratmasuk/{params}', 'SuratMasukController@show')->name('show-suratmasuk');
        Route::post('/add-suratmasuk', 'SuratMasukController@store')->name('add-suratmasuk');
        Route::post('/update-suratmasuk/{params}', 'SuratMasukController@update')->name('update-suratmasuk');
        Route::delete('/delete-suratmasuk/{params}', 'SuratMasukController@delete')->name('delete-suratmasuk');

        Route::prefix('surat-keluar')->group(function () {
            Route::get('/ket-usaha', 'KeteranganUsahaController@index')->name('ket-usaha');
            Route::get('/get-ket-usaha', 'KeteranganUsahaController@get')->name('get-ket-usaha');
            Route::get('/show-ket-usaha/{params}', 'KeteranganUsahaController@show')->name('show-ket-usaha');
            Route::post('/update-ket-usaha/{params}', 'KeteranganUsahaController@update')->name('update-ket-usaha');
            Route::delete('/delete-ket-usaha/{params}', 'KeteranganUsahaController@delete')->name('delete-ket-usaha');

            Route::get('/export-ket-usaha/{params}', 'KeteranganUsahaController@export')->name('export-ket-usaha');

            Route::get('/ket-pindah', 'KeteranganPindahDomisiliController@index')->name('ket-pindah');
            Route::get('/get-ket-pindah', 'KeteranganPindahDomisiliController@get')->name('get-ket-pindah');
            Route::get('/show-ket-pindah/{params}', 'KeteranganPindahDomisiliController@show')->name('show-ket-pindah');
            Route::post('/update-ket-pindah/{params}', 'KeteranganPindahDomisiliController@update')->name('update-ket-pindah');
            Route::delete('/delete-ket-pindah/{params}', 'KeteranganPindahDomisiliController@delete')->name('delete-ket-pindah');

            Route::get('/export-ket-pindah/{params}', 'KeteranganPindahDomisiliController@export')->name('export-ket-pindah');
            Route::get('/show-kk/{params}', 'KeteranganPindahDomisiliController@showKk')->name('show-kk');

            Route::get('/ket-hewan', 'KeteranganPengantarHewanController@index')->name('ket-hewan');
            Route::get('/get-ket-hewan', 'KeteranganPengantarHewanController@get')->name('get-ket-hewan');
            Route::get('/show-ket-hewan/{params}', 'KeteranganPengantarHewanController@show')->name('show-ket-hewan');
            Route::post('/update-ket-hewan/{params}', 'KeteranganPengantarHewanController@update')->name('update-ket-hewan');
            Route::delete('/delete-ket-hewan/{params}', 'KeteranganPengantarHewanController@delete')->name('delete-ket-hewan');

            Route::get('/export-ket-hewan/{params}', 'KeteranganPengantarHewanController@export')->name('export-ket-hewan');

            Route::get('/ket-jualbeli', 'KeteranganJualBeliController@index')->name('ket-jualbeli');
            Route::get('/get-ket-jualbeli', 'KeteranganJualBeliController@get')->name('get-ket-jualbeli');
            Route::get('/show-ket-jualbeli/{params}', 'KeteranganJualBeliController@show')->name('show-ket-jualbeli');
            Route::post('/update-ket-jualbeli/{params}', 'KeteranganJualBeliController@update')->name('update-ket-jualbeli');
            Route::delete('/delete-ket-jualbeli/{params}', 'KeteranganJualBeliController@delete')->name('delete-ket-jualbeli');

            Route::get('/export-ket-jualbeli/{params}', 'KeteranganJualBeliController@export')->name('export-ket-jualbeli');

            Route::get('/ket-wali', 'KeteranganWaliController@index')->name('ket-wali');
            Route::get('/get-ket-wali', 'KeteranganWaliController@get')->name('get-ket-wali');
            Route::get('/show-ket-wali/{params}', 'KeteranganWaliController@show')->name('show-ket-wali');
            Route::post('/update-ket-wali/{params}', 'KeteranganWaliController@update')->name('update-ket-wali');
            Route::delete('/delete-ket-wali/{params}', 'KeteranganWaliController@delete')->name('delete-ket-wali');

            Route::get('/export-ket-wali/{params}', 'KeteranganWaliController@export')->name('export-ket-wali');

            Route::get('/ket-kematian', 'KeteranganKematianController@index')->name('ket-kematian');
            Route::get('/get-ket-kematian', 'KeteranganKematianController@get')->name('get-ket-kematian');
            Route::get('/show-ket-kematian/{params}', 'KeteranganKematianController@show')->name('show-ket-kematian');
            Route::post('/update-ket-kematian/{params}', 'KeteranganKematianController@update')->name('update-ket-kematian');
            Route::delete('/delete-ket-kematian/{params}', 'KeteranganKematianController@delete')->name('delete-ket-kematian');

            Route::get('/export-ket-kematian/{params}', 'KeteranganKematianController@export')->name('export-ket-kematian');

            Route::get('/ket-hilang', 'KeteranganHilangController@index')->name('ket-hilang');
            Route::get('/get-ket-hilang', 'KeteranganHilangController@get')->name('get-ket-hilang');
            Route::get('/show-ket-hilang/{params}', 'KeteranganHilangController@show')->name('show-ket-hilang');
            Route::post('/update-ket-hilang/{params}', 'KeteranganHilangController@update')->name('update-ket-hilang');
            Route::delete('/delete-ket-hilang/{params}', 'KeteranganHilangController@delete')->name('delete-ket-hilang');

            Route::get('/export-ket-hilang/{params}', 'KeteranganHilangController@export')->name('export-ket-hilang');

            Route::get('/ket-tidak_mampu', 'KeteranganTidakMampuController@index')->name('ket-tidak_mampu');
            Route::get('/get-ket-tidak_mampu', 'KeteranganTidakMampuController@get')->name('get-ket-tidak_mampu');
            Route::get('/show-ket-tidak_mampu/{params}', 'KeteranganTidakMampuController@show')->name('show-ket-tidak_mampu');
            Route::post('/update-ket-tidak_mampu/{params}', 'KeteranganTidakMampuController@update')->name('update-ket-tidak_mampu');
            Route::delete('/delete-ket-tidak_mampu/{params}', 'KeteranganTidakMampuController@delete')->name('delete-ket-tidak_mampu');

            Route::get('/export-ket-tidak_mampu/{params}', 'KeteranganTidakMampuController@export')->name('export-ket-tidak_mampu');
        });

        Route::get('/ubahpassword', 'UbahPassword@index')->name('ubahpassword');
        Route::post('/update-password/{params}', 'UbahPassword@update')->name('update-password');
    });

    Route::get('/logout', 'Auth@logout')->name('logout');
});
