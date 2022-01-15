<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdukStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama' => 'required',
			'berat' => 'required|unique:produk,berat',
			'harga' => 'required'
        ];
    }
    function messages(){
        return [
            'nama.required' => 'Field Nama Wajib Diisi.',
            'berat.required' => 'Field berat Wajib Diisi.',
            'harga.required' => 'Field harga Wajib Diisi.',
            'nama.unique' =>  'nama Sudah Terdaftar.'
        ];
    }
}
