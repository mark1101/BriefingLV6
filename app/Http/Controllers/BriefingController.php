<?php

namespace App\Http\Controllers;

use App\Banuncio;
use App\Bgeral;
use App\Category;
use App\Client;
use App\Piece;
use App\State;
use Barryvdh\DomPDF\Facade as PDF;
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

        $data = $request->all();
        $data['id_client'] = $id;

        if(Banuncio::create($data)){
            return redirect()->route('indexClienteInfo' , ['name' => $dataa->name]);
        }

    }

    public function indexGeral($name)
    {
        $estados = State::all();

        $cliente = Client::where('name' , $name)->get();
        $data = $cliente[count($cliente) - 1];

        return view('Briefing.geral', [
            'cliente' => $data,
            'estado' => $estados
        ]);
    }

    public function createBgeral(Request $request, $id)
    {
        $clientes = Client::where('id', $id)->get();
        $dataa = $clientes[count($clientes) - 1];


        $data = $request->all();

        $data['client_id'] = $id;

        if (Bgeral::create($data)){
            return redirect()->route('indexClienteInfo' , ['name' => $dataa->name]);
        }
    }

    public function createPDFGeral($cl)
    {

        $cliente = Bgeral::where('client_id' , $cl)->get();
        $data = $cliente[count($cliente) - 1];

        $pdf = PDF::loadView('Pdf.bGeral' , compact('data'));
        return $pdf->setPaper('a4')->stream('Briefing_geral.pdf');
    }
}
