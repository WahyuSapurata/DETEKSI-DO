<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKeteranganTidakMampuRequest;
use App\Http\Requests\UpdateKeteranganTidakMampuRequest;
use App\Models\KeteranganTidakMampu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KeteranganTidakMampuController extends BaseController
{
    public function index()
    {
        $module = 'Surat Keterangan Usaha';
        return view('admin.suratkeluar.keterangantidakmampu', compact('module'));
    }

    public function get()
    {
        // Mengambil semua data pengguna
        $dataFull = KeteranganTidakMampu::all();

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
            $request->file('foto_ktp')->storeAs('public/ket_tidak_mampu', $fotoKtp);
        }

        try {
            $data = new KeteranganTidakMampu();
            $data->nama = $request->nama;
            $data->nik = $request->nik;
            $data->tempat_lahir = $request->tempat_lahir;
            $data->tanggal_lahir = $request->tanggal_lahir;
            $data->jenis_kelamin = $request->jenis_kelamin;
            $data->kewarganegaraan = $request->kewarganegaraan;
            $data->status_perkawinan = $request->status_perkawinan;
            $data->pekerjaan = $request->pekerjaan;
            $data->agama = $request->agama;
            $data->alamat = $request->alamat;
            $data->nama_ortu = $request->nama_ortu;
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
            $data = KeteranganTidakMampu::where('uuid', $params)->first();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), $e->getMessage(), 400);
        }
        return $this->sendResponse($data, 'Show data success');
    }

    public function update(Request $request, $params)
    {
        try {
            $data = KeteranganTidakMampu::where('uuid', $params)->first();
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
            $data = KeteranganTidakMampu::where('uuid', $params)->first();
            $data->delete();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), $e->getMessage(), 400);
        }
        return $this->sendResponse($data, 'Delete data success');
    }

    public function export($params)
    {
        // Contoh konten PDF
        $kettidakmampu = KeteranganTidakMampu::where('uuid', $params)->first();
        return view('pdf.kettidakmampu', compact('kettidakmampu'))->render();
    }
}
