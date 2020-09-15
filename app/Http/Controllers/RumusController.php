<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RumusController extends Controller
{
    public function index()
    {
        return view('rumus.tabung');
    }

    public function volumeBola()
    {
        return view('rumus.bola');
    }

    public function volumeKerucut()
    {
        return view('rumus.kerucut');
    }
}
