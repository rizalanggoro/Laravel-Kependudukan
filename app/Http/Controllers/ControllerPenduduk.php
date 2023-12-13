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
            'arrayPenduduk' => $arrayPenduduk,
        ]);
    }

    public function showSearch(Request $request)
    {
        $nama = $request->nama;
        $arrayPenduduk = Penduduk::where('nama', 'like', "%$nama%")->get();
        return view('pages.penduduk', [
            'arrayPenduduk' => $arrayPenduduk,
        ]);
    }

    public function delete($nik)
    {
        Penduduk::where('nik', '=', $nik)->delete();
        return redirect('/penduduk');
    }

    public function edit($nik)
    {
        $penduduk = Penduduk::where('nik', '=', $nik)->first();
        if ($penduduk == null) {
            abort(404);
        }

        return view('pages.ubahPenduduk', [
            'penduduk' => $penduduk,
        ]);
    }

    public function update(Request $request)
    {
        $penduduk = Penduduk::where('nik', '=', $request->nik)->first();
        if ($penduduk == null) {
            abort(404);
        }

        // $penduduk->update([
        //     'nama' => $request->nama,
        //     'pendidikan_terakhir' => $request->pendidikan_terakhir,
        //     'status_nikah' => $request->status_nikah,
        // ]);

        $penduduk->nama = $request->nama;
        $penduduk->pendidikan_terakhir = $request->pendidikan_terakhir;
        $penduduk->status_nikah = $request->status_nikah;
        $penduduk->save();

        return redirect('/penduduk');
    }
}
