<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKeteranganUsahaRequest;
use App\Http\Requests\UpdateKeteranganUsahaRequest;
use App\Models\KeteranganUsaha;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KeteranganUsahaController extends BaseController
{
    public function index()
    {
        $module = 'Surat Keterangan Usaha';
        return view('admin.suratkeluar.keteranganusaha', compact('module'));
    }

    public function get()
    {
        // Mengambil semua data pengguna
        $dataFull = KeteranganUsaha::all();

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
            $request->file('foto_ktp')->storeAs('public/ket_usaha', $fotoKtp);
        }

        try {
            $data = new KeteranganUsaha();
            $data->nama = $request->nama;
            $data->nik = $request->nik;
            $data->tempat_lahir = $request->tempat_lahir;
            $data->tanggal_lahir = $request->tanggal_lahir;
            $data->jenis_kelamin = $request->jenis_kelamin;
            $data->status_perkawinan = $request->status_perkawinan;
            $data->kewarganegaraan = $request->kewarganegaraan;
            $data->agama = $request->agama;
            $data->pekerjaan = $request->pekerjaan;
            $data->alamat = $request->alamat;
            $data->deskripsi = $request->deskripsi;
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
            $data = KeteranganUsaha::where('uuid', $params)->first();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), $e->getMessage(), 400);
        }
        return $this->sendResponse($data, 'Show data success');
    }

    public function update(Request $request, $params)
    {
        try {
            $data = KeteranganUsaha::where('uuid', $params)->first();
            $data->nomor_surat = $request->nomor_surat;
            $data->deskripsi = $request->deskripsi;
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
            $data = KeteranganUsaha::where('uuid', $params)->first();
            $data->delete();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), $e->getMessage(), 400);
        }
        return $this->sendResponse($data, 'Delete data success');
    }

    public function export($params)
    {
        // Contoh konten PDF
        $ketusaha = KeteranganUsaha::where('uuid', $params)->first();
        return view('pdf.ketusaha', compact('ketusaha'))->render();
    }
}
