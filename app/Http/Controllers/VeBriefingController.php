<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VeBriefingController extends Controller
{
    public function indexGeral()
    {
        return view('Briefing.veGeral');
    }
}
