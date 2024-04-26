<?php

namespace App\Http\Requests;

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
            'autor' => $this -> autor,
            'titulo' => $this -> titulo,
            'no_de_edicion' => $this -> no_de_edicion,
            'editorial' => $this -> editorial,
            'publicacion' => $this -> publicacion,
            'isbn' => $this -> isbn,
            'folios' => $this ->folios,
            'cd' => $this -> cd,
            'etiquetas' => $this -> etiquetas,
            'clasificacion' => $this -> clasificacion,
            'ubicacion' => $this -> ubicacion
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