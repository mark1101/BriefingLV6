<?php

namespace App\Http\Controllers;

use App\Category;
use App\Piece;
use Illuminate\Http\Request;

class PontosController extends Controller
{
    public function indexPontos()
    {
        $pecas = Piece::all();
        $categorias = Category::all();
        $erro = "";

        return view('pontos' , [
            'pecas' => $pecas,
            'erro' => $erro,
            'categorias' => $categorias
        ]);
    }

    public function buscaPontos(Request $request)
    {
        $categorias = Category::all();
        $filters = $request->get('filterValues');
        $todas = explode(',',  $filters);
        $a = [];

        $erros = "";

        if ($filters == 'jornal'){
            $piece = Piece::where('id_category' , '1')->get();
            return view('pontos' , ['pecas' => $piece , 'erro' => $erros , 'categorias' => $categorias]);
        }else if ($filters == 'revista'){
            $piece = Piece::where('id_category' , '2')->get();
            return view('pontos' , ['pecas' => $piece , 'erro' => $erros, 'categorias' => $categorias]);
        }
        else if ($filters == 'midia'){
            $piece = Piece::where('id_category' , '3')->get();
            return view('pontos' , ['pecas' => $piece, 'erro' => $erros, 'categorias' => $categorias]);
        }
        else if ($filters == 'prod'){
            $piece = Piece::where('id_category' , '4')->get();
            return view('pontos' , ['pecas' => $piece, 'erro' => $erros, 'categorias' => $categorias]);
        }
        else if ($filters == 'materias'){
            $piece = Piece::where('id_category' , '5')->get();
            return view('pontos' , ['pecas' => $piece, 'erro' => $erros, 'categorias' => $categorias]);
        }
        else if ($filters == 'papelaria'){
            $piece = Piece::where('id_category' , '6')->get();
            return view('pontos' , ['pecas' => $piece, 'erro' => $erros, 'categorias' => $categorias]);
        }
        else if ($filters == 'projetos'){
            $piece = Piece::where('id_category' , '7')->get();
            return view('pontos' , ['pecas' => $piece, 'erro' => $erros, 'categorias' => $categorias]);
        }
        else if ($filters == 'trabalhos'){
            $piece = Piece::where('id_category' , '8')->get();
            return view('pontos' , ['pecas' => $piece, 'erro' => $erros, 'categorias' => $categorias]);
        }
        else if ($filters == 'programacao'){
            $piece = Piece::where('id_category' , '9')->get();
            return view('pontos' , ['pecas' => $piece, 'erro' => $erros, 'categorias' => $categorias]);
        }
        else if ($filters == 'fachada'){
            $piece = Piece::where('id_category' , '10')->get();
            return view('pontos' , ['pecas' => $piece, 'erro' => $erros, 'categorias' => $categorias]);
        }
        else if ($filters == 'embalagens'){
            $piece = Piece::where('id_category' , '11')->get();
            return view('pontos' , ['pecas' => $piece, 'erro' => $erros, 'categorias' => $categorias]);
        }
        else if ($filters == 'servicos'){
            $piece = Piece::where('id_category' , '12')->get();
            return view('pontos' , ['pecas' => $piece, 'erro' => $erros, 'categorias' => $categorias]);
        }
        else if ($filters == 'marketing'){
            $piece = Piece::where('id_category' , '13')->get();
            return view('pontos' , ['pecas' => $piece, 'erro' => $erros, 'categorias' => $categorias]);
        }else if ($filters == "") {
            $piece = Piece::all();
            return view('pontos' , ['pecas' => $piece, 'erro' => $erros, 'categorias' => $categorias]);
        }else {
            $erros = "Erro";

        }

    }

    public function create(Request $request)
    {
        $data = $request->all();

        if (Piece::create($data)){
            return redirect()->route('indexPontos');
        }else{
            return redirect()->route('indexPontos');
        }
    }

    public function edit(Request $request , $id)
    {

    }

    public function delete(Request $request , $id)
    {

    }
}
