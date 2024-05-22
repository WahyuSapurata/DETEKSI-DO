<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInventorisRequest;
use App\Http\Requests\UpdateInventorisRequest;
use App\Models\Inventoris;

class InventorisController extends BaseController
{
    public function index()
    {
        $module = 'Data Inventoris';
        return view('admin.inventoris.index', compact('module'));
    }

    public function get()
    {
        // Mengambil semua data pengguna
        $dataFull = Inventoris::all();

        // Mengembalikan response berdasarkan data yang sudah disaring
        return $this->sendResponse($dataFull, 'Get data success');
    }

    public function store(StoreInventorisRequest $storeInventorisRequest)
    {
        $numericValue = (int) str_replace(['Rp', ',', ' '], '', $storeInventorisRequest->harga);
        $data = array();
        try {
            $data = new Inventoris();
            $data->nama_barang = $storeInventorisRequest->nama_barang;
            $data->kategori = $storeInventorisRequest->kategori;
            $data->kondisi = $storeInventorisRequest->kondisi;
            $data->jumlah = $storeInventorisRequest->jumlah;
            $data->tanggal_pembelian = $storeInventorisRequest->tanggal_pembelian;
            $data->lokasi = $storeInventorisRequest->lokasi;
            $data->harga = $numericValue;
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
            $data = Inventoris::where('uuid', $params)->first();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), $e->getMessage(), 400);
        }
        return $this->sendResponse($data, 'Show data success');
    }

    public function update(StoreInventorisRequest $storeInventorisRequest, $params)
    {
        $numericValue = (int) str_replace(['Rp', ',', ' '], '', $storeInventorisRequest->harga);
        try {
            $data = Inventoris::where('uuid', $params)->first();
            $data->nama_barang = $storeInventorisRequest->nama_barang;
            $data->kategori = $storeInventorisRequest->kategori;
            $data->kondisi = $storeInventorisRequest->kondisi;
            $data->jumlah = $storeInventorisRequest->jumlah;
            $data->tanggal_pembelian = $storeInventorisRequest->tanggal_pembelian;
            $data->lokasi = $storeInventorisRequest->lokasi;
            $data->harga = $numericValue;
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
            $data = Inventoris::where('uuid', $params)->first();
            $data->delete();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), $e->getMessage(), 400);
        }
        return $this->sendResponse($data, 'Delete data success');
    }
}
