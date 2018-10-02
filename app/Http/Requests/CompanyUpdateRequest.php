<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyUpdateRequest extends FormRequest
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
        $rules = [
            'name' => 'required|max:120', 
            'description' => 'required', 
            'address' => 'required|max:120', 
            'phone' => 'required|max:50', 
            'email' => 'required|max:120', 
            'twitter' => '', 
            'facebook' => '', 
            'gmail' => '', 
            'instagram' => '', 
            'url' => '',
            'urlintranet' => '',
        ];

        if ($this->get('file')) {
            $rules = array_merge($rules, ['file' => 'mimes:jpg,jpeg,png']);
        }
        return $rules;
    }

    public function messages(){

        return [
            'name.required' => 'El campo nombre es obligatorio',
            'name.max'      => 'El campo nombre no debe contener más de :max caracteres.',
            // 'logo.required' => 'El campo logo es obligatorio',
            // 'logo.max'      => 'El campo logo no debe contener más de :max caracteres.',
            'description.required' => 'El campo descripción es obligatorio',
            // 'description.max'      => 'El campo description no debe contener más de :max caracteres.',
            'address.required' => 'El campo dirección es obligatorio',
            'address.max'      => 'El campo dirección no debe contener más de :max caracteres.',
            'phone.required' => 'El campo teléfono es obligatorio',
            'phone.max'      => 'El campo teléfono no debe contener más de :max caracteres.',
            'email.required' => 'El campo correo eléctronico es obligatorio',
            'email.max'      => 'El campo correo electrónico no debe contener más de :max caracteres.',
        ];
    }
}
