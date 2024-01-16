<?php

namespace App\Http\Controllers;

use App\Models\fotografer;
use App\Models\Paket;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ClientController extends Controller
{
    public function home()
    {
        return view('client.home');
    }

    public function about()
    {
        return view('client.about');
    }

    public function photographer()
    {   
        $dataPhotographer = fotografer::latest()->get();
        return view('client.photographer', [
            'photographers' => $dataPhotographer,
        ]);
    }

    public function order()
    {   
        $dataPaket = Paket::latest()->get();
        $dataFotografer = fotografer::latest()->get();
        return view('client.order', [
            'pakets' => $dataPaket,
            'fotografers' => $dataFotografer,
        ]);
    }

    public function ordered(Request $request)
    {
        $validasi = $request->validate([
            'user_id' => 'required',
            'paket_id' => 'required',
            'fotografer_id' => 'required',
            'no_hp' => 'required',
            'lokasi' => 'required',
            'tanggal_pemesanan' => 'required',
            'jam' => 'required',
        ]);

        $cekFotografer = Pesanan::where([['fotografer_id', '=', $request->fotografer_id], ['tanggal_pemesanan', '=', $request->tanggal_pemesanan]])->first();
        if ($cekFotografer) {
            return redirect('/order')->with('failed', 'Maaf fotografer tidak tersedia untuk tanggal tersebut!');
        }

        Pesanan::create($validasi);

        return redirect('/my-order')->with('success', 'Pesanan anda berhasil dibuat!');
    }

    public function myOrder()
    {
        $dataOrder = Pesanan::latest()->where('user_id', Auth::user()->id)->get();
        return view('client.myorder', [
            'orders' => $dataOrder,
        ]);
    }

    public function payment(Request $request, Pesanan $pesanan)
    {   
        $request->validate([
            'bukti_bayar' => 'required|mimes:jpeg,jpg,png|max:5120',
        ]);

        $files = $request->file('bukti_bayar');
        $fileNameBuktiBayar = '';
        if ($request->hasFile('bukti_bayar')) {
            $fileNameBuktiBayar = date('YmdHi') . '_' . $files->getClientOriginalName();
            $files->move(public_path('images'), $fileNameBuktiBayar);
        }

        $pesanan->update([
            'status' => 'Menunggu Konfirmasi',
            'bukti_bayar' => $fileNameBuktiBayar,
        ]);

        return redirect('/my-order')->with('success', 'Bukti pembayaran anda berhasil dikirim!');
    }
}
