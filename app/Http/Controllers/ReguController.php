<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Golongan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ReguController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->roles;

        $items = Golongan::all();
        return view('pages.admin.regu.index', compact('items','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.regu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'golongan' => 'required',
            'no_kapling' => 'required',
            'nama_regu' => 'required'
        ]);

        Golongan::create([
            'golongan' => $request->golongan,
            'no_kapling' => $request->no_kapling,
            'nama_regu' => $request->nama_regu,
        ]);

        // dd($request);
        return redirect('regu')->with('success', 'Data Pembina Berhasi Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Golongan::findOrFail($id);

        return view('pages.admin.regu.show', [
            'regu' => $item
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Golongan::findOrFail($id);

        return view('pages.admin.regu.edit', [
            'regu' => $item
        ]);
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
        // dd($request, $id);
        $this->validate($request, [
            'golongan' => 'required',
            'no_kapling' => 'required',
            'nama_regu' => 'required'
        ]);

        Golongan::where('id', $id)->update([
            'golongan' => $request->golongan,
            'no_kapling' => $request->no_kapling,
            'nama_regu' => $request->nama_regu
        ]);
        return redirect('regu')->with('success', 'Data Regu Berhasil Diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Golongan::findOrFail($id);
        $item->delete();

        return redirect('regu')->with('success', 'Data Regu Berhasil Dihapus!');
    }
}
