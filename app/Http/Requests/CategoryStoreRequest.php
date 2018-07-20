<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryStoreRequest extends FormRequest
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
            'name' => 'required|max:128',
            // 'slug' => 'required|unique:categories,slug',
            'type' => 'required',
            'body' => 'max:200',
            'icon' => 'required|max:100',
        ];
    }

    public function messages(){

        return [
            'name.required' => 'El campo nombre es obligatorio',
            'name.max'      => 'El campo nombre no debe contener más de :max caracteres.',
            // 'slug'          => 'El campo slug es obligatorio',
            'type.required' => 'El campo evento o servicio es obligatorio',
            'body.max'      => 'El campo descripción no debe contener más de :max caracteres.',
            'icon.required' => 'El campo icono es obligatorio',
            'icon.max'      => 'El campo icono no debe contener más de :max caracteres.',
        ];
    }
}
