<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Paket;
use App\Models\Pesanan;
use App\Models\Fotografer;


class AdminController extends Controller
{
    public function adminpaket(Request $request)
    {
        $search = $request->input('search');
        $data = Paket::where('nama_paket', 'LIKE', '%' . $search . '%')->paginate(5);
        return view('admin.paket', compact('data'));
    }

    public function tambahpaket()
    {
        return view('admin.tambahpaket');
    }

    public function postTambahPaket(Request $request)
    {
        $request->validate([
            'foto' => 'required|image|max:5120',
            'nama_paket' => 'required',
            'harga_paket' => 'required',
            'ket_paket' => 'required'
        ]);

        $paket = new Paket();
        $paket->nama_paket = $request->nama_paket;
        $paket->harga_paket = $request->harga_paket;
        $paket->ket_paket = $request->ket_paket;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/', $filename);
            $paket->foto = $filename;
        }

        $paket->save();

        if ($paket) {
            return back()->with('success', 'Paket baru berhasil ditambahkan!');
        } else {
            return back()->with('failed', 'Data gagal ditambahkan!');
        }
    }

    public function editpaket($id)
    {
        $data = Paket::find($id);
        return view('admin.editpaket', compact('data'));
    }

    public function postEditPaket(Request $request, $id)
    {
        $request->validate([
            'nama_paket' => 'required',
            'harga_paket' => 'required',
            'ket_paket' => 'required',
            'foto' => 'image|nullable|max:5120',
        ]);

        $paket = Paket::find($id);
        $paket->nama_paket = $request->nama_paket;
        $paket->harga_paket = $request->harga_paket;
        $paket->ket_paket = $request->ket_paket;

        if ($request->hasFile('foto')) {
            $filepath = 'images/' . $paket->foto;
            if (File::exists($filepath)) {
                File::delete($filepath);
            }
            $file = $request->file('foto');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/', $filename);
            $paket->foto = $filename;
        }

        $paket->save();

        if ($paket) {
            return back()->with('success', 'Data paket berhasil diupdate!');
        } else {
            return back()->with('failed', 'Data paket gagal diupdate!');
        }
    }

    public function deletepaket($id)
    {
        $paket = Paket::find($id);
        $filepath = 'images/' . $paket->foto;
        if (File::exists($filepath)) {
            File::delete($filepath);
        }
        $paket->delete();

        if ($paket) {
            return back()->with('success', 'Data paket berhasil dihapus!');
        } else {
            return back()->with('failed', 'Gagal menghapus data paket!');
        }
    }

    public function detailpaket($id_paket)
    {
        $detailpaket = Paket::select('paket.*')
            ->where('paket.id', $id_paket)
            ->first();

        if (!$detailpaket) {
            abort(404, 'Data tidak ditemukan');
        }

        return view('admin.detailpaket', compact('detailpaket'));
    }

    public function adminfotografer(Request $request)
    {
        $search = $request->input('search');
        $data = Fotografer::where('nama', 'LIKE', '%' . $search . '%')->paginate(5);
        return view('admin.fotografer', compact('data'));
    }

    public function tambahfotografer()
    {
        return view('admin.tambahfotografer');
    }

    public function postTambahFotografer(Request $request)
    {
        $request->validate([
            'foto' => 'required|image|max:5120',
            'nama' => 'required',
            'pengalaman' => 'required',
            'alamat_email' => 'required',
            'kontak' => 'required'
        ]);

        $fotografer = new fotografer();
        $fotografer->nama = $request->nama;
        $fotografer->pengalaman = $request->pengalaman;
        $fotografer->alamat_email = $request->alamat_email;
        $fotografer->kontak = $request->kontak;


        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/', $filename);
            $fotografer->foto = $filename;
        }

        $fotografer->save();

        if ($fotografer) {
            return back()->with('success', 'Paket baru berhasil ditambahkan!');
        } else {
            return back()->with('failed', 'Data gagal ditambahkan!');
        }
    }

    public function editfotografer($id)
    {
        $data = Fotografer::find($id);
        return view('admin.editfotografer', compact('data'));
    }

    public function postEditFotografer(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'pengalaman' => 'required',
            'alamat_email' => 'required',
            'kontak' => 'required',
            'foto' => 'image|nullable|max:5120',
        ]);

        $fotografer = Fotografer::find($id);
        $fotografer->nama = $request->nama;
        $fotografer->pengalaman = $request->pengalaman;
        $fotografer->alamat_email = $request->alamat_email;
        $fotografer->kontak = $request->kontak;



        if ($request->hasFile('foto')) {
            $filepath = 'images/' . $fotografer->foto;
            if (File::exists($filepath)) {
                File::delete($filepath);
            }
            $file = $request->file('foto');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/', $filename);
            $fotografer->foto = $filename;
        }

        $fotografer->save();

        if ($fotografer) {
            return back()->with('success', 'Data fotografer berhasil diupdate!');
        } else {
            return back()->with('failed', 'Data fotografer gagal diupdate!');
        }
    }

    public function deletefotografer($id)
    {
        $fotografer = Fotografer::find($id);
        $filepath = 'images/' . $fotografer->foto;
        if (File::exists($filepath)) {
            File::delete($filepath);
        }
        $fotografer->delete();

        if ($fotografer) {
            return back()->with('success', 'Data paket berhasil dihapus!');
        } else {
            return back()->with('failed', 'Gagal menghapus data fotografer!');
        }
    }

    // public function adminpesanan(Request $request)
    // {
    //     $search = $request->input('search');
    //     $data = Pesanan::where('id_pesanan', 'LIKE', '%' . $search . '%')->paginate(5);
    //     return view('admin.pesanan', compact('data'));
    // }

    // public function tambahpesanan()
    // {
    //     return view('admin.tambahpesanan');
    // }

    // public function postTambahPesanan(Request $request)
    // {
    //     $request->validate([
    //         'idPesanan' => 'required',
    //         'idUser' => 'required',
    //         'nama' => 'required',
    //         'tanggal_pemesanan' => 'required|date',
    //         'no_hp' => 'required',
    //         'nama_paket' => 'required',
    //         'lokasi' => 'required',
    //         'jam' => 'required'
    //     ]);

    //     $pesanan = new pesanan();

    //     $pesanan->id_pesanan = $request->idPesanan;
    //     $pesanan->id_user = $request->idUser;
    //     $pesanan->nama = $request->nama;
    //     $pesanan->tanggal_pemesanan = $request->tanggal_pemesanan;
    //     $pesanan->no_hp = $request->no_hp;
    //     $pesanan->nama_paket = $request->nama_paket;
    //     $pesanan->lokasi = $request->lokasi;
    //     $pesanan->jam = $request->jam;

    //     $pesanan->save();

    //     if ($pesanan) {
    //         return back()->with('success', 'pesanan baru berhasil ditambahkan!');
    //     } else {
    //         return back()->with('failed', 'pesanan gagal ditambahkan!');
    //     }
    // }


    // public function deletepesanan($id)
    // {
    //     $pesanan = Pesanan::find($id);
    //     $filepath = 'images/' . $pesanan->foto;
    //     if (File::exists($filepath)) {
    //         File::delete($filepath);
    //     }
    //     $pesanan->delete();

    //     if ($pesanan) {
    //         return back()->with('success', 'Data berhasil dihapus!');
    //     } else {
    //         return back()->with('failed', 'Gagal menghapus data!');
    //     }
    // }

}