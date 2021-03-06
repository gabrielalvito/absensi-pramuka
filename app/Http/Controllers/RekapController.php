<?php

namespace App\Http\Controllers;

use App\Models\Rekap;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RekapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $items = DB::table('presensi')
                    ->join('users','users.id', '=', 'presensi.id_user')
                    ->select('presensi.*','users.nama','users.kelas','users.nta')
                    ->get();

        return view('pages.admin.rekap.index', [
            'rekap' => $items
        ]);
    }

    public function indexuser()
    {
        $items = Rekap::all();

        return view('pages.user.rekap.index', [
            'rekap' => $items
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $items = Rekap::findOrFail($id);

        return view('pages.admin.rekap.show', [
            'rekap' => $items
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
        $item = Rekap::findOrFail($id);

        return view('pages.admin.rekap.edit', [
            'rekap' => $item
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
        $item = Rekap::findOrFail($id);
        $item->delete();

        return redirect('rekap')->with('success', 'Data Rekap Berhasil Dihapus!');
    }
}
