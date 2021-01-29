<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function indexCategoria()
    {
        $cat = Category::all();

        return view('categorias' , [
            'cat' => $cat
        ]);
    }

    public function create(Request $request)
    {
        $cat = Category::all();
        $data = $request->all();

        Category::create($data);

        return redirect()->route('indexCategoria');

    }

    public function edit(Request $request , $id)
    {

    }

    public function delete(Request $request , $id)
    {

    }
}
