<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PusatDaurUlangController extends Controller
{
    public function index()
    {
        return view('daurUlang');
    }
}
