<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class DokterRequest extends FormRequest
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
        $user = $this->request->get('user');
        return [
            'id' => ['required', Rule::unique('users')->ignore($user,'id')],
            'name' => ['required'],
            'email' => ['required', Rule::unique('users')->ignore($user,'id')],
            'phone_number' => ['required', Rule::unique('users')->ignore($user,'id')],
            'alamat' => ['required', 'min:3'],
            'tempat' => ['required', 'min:3'],
            'ttl' => ['required', 'min:3'],
            'pend' => ['required'],
            'spesialis' => ['required'],
        ];
    }
    
    public function messages()
    {
        return [
            //
        ];
    }
}
