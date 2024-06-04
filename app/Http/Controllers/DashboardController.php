<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('dashboard.index', [
            'profile' => Profile::where('user_id', Auth::user()->id)->first(),
            'menu' => Menu::where('user_id', Auth::user()->id)->get()
        ]);
    }
}
