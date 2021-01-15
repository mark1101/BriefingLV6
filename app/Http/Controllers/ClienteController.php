<?php

namespace App\Http\Controllers;

use App\Category;
use App\City;
use App\Client;
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
        $clientes = Client::all();

        return view('Cliente.show' , [
            'clientes' => $clientes
        ]);
    }

    public function indexInfo($name)
    {
        $categorias = Category::all();
        $cliente = Client::where('name' , $name)->get();
        $peca = Piece::all();

        $data = $cliente[count($cliente) - 1];

        return view('Cliente.info', [
            'categorias' => $categorias,
            'pecas' => $peca,
            'cliente' => $data
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
        $data = $request->all();
        $servico =  $request->input('check');
        $data['service'] = $servico;
        $data['points_hired'] = $data['points'];

        if (Client::create($data)){
            return redirect()->route('indexClienteShow');
        }else{
            dd('erro');
        }
    }

    public function mostraAtivos(Request $request){
        $filters = $request->get('filterValues');

        if ($filters == "ativos"){
            $clientes = Client::where('active' , 1)->get();
            return view('Cliente.show' , [
               'clientes' => $clientes
            ]);
        }
        else if ($filters == "naoativo"){
            $clientes = Client::where('active' , 2)->get();
            return view('Cliente.show' , [
                'clientes' => $clientes
            ]);
        }else{
                $clientes = Client::all();
                return view('Cliente.show' , [
                    'clientes' => $clientes
                ]);
        }
    }
}
