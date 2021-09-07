<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfilRsRequest extends FormRequest
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
            'nama' => ['required', 'min:3'],
            'alamat' => ['required'],
            'logo' => ['required', 'min:3'],
            'lat' => ['required', 'min:3'],
            'long' => ['required', 'min:3'],
        ];
    }
    
    public function messages()
    {
        return [
            //
        ];
    }
}
