<?php

namespace App\Http\Controllers;

use App\Models\Disabilitas;
use Illuminate\Http\Request;

class ControllerDisabilitas extends Controller
{
    public function show()
    {
        $arrayDisabilitas = Disabilitas::all();
        return view('pages.disabilitas', [
            'arrayDisabilitas' => $arrayDisabilitas,
        ]);
    }
}
