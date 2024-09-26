<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class RecyleRequest extends FormRequest
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
            'gambar' => [$this->method() === 'POST' ? 'required' : '', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'lokasi' => ['required', 'string', 'min:3', 'max:255'],
            'name' => ['required', 'string', 'min:3', 'max:255'],
            'kontak_info' => ['required', 'string', 'min:10', 'max:13'],
            'deskripsi' => ['required', 'string', 'min:3'],
        ];
    }
}
