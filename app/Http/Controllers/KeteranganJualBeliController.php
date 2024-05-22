<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKeteranganJualBeliRequest;
use App\Http\Requests\UpdateKeteranganJualBeliRequest;
use App\Models\KeteranganJualBeli;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KeteranganJualBeliController extends BaseController
{
    public function index()
    {
        $module = 'Surat Jual Beli';
        return view('admin.suratkeluar.keteranganjualbeli', compact('module'));
    }

    public function get()
    {
        // Mengambil semua data pengguna
        $dataFull = KeteranganJualBeli::all();

        // Mengembalikan response berdasarkan data yang sudah disaring
        return $this->sendResponse($dataFull, 'Get data success');
    }

    public function store(Request $request)
    {
        $data = array();

        $numericValue = (int) str_replace(['Rp', ',', ' '], '', $request->harga_tanah);
        $fotoKtp = '';
        if ($request->file('foto_ktp')) {
            $extension = $request->file('foto_ktp')->extension();
            $fotoKtp = $request->nama_penjual . '-' . now()->timestamp . 'ktp' . '.' . $extension;
            $request->file('foto_ktp')->storeAs('public/ket_jualbeli', $fotoKtp);
        }

        try {
            $data = new KeteranganJualBeli();
            $data->nama_penjual = $request->nama_penjual;
            $data->nik_penjual = $request->nik_penjual;
            $data->tempat_lahir_penjual = $request->tempat_lahir_penjual;
            $data->tanggal_lahir_penjual = $request->tanggal_lahir_penjual;
            $data->pekerjaan_penjual = $request->pekerjaan_penjual;
            $data->alamat_penjual = $request->alamat_penjual;
            $data->nama_pembeli = $request->nama_pembeli;
            $data->nik_pembeli = $request->nik_pembeli;
            $data->tempat_lahir_pembeli = $request->tempat_lahir_pembeli;
            $data->tanggal_lahir_pembeli = $request->tanggal_lahir_pembeli;
            $data->pekerjaan_pembeli = $request->pekerjaan_pembeli;
            $data->alamat_pembeli = $request->alamat_pembeli;
            $data->no_sppt = $request->no_sppt;
            $data->nama_pemilik_tanah = $request->nama_pemilik_tanah;
            $data->no_sertifikat = $request->no_sertifikat;
            $data->luas_tanah = $request->luas_tanah;
            $data->harga_tanah = $numericValue;
            $data->lokasi_tanah = $request->lokasi_tanah;
            $data->batas_utara = $request->batas_utara;
            $data->batas_timur = $request->batas_timur;
            $data->batas_selatan = $request->batas_selatan;
            $data->batas_barat = $request->batas_barat;
            $data->saksi1 = $request->saksi1;
            $data->saksi2 = $request->saksi2;
            $data->saksi3 = $request->saksi3;
            $data->no_telepon = $request->no_telepon;
            $data->status = "BELUM TERVERIFIKASI";
            $data->foto_ktp = $fotoKtp;
            $data->save();
        } catch (\Exception $e) {
            Session::flash('status', 'warning');
            Session::flash('message', 'Data gagal dikirim!');
        }
        Session::flash('status', 'success');
        Session::flash('message', 'Data berhasil dikirim!');
        return redirect()->route('landing');
    }

    public function show($params)
    {
        $data = array();
        try {
            $data = KeteranganJualBeli::where('uuid', $params)->first();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), $e->getMessage(), 400);
        }
        return $this->sendResponse($data, 'Show data success');
    }

    public function update(Request $request, $params)
    {
        try {
            $data = KeteranganJualBeli::where('uuid', $params)->first();
            $data->nomor_surat = $request->nomor_surat;
            $data->no_reg = $request->no_reg;
            $data->status = $request->status;
            $data->save();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), $e->getMessage(), 400);
        }

        return $this->sendResponse($data, 'Update data success');
    }

    public function delete($params)
    {
        $data = array();
        try {
            $data = KeteranganJualBeli::where('uuid', $params)->first();
            $data->delete();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), $e->getMessage(), 400);
        }
        return $this->sendResponse($data, 'Delete data success');
    }

    public function export($params)
    {
        $ketjualbeli = KeteranganJualBeli::where('uuid', $params)->first();
        return view('pdf.ketjualbeli', compact('ketjualbeli'))->render();
    }
}
