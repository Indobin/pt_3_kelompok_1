<?php

namespace App\Http\Controllers;

use App\Models\RecyleCenter;
use Illuminate\Http\Request;

class PusatDaurUlangController extends Controller
{
    public function index()
    {
        $recyclingCenters = RecyleCenter::latest()->paginate(10);
        return view('daurUlang',[
            'recyclingCenters' => $recyclingCenters,
        ]);
    }
    public function show(RecyleCenter $center)
    {
        // $center = RecyleCenter::findOrFail($id);

        return view('detaildaurUlang', compact('center'));
    }
}
