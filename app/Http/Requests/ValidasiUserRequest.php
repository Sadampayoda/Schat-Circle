<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidasiUserRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $data = [];
        if($this->routeIs('login')){
            $data = [
                'username' => 'required',
                'password' => 'required',
            ];

        } elseif($this->routeIs('newAccount')){
            // var_dump('oke');die;
            $data = [
                'username' => 'required|max:50|unique:users,username|min:5',
                'password' => 'required|min:5',
                'konfirmasi' => 'required|same:password'
            ];
        } 
        return $data;
    }

    public function messages()
    {
        return [
            'username' => [
                'required' => 'Harap untuk mengisi input name',
                'max' => 'Maksimal Username yaitu 50 huruf',
                'unique' => 'Username sudah tersedia',
                'min' => 'Minimal username yaitu 5 huruf'
            ],
            'password' => [
                'required' => 'Harap untuk mengisi input password',
                'min' => 'Minimal password yaitu 5 huruf'
            ],
            'konfirmasi' => [
                'required' => 'Harap untuk mengisi input konfirmasi',
                'same' => 'password dan konfimasi anda tidak cocok' 
            ]
        ];
    }
}
