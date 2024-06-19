<?php

namespace App\Http\Controllers;

use App\Models\Simpan;
use Illuminate\Http\Request;

class SimpanController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'user_id' => 'required',
            'posting_id' => 'required',
        ]);

        $simpan = new Simpan();
        $simpan->user_id = $request->user_id;
        $simpan->posting_id = $request->posting_id;
        $simpan->save();

        return redirect()->route('cari-lowongan');
    }

    public function destroy($id)
    {
        Simpan::where('id', $id)->delete();
        return redirect()->route('/')->with('suceess', 'Berhasil dihapus');
    }
}
