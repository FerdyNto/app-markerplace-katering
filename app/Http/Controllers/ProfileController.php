<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('dashboard.profil', [
            'profile' => Profile::where('user_id', Auth::user()->id)->first()
        ]);
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $profil = Profile::where('user_id', $user->id)->first();
        $data = $request->validate([
            'nama' => 'required',
            'kontak' => 'required',
            'alamat' => 'required',
            'deskripsi' => 'required'
        ]);

        // dd($data);
        $profil->fill($data);
        $profil->save();
        Alert::success('Update Profile', 'Berhasil Ubah Data Profile');

        return redirect(route('profile.merchant'));
    }
}
