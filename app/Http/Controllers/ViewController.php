<?php

namespace App\Http\Controllers;

use App\Models\Lamaran;
use App\Models\Order;
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
        $simpan = Simpan::all();
        return view('landing.postingan.postingan_landing', compact('postings', 'simpan'));
    }

    public function listWorkerPage(Request $request)
    {
        $workers = User::where('role', 'farmer')->where('is_available', true)->get();
        return view('landing.worker.index', compact('workers'));
    }

    public function listJasa(Request $request)
    {
        $jasa = [
            [
                'nama' => 'Sanitasi Lahan',
                'harga' => '187',
            ],
            [
                'nama' => 'Pembenihan',
                'harga' => '75',
            ],
            [
                'nama' => 'Penanaman',
                'harga' => '175',
            ],
            [
                'nama' => 'Pemupukan',
                'harga' => '362',
            ],
            [
                'nama' => 'Pemeliharaan',
                'harga' => '375',
            ],
            [
                'nama' => 'Panen',
                'harga' => '300',
            ],
        ];

        return view('landing.jasa.index', compact('jasa'));
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
        \Midtrans\Config::$serverKey = 'SB-Mid-server-cnrWNrti9y9tu7nzRg5KpheT';
        \Midtrans\Config::$isProduction = false;
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;
        $orders = Order::where('user_id', Auth::id())->get();
        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => 10000,
            )
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        return view('landing.pesanan.index', compact('orders', 'snapToken'));
    }

    public function bayarLamaran($id)
    {
        Lamaran::where('id', $id)->update([
            'is_paid' => 1
        ]);
        return redirect()->route('home')->with('success', 'Lamaran berhasil dibayar');
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
