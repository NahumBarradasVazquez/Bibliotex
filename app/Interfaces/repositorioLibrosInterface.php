<?php

namespace App\Interfaces;

interface repositorioLibrosInterface
{
    public function index();
    public function findAll($folios);
    public function store(array $data);
    public function update(array $data, $folios);
    public function delete($folios);
}