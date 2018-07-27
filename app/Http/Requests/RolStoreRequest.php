<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RolStoreRequest extends FormRequest
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
            'name' => 'required|unique:roles,name,$id',
            // 'slug' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'El campo nombre es obligatorio.',
            'slug.required' => 'El campo slug es obligatorio.',
            'name.unique' => "El rol $this->name ya está en uso."
        ];
    }
    // public function messages()
    // {
    //     return [
    //         'name.required' => 'El campo nombre es obligatorio',
    //         'name.max'      => 'El campo nombre no debe contener más de :max caracteres.',
    //     ];
    // }
}
