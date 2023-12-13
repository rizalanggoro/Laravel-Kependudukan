<?php

namespace App\Http\Controllers;

use App\Models\Wilayah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerWilayah extends Controller
{
    public function show()
    {
        $arrayWilayah = Wilayah::all();

        return view('pages.wilayah', [
            'arrayWilayah' => $arrayWilayah,
        ]);
    }
}
