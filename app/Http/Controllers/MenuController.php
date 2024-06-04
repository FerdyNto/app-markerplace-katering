<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

class MenuController extends Controller
{
    public function menu()
    {
        $title = 'Hapus Menu!';
        $text = "Yakin ingin hapus menu?";
        confirmDelete($title, $text);
        return view('dashboard.menu', [
            'profile' => Profile::where('user_id', Auth::user()->id)->first(),
            'menus' => Menu::where('user_id', Auth::user()->id)->get()
        ]);
    }

    public function createMenu()
    {
        return view('dashboard.create-menu', [
            'profile' => Profile::where('user_id', Auth::user()->id)->first(),
        ]);
    }

    public function storeMenu(Request $request)
    {
        $data = $request->validate([
            'nama_menu' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'foto' => 'required|mimes:jpg,png,jpeg'
        ]);

        // Upload Gambar
        $gambar_file = $request->file('foto');
        $gambar_ekstensi = $gambar_file->extension();
        $gambar_nama = date('ymdhis') . '.' . $gambar_ekstensi;
        $gambar_file->move(public_path('img/menu/'), $gambar_nama);

        $menu = new Menu($data);
        $menu->foto = $gambar_nama;
        $menu->user_id = Auth::user()->id;
        $menu->save();

        Alert::success('Yes!!', 'Berhasil tambah menu baru!');
        return redirect(route('menu.merchant'));
    }

    public function destroyMenu($id)
    {
        $menu = Menu::where('id', $id)->first();

        $menu->delete();

        Alert::success('Yes!!', 'Berhasil hapus menu!');
        return redirect(route('menu.merchant'));
    }

    public function editMenu($id)
    {
        return view('dashboard.edit-menu', [
            'profile' => Profile::where('user_id', Auth::user()->id)->first(),
            'menu' => Menu::where('id', $id)->first()
        ]);
    }

    public function updateMenu(Request $request, $id)
    {
        $menu = Menu::where('id', $id)->first();
        $data = $request->validate([
            'nama_menu' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required'
        ]);
        if ($request->hasFile('foto')) {
            $request->validate([
                'foto' => 'required|mimes:jpg,png,jpeg'
            ]);

            // Upload Gambar baru
            $gambar_file = $request->file('foto');
            $gambar_ekstensi = $gambar_file->extension();
            $gambar_nama = date('ymdhis') . '.' . $gambar_ekstensi;
            $gambar_file->move(public_path('img/menu/'), $gambar_nama);

            // hapus file lama
            $foto_menu = Menu::where('id', $id)->first();
            File::delete(public_path('img/menu/') . $foto_menu->foto);

            $menu->foto = $gambar_nama;
            $menu->fill($data);
            $menu->save();
            Alert::success('Update Menu', 'Berhasil Ubah Menu');
            return redirect(route('menu.merchant'));
        } else {

            $menu->fill($data);
            $menu->save();
            Alert::success('Update Menu', 'Berhasil Ubah Menu');
            return redirect(route('menu.merchant'));
        }
    }
}
