<?php

namespace App\Http\Controllers;

use App\Category;
use App\City;
use App\Piece;
use App\State;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function indexDash(){
        return view('Cliente.dashboard');
    }

    public function indexCadastro()
    {
        $estados = State::all();

        return view('Cliente.cadastro',  [
            'estados' => $estados
        ]);
    }
    public function puxaCidade($id){
        $cidades = City::where('id_state', $id)->get();

        $response['success'] = true;
        $response['data'] = $cidades;

        echo json_encode($response);

    }

    public function indexShow()
    {
        return view('Cliente.show');
    }

    public function indexInfo()
    {
        $categorias = Category::all();
        $peca = Piece::all();

        return view('Cliente.info', [
            'categorias' => $categorias,
            'pecas' => $peca
        ]);
    }

    public function modelPeca($id){
        $users = Piece::where('id_category', $id)->get();

        $response['success'] = true;
        $response['data'] = $users;

        echo json_encode($response);
    }

    public function modelValorPeca($id)
    {
        $users = Piece::where('id', $id)->get();

        $response['success'] = true;
        $response['data'] = $users;

        echo json_encode($response);
    }

    public function create(Request $request)
    {

    }
}
