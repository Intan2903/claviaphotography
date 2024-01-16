<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\Auth;
use Illuminate\support\facades\Hash;
use App\Models\User;
use App\Models\Paket;
use App\Models\Fotografer;
use App\Models\Pesanan;




class LoginRegisterController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function userHome(Request $request)
    {
        $search = $request->input('search');

        $data = Paket::where(function ($query) use ($search) {
            $query->where('nama_paket', 'LIKE', '%' . $search . '%');
        })->paginate(5);

        return view('user.home', compact('data'));

    }

    public function usertambahpesanan()
    {
        return view('user.tambahpesanan');

    }



    public function adminHome(Request $request)
    {
        $search = $request->input('search');
        $data = Paket::where('nama_paket', 'LIKE', '%' . $search . '%')->paginate(5);
        return view('admin.paket', compact('data'));
    }

    public function postRegister(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email', // Pastikan email unik di tabel users
            'jenis_kelamin' => 'required',
            'password' => 'required|min:8|max:20|confirmed',
        ]);

        $user = new User;

        $user->name = $request->name;
        $user->email = $request->email;
        $user->jenis_kelamin = $request->jenis_kelamin;
        $user->password = Hash::make($request->password);
        $user->level = 'user'; // Atur level pengguna sebagai 'user' (atau 'admin' jika diperlukan)

        $user->save();

        if ($user) {
            return redirect('/auth/login')->with('success', 'Akun berhasil dibuat, silakan login!');
        } else {
            return back()->with('failed', 'Maaf, terjadi kesalahan, coba kembali beberapa saat!');
        }
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|max:20',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();
            if ($user->level == 'user') {
                return redirect('/order');
            } elseif ($user->level == 'admin') {
                return redirect('/admin/home');
            }
        }

        return back()->with('failed', 'Maaf, terjadi kesalahan, coba kembali beberapa saat!');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}