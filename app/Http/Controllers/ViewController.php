<?php

namespace App\Http\Controllers;

use App\Models\Lamaran;
use App\Models\Posting;
use App\Models\Simpan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    public function landingPostinga(Request $request)
    {
        $query = Posting::where('is_paid', true)
            ->where('is_active', true);

        // Mengecek apakah ada pencarian yang dilakukan
        if ($request->has('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('judul_pekerjaan', 'like', '%' . $request->search . '%')
                    ->orWhere('lokasi_pekerjaan', 'like', '%' . $request->search . '%')
                    ->orWhere('jenis_pekerjaan', 'like', '%' . $request->search . '%');
            });
        }

        $postings = $query->get();
        $simpan = Simpan::all(); // Pastikan model Simpan telah di-import
        return view('landing.postingan.postingan_landing', compact('postings', 'simpan'));
    }

    public function detailPostinga($id)
    {
        $posting = Posting::find($id);


        if (!$posting) {
            abort(404, 'Posting not found');
        }

        return view('landing.postingan.detail_landing_posting', compact('posting'));
    }

    public function createLamaran($id)
    {
        $posting = Posting::find($id);
        return view('landing.postingan.form_lamaran', compact('posting'));
    }

    public function listLamaranLanding()
    {
        $listLamarans = Lamaran::where('is_paid', 0)->where('user_id', Auth::user()->id)->get();
        return view('landing.lamaran.list_lamaran', compact('listLamarans'));
    }

    public function bayarLamaran($id)
    {
        Lamaran::where('id', $id)->update([
            'is_paid' => 1
        ]);
        return redirect()->route('cari-lowongan')->with('success', 'Lamaran berhasil dibayar');
    }

    public function profileUser()
    {
        $user = Auth::user();
        return view('landing.profile.profile_landing', compact('user'));
    }

    public function edit($id)
    {
        $user = User::where('id', $id)->first();
        return view('landing.profile.profile_edit_landing', compact('user'));
    }

    public function simpanLamaran()
    {
        $simpanLamaran = Simpan::all();
        return view('landing.tersimpan.view', compact('simpanLamaran'));
    }
}
