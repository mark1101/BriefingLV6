<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function indexDash(){
        return view('Cliente.dashboard');
    }

    public function indexCadastro()
    {
        return view('Cliente.cadastro');
    }

    public function indexShow()
    {
        return view('Cliente.show');
    }

    public function indexInfo()
    {
        return view('Cliente.info');
    }
}
