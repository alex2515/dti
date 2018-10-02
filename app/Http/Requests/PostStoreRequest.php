<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostStoreRequest extends FormRequest
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
            'name'        => 'required|max:120',
            // 'slug'        => 'required|unique:posts,slug',
            'excerpt'     => 'required|max:200',
            // 'tags'        => 'required|array',
            'tags'        => 'array',
            'body'        => 'required',
            'status'      => 'required|in:DRAFT,PUBLISHED',
            'date'        => 'max:120',
            'time'        => 'max:120',
            'place'       => 'max:120',
        ];

        if ($this->get('file')) {
            $rules = array_merge($rules, ['file' => 'mimes:jpg,jpeg,png']);
        }
        return $rules;
    }

    public function messages()
    {
        return [
            'name.required'     => 'El campo nombre es obligatorio',
            'name.max'          => 'El campo nombre no debe contener más de :max caracteres.',
            'body.required'     => 'El campo nombre es obligatorio',
            // 'name.max'       => 'El campo nombre no debe contener más de :max caracteres.',
            'excerpt.required'  => 'El campo descripción es obligatorio',
            'excerpt.max'       => 'El campo descripción no debe contener más de :max caracteres.',
            'date.required'     => 'El campo fecha es obligatorio',
            'date.max'          => 'El campo fecha no debe contener más de :max caracteres.',
            'time.required'     => 'El campo hora es obligatorio',
            'time.max'          => 'El campo hora no debe contener más de :max caracteres.',
            'place.required'    => 'El campo lugar es obligatorio',
            'place.max'         => 'El campo lugar no debe contener más de :max caracteres.',
            'category_id.required'       => 'Debes de tener registrado almenos una categoria del tipo Evento',
        ];
    }
}
