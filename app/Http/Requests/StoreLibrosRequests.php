<?php

namespace app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class StoreLibrosRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'autor' => '',
            'titulo' => '',
            'no_de_edicion' => '',
            'editorial' => '',
            'publicacion' => '',
            'isbn' => '',
            'folios' => '',
            'cd' => '',
            'etiquetas' => '',
            'clasificacion' => '',
            'ubicacion' => ''
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response() -> json([
            'success' => false,
            'message' => 'Validations errors',
            'data' => $validator -> errors()
        ]));
    }
}