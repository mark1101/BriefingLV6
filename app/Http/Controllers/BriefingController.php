<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BriefingController extends Controller
{
    public function indexGeral()
    {
        return view('Briefing.geral');
    }
}
