<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;
use App\Models\Fotografer;
use App\Models\Paket;




class UserController extends Controller
{
    public function usertambahpesanan()
    {
        return view('user.tambahpesanan');

    }
    public function postTambahpesanan(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'tanggal_pemesanan' => 'required',
            'no_hp' => 'required',
            'nama_paket' => 'required',
            'lokasi' => 'required',
            'jam' => 'required'
        ]);

        $pesanans = new Pesanan();
        $pesanans->nama = $request->nama;
        $pesanans->tanggal_pemesanan = $request->tanggal_pemesanan;
        $pesanans->no_hp = $request->no_hp;
        $pesanans->nama_paket = $request->nama_paket;
        $pesanans->lokasi = $request->lokasi;
        $pesanans->jam = $request->jam;

        $pesanans->save();

        if ($pesanans) {
            return back()->with('success', 'Pesanan Berhasil!');
        } else {
            return back()->with('failed', 'pesanan gagal!');
        }
    }
    public function userprofilefotografer(Request $request)
    {
        $search = $request->input('search');

        $data = Fotografer::where(function ($query) use ($search) {
            $query->where('nama', 'LIKE', '%' . $search . '%');
        })->paginate(5);

        return view('user.profilefotografer', compact('data'));

    }

    public function userdetail($id)
    {
        $paket = Paket::find($id);

        return view('user.detail', compact('paket'));
    }
}