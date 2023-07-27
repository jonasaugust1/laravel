<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function getIndex(){
        // $produtos = ["nome"=>"livro"];

        // return view('produto.index', $produtos);

        $produtos = ["nome"=>"dvd"];
        $livros = ["nome"=>"Harry Potter"];
        return view('produto.index', compact('produtos', 'livros'));
    }
}
