<?php

namespace App\Http\Controllers;

use App\Models\Simpan;
use Illuminate\Http\Request;

class SimpanController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'posting_id' => 'required',
        ]);

        if (Simpan::where('user_id', $request->user_id)->where('posting_id', $request->posting_id)->exists()) {
            return redirect()->route('cari-lowongan')->with('error', 'Postingan sudah disimpan');
        }

        $simpan = new Simpan();
        $simpan->user_id = $request->user_id;
        $simpan->posting_id = $request->posting_id;
        $simpan->save();

        return redirect()->route('landing');
    }

    public function destroy($id)
    {
        // dd($id);
        Simpan::where('id', $id)->delete();
        return redirect()->route('cari-lowongan')->with('suceess', 'Berhasil dihapus');
    }
}
