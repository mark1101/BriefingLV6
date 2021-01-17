<?php

namespace App\Http\Controllers;

use App\Banuncio;
use App\Category;
use App\Client;
use App\Piece;
use Illuminate\Http\Request;

class BriefingController extends Controller
{
    public function indexContaAnuncio($name)
    {
        $cliente = Client::where('name', $name)->get();
        $data = $cliente[count($cliente) - 1];

        return view('Briefing.contaAnuncio', [
            'cliente' => $data
        ]);
    }

    public function createBanuncio(Request $request , $id)
    {
        $clientes = Client::where('id' , $id)->get();
        $dataa = $clientes[count($clientes) - 1];

        $categorias = Category::all();
        $peca = Piece::all();

        $data = $request->all();
        $data['id_client'] = $id;

        if(Banuncio::create($data)){
            return redirect()->route('indexClienteInfo' , ['name' => $dataa->name]);
        }

    }
}
