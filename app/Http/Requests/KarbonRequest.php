<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KarbonRequest extends FormRequest
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
    public function rules()
    {
        return [
            'wastes.*.type' => 'required|string|exists:karbons,jenis',
            'wastes.*.weight' => 'required|numeric|min:0.1',
            'wastes.*.disposal' => 'required|string|in:landfill,recycled,composted'
        ];
    }

    public function messages()
    {
        return [
            'wastes.*.type.required' => 'Jenis sampah harus dipilih.',
            'wastes.*.weight.required' => 'Berat sampah harus diisi.',
            'wastes.*.disposal.required' => 'Metode pengelolaan harus dipilih.',
        ];
    }
}
