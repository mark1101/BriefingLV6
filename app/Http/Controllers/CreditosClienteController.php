<?php

namespace App\Http\Controllers;

use App\Category;
use App\Client;
use App\CreditHistory;
use App\User;
use Illuminate\Http\Request;

class CreditosClienteController extends Controller
{
    public function indexCreditos($name)
    {
        $categorias = Category::all();
        $valor = Client::where('name' , $name)->get();

        $data = $valor[count($valor) - 1];
        $historico = CreditHistory::where('client_id' , $data['id'])->get();

        $janeiro = CreditHistory::where('client_id' , $data['id'])
            ->whereMonth('created_at', '01')
            ->get();
        $j = count($janeiro);
        $fevereiro = CreditHistory::where('client_id' , $data['id'])
            ->whereMonth('created_at', '02')
            ->get();
        $f = count($fevereiro);
        $marco = CreditHistory::where('client_id' , $data['id'])
            ->whereMonth('created_at', '03')
            ->get();
        $m = count($marco);
        $abril = CreditHistory::where('client_id' , $data['id'])
            ->whereMonth('created_at', '04')
            ->get();
        $a = count($abril);
        $maio = CreditHistory::where('client_id' , $data['id'])
            ->whereMonth('created_at', '05')
            ->get();
        $ma = count($maio);
        $junho = CreditHistory::where('client_id' , $data['id'])
            ->whereMonth('created_at', '06')
            ->get();
        $junh = count($junho);
        $julho = CreditHistory::where('client_id' , $data['id'])
            ->whereMonth('created_at', '07')
            ->get();
        $ju = count($julho);
        $agosto = CreditHistory::where('client_id' , $data['id'])
            ->whereMonth('created_at', '08')
            ->get();
        $agos = count($agosto);
        $setembro = CreditHistory::where('client_id' , $data['id'])
            ->whereMonth('created_at', '09')
            ->get();
        $sete = count($setembro);
        $outubro  = CreditHistory::where('client_id' , $data['id'])
            ->whereMonth('created_at', '10')
            ->get();
        $outu = count($outubro);
        $novembro = CreditHistory::where('client_id' , $data['id'])
            ->whereMonth('created_at', '11')
            ->get();
        $n = count($novembro);
        $dezembro = CreditHistory::where('client_id' , $data['id'])
            ->whereMonth('created_at', '12')
            ->get();
        $d = count($dezembro);

        return view('Cliente.creditos' , [
            'categorias' => $categorias,
            'historico' => $historico,
            'cliente' => $data,
            'janeiro' => $j,
            'fevereiro' => $f,
            'marco' => $m,
            'abril' => $a,
            'maio' => $ma,
            'junho' => $junh,
            'julho' => $ju,
            'agosto' => $agos,
            'setembro' => $sete,
            'outubro' => $outu,
            'novembro' => $n,
            'dezembro'=> $d

        ]);
    }
}
