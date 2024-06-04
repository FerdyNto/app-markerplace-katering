<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;


class UserController extends Controller
{
    public function loginMerchant()
    {
        return view('Auth.login');
    }

    public function doLoginMerchant(Request $request)
    {
        $login =  $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        // Otentikasi
        if (Auth::attempt($login)) {
            // otentikasi suskses
            // return 'Berhasil';
            Alert::success('Selamat datang');

            return redirect(route('dashboard.merchant'));
        } else {
            // otentikasi gagal
            // return 'Gagal';
            Alert::error('Gagal Masuk', 'Username atau Password tidak sesuai!');
            return redirect(route('login.merchant'));
        }
    }

    public function registerMerchant()
    {
        return view('Auth.register');
    }

    public function doRegisterMerchant(Request $request)
    {
        $data = $request->validate([
            'username' => 'required|unique:users,username',
            'name' => 'required',
            'password' => 'required',
            'confirm-password' => 'required|same:password'
        ]);

        // cek apakah username sudah tersedia
        if (User::where('username', $data['username'])->count() > 0) {
            Alert::error('Gagal Register', 'username sudah tersedia');
            redirect(route('register.merchant'));
        }

        $register = new User($data);
        $register->password = Hash::make($data['password']);
        $register->save();
        Alert::success('Yes!!', 'Berhasil daftar merchant');
        return redirect(route('login.merchant'));
    }

    public function logout()
    {
        Auth::logout();
        Alert::success('By!!', 'Sampai bertemu kembali');
        return redirect(route('login.merchant'));
    }
}
