<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDataPendudukRequest extends FormRequest
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
            'nama_lengkap' => 'required',
            'nik' => 'required|unique:data_penduduks,nik',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'agama' => 'required',
            'pendidikan' => 'required',
            'jenis_pekerjaan' => 'required',
            'no_kk' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nama_lengkap.required' => 'Kolom nama lengkap harus di isi.',
            'nik.required' => 'Kolom nik harus di isi.',
            'nik.unique' => 'Nik sudah digunakan.',
            'jenis_kelamin.required' => 'Kolom jenis kelamin harus di isi.',
            'tempat_lahir.required' => 'Kolom tempat lahir harus di isi.',
            'tanggal_lahir.required' => 'Kolom tanggal lahir harus di isi.',
            'agama.required' => 'Kolom agama harus di isi.',
            'pendidikan.required' => 'Kolom pendidikan harus di isi.',
            'jenis_pekerjaan.required' => 'Kolom jenis pekerjaan harus di isi.',
            'no_kk.required' => 'Kolom no kk harus di isi.',
        ];
    }
}
