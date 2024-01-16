<?php

namespace App\Http\Controllers;

use App\Models\fotografer;
use App\Models\Paket;
use App\Models\Pesanan;
use App\Models\User;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $dataPesanan = Pesanan::latest()->get();
        return view('admin.pesanan.index', [
            'pesanans' => $dataPesanan,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dataPaket = Paket::latest()->get();
        $dataUser = User::latest()->get();
        $dataFotografer = fotografer::latest()->get();
        return view('admin.pesanan.create', [
            'pakets' => $dataPaket,
            'users' => $dataUser,
            'fotografers' => $dataFotografer,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'user_id' => 'required',
            'paket_id' => 'required',
            'fotografer_id' => 'required',
            'tanggal_pemesanan' => 'required',
            'no_hp' => 'required',
            'lokasi' => 'required',
            'jam' => 'required',
        ]);

        Pesanan::create($validasi);

        return redirect('/admin/pesanan')->with('success', 'Data pesanan berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pesanan $pesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pesanan $pesanan)
    {   
        $dataPaket = Paket::latest()->get();
        $dataUser = User::latest()->get();
        $dataFotografer = fotografer::latest()->get();
        return view('admin.pesanan.edit', [
            'pesanan' => $pesanan,
            'pakets' => $dataPaket,
            'users' => $dataUser,
            'fotografers' => $dataFotografer,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pesanan $pesanan)
    {   
        $validasi = $request->validate([
            'user_id' => 'required',
            'paket_id' => 'required',
            'fotografer_id' => 'required',
            'tanggal_pemesanan' => 'required',
            'no_hp' => 'required',
            'lokasi' => 'required',
            'jam' => 'required',
            'status' => 'required',
        ]);

        $pesanan->update($validasi);

        return redirect('/admin/pesanan')->with('success', 'Data pesanan berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pesanan $pesanan)
    {
        $pesanan->delete();
        return redirect('/admin/pesanan')->with('success', 'Data pesanan berhasil dihapus');
    }
}
