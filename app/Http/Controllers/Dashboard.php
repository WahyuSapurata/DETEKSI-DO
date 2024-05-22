<?php

namespace App\Http\Controllers;

use App\Models\DataPenduduk;
use App\Models\KeteranganHilang;
use App\Models\KeteranganJualBeli;
use App\Models\KeteranganKematian;
use App\Models\KeteranganPengantarHewan;
use App\Models\KeteranganPindahDomisili;
use App\Models\KeteranganTidakMampu;
use App\Models\KeteranganUsaha;
use App\Models\KeteranganWali;
use App\Models\SuratMasuk;
use Illuminate\Http\Request;

class Dashboard extends BaseController
{
    public function index()
    {
        if (auth()->check()) {
            return redirect()->back();
        }
        return redirect()->route('login.login-akun');
    }

    public function dashboard_admin()
    {
        $module = 'Dashboard';

        $ket_usaha = KeteranganUsaha::where('status', 'BELUM TERVERIFIKASI')->count();
        $ket_pindah = KeteranganPindahDomisili::where('status', 'BELUM TERVERIFIKASI')->count();
        $ket_hewan = KeteranganPengantarHewan::where('status', 'BELUM TERVERIFIKASI')->count();
        $ket_jualbeli = KeteranganJualBeli::where('status', 'BELUM TERVERIFIKASI')->count();
        $ket_wali = KeteranganWali::where('status', 'BELUM TERVERIFIKASI')->count();
        $ket_kematian = KeteranganKematian::where('status', 'BELUM TERVERIFIKASI')->count();
        $ket_hilang = KeteranganHilang::where('status', 'BELUM TERVERIFIKASI')->count();
        $ket_tidak_mampu = KeteranganTidakMampu::where('status', 'BELUM TERVERIFIKASI')->count();

        $usaha = KeteranganUsaha::count();
        $pindah = KeteranganPindahDomisili::count();
        $hewan = KeteranganPengantarHewan::count();
        $jualbeli = KeteranganJualBeli::count();
        $wali = KeteranganWali::count();
        $kematian = KeteranganKematian::count();
        $hilang = KeteranganHilang::count();
        $tidak_mampu = KeteranganTidakMampu::count();

        $totalpenduduk = DataPenduduk::count();
        $totalsuratmasuk = SuratMasuk::count();
        $totalsuratkeluar = $usaha + $pindah + $hewan + $jualbeli + $wali + $kematian + $hilang + $tidak_mampu;
        return view('dashboard.admin', compact('module', 'ket_usaha', 'ket_pindah', 'ket_hewan', 'ket_jualbeli', 'ket_wali', 'ket_kematian', 'ket_hilang', 'ket_tidak_mampu', 'totalpenduduk', 'totalsuratmasuk', 'totalsuratkeluar'));
    }
}
