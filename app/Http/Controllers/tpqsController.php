<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tpqsController extends Controller
{
    public function show(Tpq $tpq)
    {
        return view('tpq', [
            "active" => 'kegiatan',
            "tpq" => $tpq
        ]);
    }
}
