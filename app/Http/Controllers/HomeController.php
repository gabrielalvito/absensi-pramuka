<?php

namespace App\Http\Controllers;

use App\Models\Presensi;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $total_user = User::count();
        $pembina = User::where('roles','PEMBINA')->count();
        $siswa = User::where('roles','USER')->count();
        $presensi = Presensi::count();

        return view('home', compact('total_user','pembina','siswa', 'presensi'));
    }
}
