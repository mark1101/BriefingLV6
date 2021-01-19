<?php

namespace App\Http\Controllers;

use App\Bgeral;
use App\Client;
use Illuminate\Http\Request;

class VeBriefingController extends Controller
{
    public function indexGeral($name)
    {
        $c = Client::where('name' , $name)->get();
        $cliente = $c[count($c) - 1];

        $valor = Bgeral::where('client_id' , $cliente['id'])->get();
        $pass = $valor[count($valor) - 1];


        return view('Briefing.veGeral' , [
            'cliente' => $pass,
            'c' => $cliente
        ]);
    }
}
