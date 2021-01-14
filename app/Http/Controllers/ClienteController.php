<?php

namespace App\Http\Controllers;

use App\Category;
use App\Piece;
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
}
