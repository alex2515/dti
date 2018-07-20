<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PortfolioStoreRequest extends FormRequest
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
        return  [
            'user_id'     => 'required|integer',
            'post_id'     => 'required|integer',
            // 'film'        => 'required|max:200',
            'body'        => 'required',

        ];
    }

    public function messages()
    {
        return [
            'film.required' => 'El campo URL video es obligatorio',
            'film.max'      => 'El campo URL video no debe contener más de :max caracteres.',
            'body.required' => 'El campo descripción es obligatorio',
            'body.max'      => 'El campo descripción no debe contener más de :max caracteres.',

        ];
    }
}
