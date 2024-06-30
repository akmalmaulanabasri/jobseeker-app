<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $worker = User::find($id);
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
        return view('landing.worker.order.index', compact('worker', 'jasa', 'id'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {

        if ($request->hasFile('foto_lahan')) {
            $request->file('foto_lahan')->move('foto_lahan/', $request->file('foto_lahan')->getClientOriginalName());
            $request->foto_lahan = $request->file('foto_lahan')->getClientOriginalName();
        }

        Order::create([
            'user_id' => Auth::id(),
            'worker_id' => $id,
            'luas_lahan' => $request->luas,
            'alamat' => $request->alamat,
            'foto_lahan' => $request->foto_lahan,
            'jasa' => $request->jasa,
            'keterangan' => $request->keterangan,
            'tanggal' => $request->tanggal,
            'jam' => $request->jam,
            'status' => 'dipesan',
        ]);

        return redirect()->route('landing')->with('success', 'Order berhasil dibuat');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
