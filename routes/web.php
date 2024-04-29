<?php

use App\Livewire\SearchLibros;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Bibliotex', SearchLibros::class);
