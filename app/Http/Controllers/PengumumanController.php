<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePengumumanRequest;
use App\Http\Requests\UpdatePengumumanRequest;
use App\Models\Pengumuman;

class PengumumanController extends BaseController
{
    public function index()
    {
        $module = 'Pengumuman';
        return view('admin.pengumuman.index', compact('module'));
    }

    public function get()
    {
        // Mengambil semua data pengguna
        $dataFull = Pengumuman::all();

        // Mengembalikan response berdasarkan data yang sudah disaring
        return $this->sendResponse($dataFull, 'Get data success');
    }

    public function store(StorePengumumanRequest $storePengumumanRequest)
    {
        $data = array();
        try {
            $data = new Pengumuman();
            $data->judul = $storePengumumanRequest->judul;
            $data->isi = $storePengumumanRequest->isi;
            $data->tanggal_pelaksanaan = $storePengumumanRequest->tanggal_pelaksanaan;
            $data->sumber = $storePengumumanRequest->sumber;
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
            $data = Pengumuman::where('uuid', $params)->first();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), $e->getMessage(), 400);
        }
        return $this->sendResponse($data, 'Show data success');
    }

    public function update(StorePengumumanRequest $storePengumumanRequest, $params)
    {
        try {
            $data = Pengumuman::where('uuid', $params)->first();
            $data->judul = $storePengumumanRequest->judul;
            $data->isi = $storePengumumanRequest->isi;
            $data->tanggal_pelaksanaan = $storePengumumanRequest->tanggal_pelaksanaan;
            $data->sumber = $storePengumumanRequest->sumber;
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
            $data = Pengumuman::where('uuid', $params)->first();
            $data->delete();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), $e->getMessage(), 400);
        }
        return $this->sendResponse($data, 'Delete data success');
    }
}
