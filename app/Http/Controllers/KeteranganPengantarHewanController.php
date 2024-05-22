<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKeteranganPengantarHewanRequest;
use App\Http\Requests\UpdateKeteranganPengantarHewanRequest;
use App\Models\KeteranganPengantarHewan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KeteranganPengantarHewanController extends BaseController
{
    public function index()
    {
        $module = 'Surat Pengantar Hewan';
        return view('admin.suratkeluar.keteranganhewan', compact('module'));
    }

    public function get()
    {
        // Mengambil semua data pengguna
        $dataFull = KeteranganPengantarHewan::all();

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
            $request->file('foto_ktp')->storeAs('public/ket_hewan', $fotoKtp);
        }

        try {
            $data = new KeteranganPengantarHewan();
            $data->nama = $request->nama;
            $data->umur = $request->umur;
            $data->pekerjaan = $request->pekerjaan;
            $data->alamat = $request->alamat;
            $data->jumlah_hewan = $request->jumlah_hewan;
            $data->data_hewan = $request->input('data_hewan', []);
            $data->nama_pembeli = $request->nama_pembeli;
            $data->umur_pembeli = $request->umur_pembeli;
            $data->pekerjaan_pembeli = $request->pekerjaan_pembeli;
            $data->alamat_pembeli = $request->alamat_pembeli;
            $data->no_telepon = $request->no_telepon;
            $data->status = "BELUM TERVERIFIKASI";
            $data->foto_ktp = $fotoKtp;
            $data->save();
        } catch (\Exception $e) {
            return response()->json(['status' => 'warning', 'message' => 'Data gagal di kirim']);
        }
        return response()->json(['status' => 'success', 'message' => 'Data berhasil di kirim']);
    }

    public function show($params)
    {
        $data = array();
        try {
            $data = KeteranganPengantarHewan::where('uuid', $params)->first();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), $e->getMessage(), 400);
        }
        return $this->sendResponse($data, 'Show data success');
    }

    public function update(Request $request, $params)
    {
        try {
            $data = KeteranganPengantarHewan::where('uuid', $params)->first();
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
            $data = KeteranganPengantarHewan::where('uuid', $params)->first();
            $data->delete();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), $e->getMessage(), 400);
        }
        return $this->sendResponse($data, 'Delete data success');
    }

    public function export($params)
    {
        $kethewan = KeteranganPengantarHewan::where('uuid', $params)->first();
        $datahewan = json_decode($kethewan->data_hewan, true);
        return view('pdf.ketuhewan', compact('kethewan', 'datahewan'))->render();
    }
}
