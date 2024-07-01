<?php

namespace App\Http\Controllers;

use App\Models\Lamaran;
use App\Models\Posting;
use App\Models\User;
use App\Notifications\LamaranDiterima;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LamaranController extends Controller
{
    public function index()
    {
        $postings = Posting::where('is_paid', true)->where('is_active', true)->get();
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
        $posting = Posting::find($id);
        return view('landing.create', compact('posting'));
    }

    // app/Http/Controllers/LamaranController.php

    public function store(Request $request)
    {
        $request->validate([
            'posting_id' => 'required|exists:postings,id',
            'user_id' => 'required|exists:users,id',
            'nama_lengkap' => 'required|string|max:255',
            'nomor_telepon' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'pesan_lamaran' => 'required|string|max:1000',
        ]);

        $lamaran = Lamaran::create([
            'posting_id' => $request->posting_id,
            'user_id' => $request->user_id,
            'nama_lengkap' => $request->nama_lengkap,
            'nomor_telepon' => $request->nomor_telepon,
            'email' => $request->email,
            'pesan_lamaran' => $request->pesan_lamaran,
        ]);

        // Dapatkan perekrut dari postingan pekerjaan
        $posting = Posting::find($request->posting_id);
        if ($posting) {
            $farmer = User::find($posting->user_id);
            if ($farmer) {
                // Kirim notifikasi ke perekrut
                $farmer->notify(new LamaranDiterima($lamaran));
            } else {
                return redirect()->route('dashboard')->with('error', 'Perekrut tidak ditemukan.');
            }
        } else {
            return redirect()->route('dashboard')->with('error', 'Postingan tidak ditemukan.');
        }
        return redirect()->route('list-pesanan-landing')->with('success', 'Silahkan lanjutkan pembayaran');
    }

    public function indexPelamar($id)
    {
        $lamarans = Lamaran::where('is_paid', true)->where('posting_id', $id)->get();
        return view('daftar-pelamar.view', compact('lamarans'));
    }

    public function listLamaran()
    {
        $listLamarans = Lamaran::all();
        return view('list-lamaran.view', compact('listLamarans'));
    }
}
