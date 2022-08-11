<?php

namespace App\Http\Controllers;

use \App\Models\Tpq;


use Illuminate\Http\Request;

class tpqcontroller extends Controller
{
    public function index()
    {
        return view('tpqs', [
            "tpqs" => Tpq::latest()->filter(request(['search', 'tpq']))->paginate(12)->withQueryString()

            // "tpq" => Tpq::latest()->filter(request(['search', 'category']))->paginate(12)->withQueryString()
        ]);
    }

    public function show(Tpq $tpq)
    {
        return view('tpq', [
            "active" => 'kegiatan',
            "tpq" => $tpq
        ]);
    }
}
