<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSuratMasukRequest;
use App\Http\Requests\UpdateSuratMasukRequest;
use App\Models\SuratMasuk;
use Illuminate\Support\Facades\Storage;

class SuratMasukController extends BaseController
{
    public function index()
    {
        $module = 'Surat Masuk';
        return view('admin.suratmasuk.index', compact('module'));
    }

    public function get()
    {
        // Mengambil semua data pengguna
        $dataFull = SuratMasuk::all();

        // Mengembalikan response berdasarkan data yang sudah disaring
        return $this->sendResponse($dataFull, 'Get data success');
    }

    public function store(StoreSuratMasukRequest $storeSuratMasukRequest)
    {
        $data = array();
        $lampiran = '';
        if ($storeSuratMasukRequest->file('lampiran')) {
            $extension = $storeSuratMasukRequest->file('lampiran')->extension();
            $lampiran = $storeSuratMasukRequest->no_surat . '-' . now()->timestamp . 'lampiran' . '.' . $extension;
            $storeSuratMasukRequest->file('lampiran')->storeAs('public/lampiran', $lampiran);
        }
        try {
            $data = new SuratMasuk();
            $data->no_surat = $storeSuratMasukRequest->no_surat;
            $data->asal_surat = $storeSuratMasukRequest->asal_surat;
            $data->tanggal_surat = $storeSuratMasukRequest->tanggal_surat;
            $data->perihal = $storeSuratMasukRequest->perihal;
            $data->lampiran = $lampiran;
            $data->keterangan = $storeSuratMasukRequest->keterangan;
            $data->save();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), $e->getMessage(), 400);
        }
        return $this->sendResponse($data, 'Added data success');
    }

    public function show($params)
    {
        $data = array();
        try {
            $data = SuratMasuk::where('uuid', $params)->first();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), $e->getMessage(), 400);
        }
        return $this->sendResponse($data, 'Show data success');
    }

    public function update(StoreSuratMasukRequest $storeSuratMasukRequest, $params)
    {
        $data = SuratMasuk::where('uuid', $params)->first();
        $lampiran = '';
        if ($storeSuratMasukRequest->file('lampiran')) {
            $extension = $storeSuratMasukRequest->file('lampiran')->extension();
            $lampiran = $storeSuratMasukRequest->no_surat . '-' . now()->timestamp . 'lampiran' . '.' . $extension;
            $storeSuratMasukRequest->file('lampiran')->storeAs('public/lampiran', $lampiran);

            Storage::delete('public/lampiran/' . $data->lampiran);
        }
        try {
            $data->no_surat = $storeSuratMasukRequest->no_surat;
            $data->asal_surat = $storeSuratMasukRequest->asal_surat;
            $data->tanggal_surat = $storeSuratMasukRequest->tanggal_surat;
            $data->perihal = $storeSuratMasukRequest->perihal;
            $data->lampiran = $storeSuratMasukRequest->file('lampiran') ? $lampiran : $data->lampiran;
            $data->keterangan = $storeSuratMasukRequest->keterangan;
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
            $data = SuratMasuk::where('uuid', $params)->first();
            Storage::delete('public/lampiran/' . $data->lampiran);
            $data->delete();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), $e->getMessage(), 400);
        }
        return $this->sendResponse($data, 'Delete data success');
    }
}
