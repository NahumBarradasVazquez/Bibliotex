<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LibroResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
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
}
