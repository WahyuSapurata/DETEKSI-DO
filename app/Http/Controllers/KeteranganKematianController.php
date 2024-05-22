<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKeteranganKematianRequest;
use App\Http\Requests\UpdateKeteranganKematianRequest;
use App\Models\KeteranganKematian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KeteranganKematianController extends BaseController
{
    public function index()
    {
        $module = 'Surat Keterangan Kematian';
        return view('admin.suratkeluar.keterangankematian', compact('module'));
    }

    public function get()
    {
        // Mengambil semua data pengguna
        $dataFull = KeteranganKematian::all();

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
            $request->file('foto_ktp')->storeAs('public/ket_kematian', $fotoKtp);
        }

        try {
            $data = new KeteranganKematian();
            $data->nama = $request->nama;
            $data->tempat_lahir = $request->tempat_lahir;
            $data->tanggal_lahir = $request->tanggal_lahir;
            $data->jenis_kelamin = $request->jenis_kelamin;
            $data->status_perkawinan = $request->status_perkawinan;
            $data->kewarganegaran = $request->kewarganegaran;
            $data->agama = $request->agama;
            $data->pekerjaan = $request->pekerjaan;
            $data->alamat = $request->alamat;
            $data->hari_meninggal = $request->hari_meninggal;
            $data->tanggal_meninggal = $request->tanggal_meninggal;
            $data->jam_meninggal = $request->jam_meninggal;
            $data->tempat_pemakaman = $request->tempat_pemakaman;
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
            $data = KeteranganKematian::where('uuid', $params)->first();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), $e->getMessage(), 400);
        }
        return $this->sendResponse($data, 'Show data success');
    }

    public function update(Request $request, $params)
    {
        try {
            $data = KeteranganKematian::where('uuid', $params)->first();
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
            $data = KeteranganKematian::where('uuid', $params)->first();
            $data->delete();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), $e->getMessage(), 400);
        }
        return $this->sendResponse($data, 'Delete data success');
    }

    public function export($params)
    {
        // Contoh konten PDF
        $ketkematian = KeteranganKematian::where('uuid', $params)->first();
        return view('pdf.ketkematian', compact('ketkematian'))->render();
    }
}
