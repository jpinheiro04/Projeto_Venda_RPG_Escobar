<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('Loja_layout.index');
});

Route::get('/produtos', function () {
    return view('Produtos.index');
});
