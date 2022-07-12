<?php

namespace App\Http\Controllers;

use App\Models\Presensi;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PresensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Presensi::all();

        return view('pages.admin.presensi.index', [
            'presensi' => $items
        ]);
    }

    public function indexuser()
    {
        $id_user = Auth::user()->id;
        $hadir = Presensi::all()->where('id_user' , $id_user)->where('ket' , 'hadir')->count();
        $sakit = Presensi::all()->where('id_user' , $id_user)->where('ket' , 'sakit')->count();
        $ijin = Presensi::all()->where('id_user' , $id_user)->where('ket' , 'ijin')->count();
        $alpha = Presensi::all()->where('id_user' , $id_user)->where('ket' , 'alpha')->count();
        return view('pages.user.presensi.index', compact('hadir' , 'sakit' , 'ijin' , 'alpha'));
        // dd($items);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'foto' => 'required|image|mimes:jpeg,jpg,png',
        ]);
        $id_user = Auth::user()->id;
        $foto_presensi = $request->foto;
        $nama_file = time().'.'.$foto_presensi->getClientOriginalExtension();
        $foto_presensi->move('foto_presensi/' , $nama_file);
        $tanggal = date('Y-m-d');
        $jam = date('H:i:s');


        $presensi = new Presensi;
        $presensi->id_user = $id_user;
        $presensi->tanggal_absen = $tanggal;
        $presensi->j_masuk = $jam;
        $presensi->ket = $request->keterangan;
        $presensi->foto = $nama_file;
        $presensi->save();

        return redirect('presensi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
