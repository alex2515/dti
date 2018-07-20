<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceUpdateRequest extends FormRequest
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

            'user_id'     => 'required|integer',
            'category_id' => 'required|integer',
            'name'        => 'required',
            'excerpt'        => 'required',
            'slug'        => 'unique:services,slug,' . $this->service,
            'filepdf'        => 'required',
            // 'status'      => 'required|in:DRAFT,PUBLISHED'
        ];

        if ($this->get('file')) {
            $rules = array_merge($rules, ['file' => 'mimes:jpg,jpeg,png']);
        }
        return $rules;
    }

    public function messages()
    {
        return [
            'name.required' => 'El campo nombre es obligatorio',
            'name.max'      => 'El campo nombre no debe contener más de :max caracteres.',
        ];
    }
}
