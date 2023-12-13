<?php

namespace App\Http\Controllers;

use App\Models\LaporanSensus;
use Illuminate\Http\Request;

class ControllerLaporanSensus extends Controller
{
    public function show()
    {
        $arrayLaporanSensus = LaporanSensus::all();
        return view('pages.laporanSensus', [
            'arrayLaporanSensus' => $arrayLaporanSensus,
        ]);
    }
}
