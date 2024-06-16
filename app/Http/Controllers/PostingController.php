<?php

namespace App\Http\Controllers;

use App\Models\Posting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PostingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $postings = Posting::where('user_id', Auth::id())->get();
        return view('dashboard.posting.index', compact('postings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.posting.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $posting = $request->validate([
            'judul_pekerjaan' => 'required|string|max:255',
            'deskripsi_pekerjaan' => 'required|string',
            'lokasi_pekerjaan' => 'required|string|max:255',
            'gaji' => 'required|numeric',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'nullable|date|after_or_equal:tanggal_mulai',
            'persyaratan_dan_kualifikasi' => 'required|string',
            'jenis_pekerjaan' => 'required|in:kontrak,part time,full time',
            'cara_menghubungi' => 'required|string|max:255',
        ]);

        Posting::create($posting);
        return redirect()->route('posting.index')->with('success', 'Postingan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Posting $posting)
    {
        return view('dashboard.posting.show', compact('posting'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Posting $posting)
    {
        return view('dashboard.posting.edit', compact('posting'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Posting $posting)
    {
        $posting->update($request->validate([
            'judul_pekerjaan' => 'required|string|max:255',
            'deskripsi_pekerjaan' => 'required|string',
            'lokasi_pekerjaan' => 'required|string|max:255',
            'gaji' => 'required|numeric',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'nullable|date|after_or_equal:tanggal_mulai',
            'persyaratan_dan_kualifikasi' => 'required|string',
            'jenis_pekerjaan' => 'required|in:kontrak,part time,full time',
            'cara_menghubungi' => 'required|string|max:255',
        ]));

        return redirect()->route('posting.index')->with('success', 'Postingan berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Posting $posting)
    {
        $posting->delete();
        return redirect()->route('posting.index')->with('success', 'Postingan berhasil dihapus');
    }
}
