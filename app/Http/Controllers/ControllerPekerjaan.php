<?php

namespace App\Http\Controllers;

use App\Models\AparatSipilNegara;
use App\Models\Swasta;
use Illuminate\Http\Request;

class ControllerPekerjaan extends Controller
{
    public function showAsn()
    {
        $arrayPekerjaan = AparatSipilNegara::all();
        return view('pages.pekerjaan', [
            'type' => 'asn',
            'arrayPekerjaan' => $arrayPekerjaan,
        ]);
    }

    public function showSwasta()
    {
        $arrayPekerjaan = Swasta::all();
        return view('pages.pekerjaan', [
            'type' => 'swasta',
            'arrayPekerjaan' => $arrayPekerjaan,
        ]);
    }
}
