<?php

namespace App\Http\Controllers;

use App\Models\Jasa;
use Illuminate\Http\Request;

class JasaController extends Controller
{

    public function index()
    {
        return view('dashboard.jasa.index', [
            'jasa' => Jasa::all()
        ]);
    }

    public function create()
    {
        return view('dashboard.jasa.create');
    }

    public function edit($id)
    {
        return view('dashboard.jasa.edit', [
            'jasa' => Jasa::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'biaya_admin' => 'required',
        ]);

        Jasa::find($id)->update($request->all());

        return redirect()->route('jasa.index')->with('success', 'Jasa Berhasil Diupdate');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'biaya_admin' => 'required',
        ]);

        Jasa::create($request->all());

        return redirect()->route('jasa.index')->with('success', 'Jasa Berhasil Ditambahkan');
    }

    public function destroy($id)
    {
        Jasa::find($id)->delete();

        return redirect()->route('jasa.index')->with('success', 'Jasa Berhasil Dihapus');
    }
}
