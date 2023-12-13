<?php

namespace App\Http\Controllers;

use App\Models\Emigrasi;
use App\Models\Imigrasi;
use App\Models\Mobilitas;
use App\Models\Transmigrasi;
use Illuminate\Http\Request;

class ControllerMobilitas extends Controller
{
    public function showTransmigrasi()
    {
        $arrayMobilitas = Transmigrasi::all();
        return view('pages.mobilitas', [
            'type' => 'transmigrasi',
            'arrayMobilitas' => $arrayMobilitas,
        ]);
    }

    public function showImigrasi()
    {
        $arrayMobilitas = Imigrasi::all();
        return view('pages.mobilitas', [
            'type' => 'imigrasi',
            'arrayMobilitas' => $arrayMobilitas,
        ]);
    }

    public function showEmigrasi()
    {
        $arrayMobilitas = Emigrasi::all();
        return view('pages.mobilitas', [
            'type' => 'emigrasi',
            'arrayMobilitas' => $arrayMobilitas,
        ]);
    }
}
