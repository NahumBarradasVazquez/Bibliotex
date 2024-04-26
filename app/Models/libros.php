<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class libros extends Model
{
    protected $table = 'libros';
    public $timestamps = false;
    protected $primaryKey = 'id_libro';

    protected $fillable = [
        'autor',
        'titulo',
        'no_de_edicion',
        'editorial',
        'publicacion',
        'isbn',
        'folios',
        'cd',
        'etiquetas',
        'clasificacion',
        'ubicacion'
    ];
}
