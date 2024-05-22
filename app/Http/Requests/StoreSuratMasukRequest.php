<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSuratMasukRequest extends FormRequest
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
            'no_surat' => 'required',
            'asal_surat' => 'required',
            'tanggal_surat' => 'required',
            'perihal' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'no_surat.required' => 'Kolom nomor surat harus di isi.',
            'asal_surat.required' => 'Kolom asal surat harus di isi.',
            'tanggal_surat.required' => 'Kolom tanggal surat harus di isi.',
            'perihal.required' => 'Kolom perihal harus di isi.',
        ];
    }
}
