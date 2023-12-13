<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerPenduduk extends Controller
{
    public function show()
    {
        $arrayPenduduk = Penduduk::all();

        return view('pages.penduduk', [
            'old' => '',
            'arrayPenduduk' => $arrayPenduduk,
        ]);
    }

    public function showSearch(Request $request)
    {
        $name = $request->name;
        $arrayPenduduk = Penduduk::where('nama', 'like', '%' . $name . '%')->get();
        return view('pages.penduduk', [
            'old' => $request->old('name'),
            'arrayPenduduk' => $arrayPenduduk,
        ]);
    }
}
