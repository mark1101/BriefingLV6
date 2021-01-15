<?php

namespace App\Http\Controllers;

use App\Category;
use App\User;
use Illuminate\Http\Request;

class CreditosClienteController extends Controller
{
    public function indexCreditos()
    {
        $categorias = Category::all();

        return view('Cliente.creditos' , [
            'categorias' => $categorias
        ]);
    }
}
