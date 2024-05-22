<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDataPendudukRequest;
use App\Http\Requests\UpdateDataPendudukRequest;
use App\Models\DataPenduduk;

class DataPendudukController extends BaseController
{
    public function index()
    {
        $module = 'Data Penduduk';
        return view('admin.datapenduduk.index', compact('module'));
    }

    public function get()
    {
        // Mengambil semua data pengguna
        $dataFull = DataPenduduk::all();

        // Mengembalikan response berdasarkan data yang sudah disaring
        return $this->sendResponse($dataFull, 'Get data success');
    }

    public function store(StoreDataPendudukRequest $storeDataPendudukRequest)
    {
        $data = array();
        try {
            $data = new DataPenduduk();
            $data->nama_lengkap = $storeDataPendudukRequest->nama_lengkap;
            $data->nik = $storeDataPendudukRequest->nik;
            $data->jenis_kelamin = $storeDataPendudukRequest->jenis_kelamin;
            $data->tempat_lahir = $storeDataPendudukRequest->tempat_lahir;
            $data->tanggal_lahir = $storeDataPendudukRequest->tanggal_lahir;
            $data->agama = $storeDataPendudukRequest->agama;
            $data->pendidikan = $storeDataPendudukRequest->pendidikan;
            $data->jenis_pekerjaan = $storeDataPendudukRequest->jenis_pekerjaan;
            $data->no_kk = $storeDataPendudukRequest->no_kk;
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
            $data = DataPenduduk::where('uuid', $params)->first();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), $e->getMessage(), 400);
        }
        return $this->sendResponse($data, 'Show data success');
    }

    public function update(UpdateDataPendudukRequest $updateDataPendudukRequest, $params)
    {
        try {
            $data = DataPenduduk::where('uuid', $params)->first();
            $data->nama_lengkap = $updateDataPendudukRequest->nama_lengkap;
            $data->nik = $updateDataPendudukRequest->nik;
            $data->jenis_kelamin = $updateDataPendudukRequest->jenis_kelamin;
            $data->tempat_lahir = $updateDataPendudukRequest->tempat_lahir;
            $data->tanggal_lahir = $updateDataPendudukRequest->tanggal_lahir;
            $data->agama = $updateDataPendudukRequest->agama;
            $data->pendidikan = $updateDataPendudukRequest->pendidikan;
            $data->jenis_pekerjaan = $updateDataPendudukRequest->jenis_pekerjaan;
            $data->no_kk = $updateDataPendudukRequest->no_kk;
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
            $data = DataPenduduk::where('uuid', $params)->first();
            $data->delete();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), $e->getMessage(), 400);
        }
        return $this->sendResponse($data, 'Delete data success');
    }
}
