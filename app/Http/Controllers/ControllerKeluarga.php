<?php

namespace App\Http\Controllers;

use App\Models\Keluarga;
use Illuminate\Http\Request;

class ControllerKeluarga extends Controller
{
    public function show()
    {
        $arrayKeluarga = Keluarga::all();
        return view('pages.keluarga', [
            'arrayKeluarga' => $arrayKeluarga,
        ]);
    }
}
