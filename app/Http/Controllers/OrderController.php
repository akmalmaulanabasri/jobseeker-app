<?php

namespace App\Http\Controllers;

use App\Models\Jasa;
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
        $orders = Order::where('worker_id', Auth::id())->get();
        foreach ($orders as $order) {
            $order->gaji = $order->jasa->harga * $order->luas_lahan;
            $order->total = $order->gaji - ($order->gaji * $order->jasa->biaya_admin / 100);
        }

        return view('dashboard.order.index', [
            'orders' => $orders,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $worker = User::find($id);
        $jasa = Jasa::all();
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
            'jasa_id' => $request->jasa,
            'keterangan' => $request->keterangan,
            'tanggal' => $request->tanggal,
            'jam' => $request->jam,
            'status' => 'dipesan',
        ]);

        return redirect()->route('landing')->with('success', 'Order berhasil dibuat, silahkan melakukan pembayaran di halaman pesanan anda.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        return view('dashboard.order.show', compact('order'));
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
