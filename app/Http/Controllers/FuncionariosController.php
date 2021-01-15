<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class FuncionariosController extends Controller
{
    public function index()
    {
        $users = User::where('funcionario' , '<>' , 'Chefia')->get();

        return view('funcionarios' , [
            'funcionarios' => $users
        ]);
    }
}
