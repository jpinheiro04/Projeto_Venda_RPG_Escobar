<?php

namespace App\Http\Controllers;
use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index()
    {
        //mesma coisa que SELECT * FROM categoria
        $Produtos = Produtos::all();

       return view('Produtos.index', compact('categorias'));
    }
}

