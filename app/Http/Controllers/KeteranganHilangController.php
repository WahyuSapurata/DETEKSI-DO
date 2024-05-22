<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKeteranganHilangRequest;
use App\Http\Requests\UpdateKeteranganHilangRequest;
use App\Models\KeteranganHilang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KeteranganHilangController extends BaseController
{
    public function index()
    {
        $module = 'Surat Keterangan Hilang';
        return view('admin.suratkeluar.keteranganhilang', compact('module'));
    }

    public function get()
    {
        // Mengambil semua data pengguna
        $dataFull = KeteranganHilang::all();

        // Mengembalikan response berdasarkan data yang sudah disaring
        return $this->sendResponse($dataFull, 'Get data success');
    }

    public function store(Request $request)
    {
        $data = array();

        $fotoKtp = '';
        if ($request->file('foto_ktp')) {
            $extension = $request->file('foto_ktp')->extension();
            $fotoKtp = $request->nama . '-' . now()->timestamp . 'ktp' . '.' . $extension;
            $request->file('foto_ktp')->storeAs('public/ket_hilang', $fotoKtp);
        }

        try {
            $data = new KeteranganHilang();
            $data->nama = $request->nama;
            $data->nik = $request->nik;
            $data->tempat_lahir = $request->tempat_lahir;
            $data->tanggal_lahir = $request->tanggal_lahir;
            $data->jenis_kelamin = $request->jenis_kelamin;
            $data->status_perkawinan = $request->status_perkawinan;
            $data->pekerjaan = $request->pekerjaan;
            $data->agama = $request->agama;
            $data->kewarganegaraan = $request->kewarganegaraan;
            $data->alamat = $request->alamat;
            $data->nama_barang = $request->nama_barang;
            $data->tanggal_hilang = $request->tanggal_hilang;
            $data->tempat_hilang = $request->tempat_hilang;
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
            $data = KeteranganHilang::where('uuid', $params)->first();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), $e->getMessage(), 400);
        }
        return $this->sendResponse($data, 'Show data success');
    }

    public function update(Request $request, $params)
    {
        try {
            $data = KeteranganHilang::where('uuid', $params)->first();
            $data->nomor_surat = $request->nomor_surat;
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
            $data = KeteranganHilang::where('uuid', $params)->first();
            $data->delete();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), $e->getMessage(), 400);
        }
        return $this->sendResponse($data, 'Delete data success');
    }

    public function export($params)
    {
        // Contoh konten PDF
        $kethilang = KeteranganHilang::where('uuid', $params)->first();
        return view('pdf.kethilang', compact('kethilang'))->render();
    }
}
