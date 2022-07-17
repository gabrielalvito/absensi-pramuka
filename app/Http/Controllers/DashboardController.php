<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Presensi;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $total_user = User::count();
        $pembina = User::where('roles','PEMBINA')->count();
        $siswa = User::where('roles','USER')->count();
        $presensi = Presensi::count();

        $absen = Presensi::all();

        // $dataPoints = [];

        // foreach ($absen as $data) {
            
        //     $dataPoints[] = array(
        //         "name" => $data['name'],
        //         "data" => [
        //             intval($data['term1_marks']),
        //             intval($data['term2_marks']),
        //             intval($data['term3_marks']),
        //             intval($data['term4_marks']),
        //         ],
        //     );
        // }
        // return view('home', compact('total_user','pembina','siswa', 'presensi'));
        return view('pages.admin.dashboard', compact('total_user','pembina','siswa', 'presensi'));
    }

    // public function barchart(Request $request)
    // {
    // 	$hadir = Presensi::where('ket','hadir')->get();
    // 	$sakit = Presensi::where('ket','vegitable')->get();
    // 	$ijin = Presensi::where('ket','ijin')->get();
    //     $alpha = Presensi::where('ket','alpha')->get();
        
    // 	$total_hadir = count($hadir);    	
    // 	$total_sakit = count($sakit);
    // 	$total_ijin = count($ijin);
    //     $total_alpha = count($alpha);
    	
    // 	return view('barchart',compact('total_hadir','total_sakit','total_ijin','total_alpha'));
    // }

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
