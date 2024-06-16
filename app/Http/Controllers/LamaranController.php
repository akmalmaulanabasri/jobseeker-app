<?php

namespace App\Http\Controllers;

use App\Models\Lamaran;
use App\Models\Posting;
use Illuminate\Http\Request;

class LamaranController extends Controller
{
    public function index()
    {
        $postings = Posting::all();
        return view('landing.view', compact('postings'));
    }

    public function showPekerjaan($id)
    {
        $posting = Posting::find($id);

        if (!$posting) {
            abort(404, 'Posting not found');
        }

        return view('landing.show', compact('posting'));
    }

    public function createPekerjaan($id)
    {
        return view('landing.create');
    }

    public function create(Request $request)
    {
        dd($request->all());
        $lamaran = $request->validate([
            'posting_id' => 'required',
            'user_id' => 'required',
            'nama_lengkap' => 'required',
            'nomor_telepon' => 'required',
            'email' => 'required',
            'pesan_lamaran' => 'required',
        ]);

        dd($lamaran);

        Lamaran::create([
            'posting_id' => $lamaran['posting_id'],
            'user_id' => $lamaran['user_id'],
            'nama_lengkap' => $lamaran['nama_lengkap'],
            'nomor_telepon' => $lamaran['nomor_telepon'],
            'email' => $lamaran['email'],
            'pesan_lamaran' => $lamaran['pesan_lamaran'],

        ]);
        return redirect()->route('/dashboard')->with('success', 'Lamaran berhasil dikirim');
    }
}
