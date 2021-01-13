<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BriefingController extends Controller
{
    public function indexAnuncio()
    {
        return view('Briefing.contaAnuncio');
    }
}
