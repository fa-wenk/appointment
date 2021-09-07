<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BeritaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'judul' => ['required', 'min:3'],
            'kategori' => ['required'],
            'konten' => ['required', 'min:3'],
            'foto' => ['required', 'min:3'],
        ];
    }
    
    public function messages()
    {
        return [
            //
        ];
    }
}
