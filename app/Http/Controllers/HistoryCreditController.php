<?php

namespace App\Http\Controllers;

use App\Client;
use App\CreditHistory;
use App\Piece;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoryCreditController extends Controller
{
    public function subPontos(Request $request , $id)
    {
        $data = $request->all();

        $piece = Piece::where('id' , $data['piece_id'])->get();
        $client = Client::where('id' , $id)->get();

        $dataP = $piece[count($piece) - 1];
        $dataC = $client[count($client) - 1];

        $clientP = $dataC['points'];
        $pieceP = $dataP['value'];

        $total = $clientP - $pieceP;

        if ($total > 0.0){
            Client::where('id' , $id)->update(['points' => $total]);

            $data['funcionario_id'] = Auth::user()->id;
            $data['client_id'] = $id;
            $data['value'] = $dataP['value'];

            CreditHistory::create($data);

            return redirect()->route('indexCreditos' , ['name' => $dataC['name']]);

        }


    }
}
