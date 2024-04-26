<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\libros;
use App\Http\Requests\StoreLibrosRequests;
use App\Http\Requests\UpdateLibrosRequest;
use App\Interfaces\repositorioLibrosInterface;
use App\Classes\ApiResponseClass;
use App\Http\Resources\LibroResource;
use Illuminate\Support\Facades\DB;

class libroController extends Controller
{
    private repositorioLibrosInterface $repositorioLibrosInterface;

    public function __construct(repositorioLibrosInterface $repositorioLibrosInterface)
    {
        $this -> repositorioLibrosInterface = $repositorioLibrosInterface;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this -> repositorioLibrosInterface -> index();
        return ApiResponseClass::sendResponse(LibroResource::collection($data), '', 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLibrosRequests $request)
    {
        $libros = [
            'autor' => $request -> autor,
            'titulo' => $request -> titulo,
            'no_de_edicion' => $request -> no_de_edicion,
            'editorial' => $request -> editorial,
            'publicacion' => $request -> publicacion,
            'isbn' => $request -> isbn,
            'folios' => $request -> folios,
            'cd' =>  $request -> cd,
            'etiquetas' => $request -> etiquetas,
            'clasificacion' => $request -> clasificacion,
            'ubicacion' => $request -> ubicacion,
        ];
        DB::beginTransaction();
        try{
            $libronuevo = $this -> repositorioLibrosInterface -> store($libros);

            DB::commit();
            return ApiResponseClass::sendResponse(new LibroResource($libronuevo), 'Libro añadido correctamente', 201);
        }catch(\Exception $ex){
            return ApiResponseClass::rollback($ex);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($folios)
    {
        $libronuevo = $this -> repositorioLibrosInterface -> findAll($folios);
        return ApiResponseClass::sendResponse(new LibroResource($libronuevo), '', 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLibrosRequest $request, $folios)
    {
        $updatelibro = [
            'autor' => $request -> autor,
            'titulo' => $request -> titulo,
            'no_de_edicion' => $request -> no_de_edicion,
            'editorial' => $request -> editorial,
            'publicacion' => $request -> publicacion,
            'isbn' => $request -> isbn,
            'folios' => $request -> folios,
            'cd' =>  $request -> cd,
            'etiquetas' => $request -> etiquetas,
            'clasificacion' => $request -> clasificacion,
            'ubicacion' => $request -> ubicacion,
        ];
        DB::beginTransaction();
        try{
            $libro = $this -> repositorioLibrosInterface -> update($updatelibro, $folios);
            DB::commit();
            return ApiResponseClass::sendResponse('Libro modificado correctamente', '', 201);
        }catch(\Exception $ex){
            return ApiResponseClass::rollback($ex);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $folios)
    {
        $this -> repositorioLibrosInterface -> delete($folios);
        return ApiResponseClass::sendResponse('Libro eliminado correctamente', '', 204);
    }
}
