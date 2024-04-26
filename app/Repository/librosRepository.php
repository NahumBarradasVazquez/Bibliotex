<?php

namespace App\Repository;
use App\models\libros;
use App\Interfaces\repositorioLibrosInterface;

class librosRepository implements repositorioLibrosInterface
{
    public function index(){
        return libros::all();
    }

    public function findAll($folios){
        return libros::where("folios", "=", $folios)->findOrFail($folios);
    }

    public function store(array $data){
        return libros::create($data);
    }

    public function update(array $data, $folios){
        return libros::whereId($folios)->update($data);
    }

    public function delete($folios){
        libros::destroy($folios);
    }
}