<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInventorisRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama_barang' => 'required',
            'kategori' => 'required',
            'kondisi' => 'required',
            'jumlah' => 'required',
            'tanggal_pembelian' => 'required',
            'lokasi' => 'required',
            'harga' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nama_barang.required' => 'Kolom nama barang harus di isi.',
            'kategori.required' => 'Kolom kategori harus di isi.',
            'kondisi.required' => 'Kolom kondisi harus di isi.',
            'jumlah.required' => 'Kolom jumlah harus di isi.',
            'tanggal_pembelian.required' => 'Kolom tanggal pembelian harus di isi.',
            'lokasi.required' => 'Kolom lokasi harus di isi.',
            'harga.required' => 'Kolom harga harus di isi.',
        ];
    }
}
