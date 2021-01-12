<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class CreditosClienteController extends Controller
{
    public function indexCreditos()
    {
        return view('Cliente.creditos');
    }
}
