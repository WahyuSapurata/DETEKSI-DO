<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKeteranganPindahDomisiliRequest;
use App\Http\Requests\UpdateKeteranganPindahDomisiliRequest;
use App\Models\DataPenduduk;
use App\Models\KeteranganPindahDomisili;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KeteranganPindahDomisiliController extends BaseController
{
    public function index()
    {
        $module = 'Surat Keterangan Pindah Domisili';
        return view('admin.suratkeluar.keteranganpindah', compact('module'));
    }

    public function get()
    {
        // Mengambil semua data pengguna
        $dataFull = KeteranganPindahDomisili::all();

        // Mengembalikan response berdasarkan data yang sudah disaring
        return $this->sendResponse($dataFull, 'Get data success');
    }

    public function store(Request $request)
    {
        $data = array();

        $fotoKk = '';
        if ($request->file('foto_kk')) {
            $extension = $request->file('foto_kk')->extension();
            $fotoKk = $request->kepala_keluarga . '-' . now()->timestamp . 'kk' . '.' . $extension;
            $request->file('foto_kk')->storeAs('public/ket_pindah', $fotoKk);
        }

        try {
            $data = new KeteranganPindahDomisili();
            $data->no_kk = $request->no_kk;
            $data->kepala_keluarga = $request->kepala_keluarga;
            $data->alamat = $request->alamat;
            $data->pekerjaan = $request->pekerjaan;
            $data->alamat_pindah = $request->alamat_pindah;
            $data->klarifikasi_pindah = $request->klarifikasi_pindah;
            $data->rencana_pindah = $request->rencana_pindah;
            $data->keluarga_pindah = $request->keluarga_pindah;
            $data->no_telepon = $request->no_telepon;
            $data->deskripsi = $request->deskripsi;
            $data->status = "BELUM TERVERIFIKASI";
            $data->foto_kk = $fotoKk;
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
            $data = KeteranganPindahDomisili::where('uuid', $params)->first();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), $e->getMessage(), 400);
        }
        return $this->sendResponse($data, 'Show data success');
    }

    public function showKk($params)
    {
        $data = array();
        try {
            $data = DataPenduduk::where('no_kk', $params)->get();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), $e->getMessage(), 400);
        }
        return $this->sendResponse($data, 'Show data success');
    }

    public function update(Request $request, $params)
    {
        try {
            $data = KeteranganPindahDomisili::where('uuid', $params)->first();
            $data->nomor_surat = $request->nomor_surat;
            $data->data_pindah = $request->input('data_pindah', []);
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
            $data = KeteranganPindahDomisili::where('uuid', $params)->first();
            $data->delete();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), $e->getMessage(), 400);
        }
        return $this->sendResponse($data, 'Delete data success');
    }

    public function export($params)
    {
        $ketpindah = KeteranganPindahDomisili::where('uuid', $params)->first();
        $noKk = [];
        foreach ($ketpindah->data_pindah as $row) {
            $noKk[] = $row['nik']; // Akses properti 'nik' dari setiap elemen objek dalam array
        }
        $data_penduduk = DataPenduduk::whereIn('nik', $noKk)->get();
        $dataFull = $data_penduduk->map(function ($item) use ($ketpindah) {
            // Periksa apakah data_pindah adalah array
            if (is_array($ketpindah->data_pindah)) {
                foreach ($ketpindah->data_pindah as $dataKk) {
                    if ($dataKk['nik'] == $item->nik) {
                        $item->hubungan = $dataKk['hubungan'];
                        break;
                    }
                }
            }
            return $item;
        });
        return view('pdf.ketupindah', compact('ketpindah', 'dataFull'))->render();
    }
}
