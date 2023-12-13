<?php

namespace App\Http\Controllers;

use App\Models\CatatanKhusus;
use Illuminate\Http\Request;

class ControllerCatatanKhusus extends Controller
{
    public function show()
    {
        $arrayCatatanKhusus = CatatanKhusus::all();
        return view('pages.catatanKhusus', [
            'arrayCatatanKhusus' => $arrayCatatanKhusus
        ]);
    }
}
