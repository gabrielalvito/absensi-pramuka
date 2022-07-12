<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pembina;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PembinaExport;
use App\Imports\PembinaImport;
use App\Models\User as ModelsUser;
use Illuminate\Support\Str;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class PembinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = User::all()->where('roles' , 'PEMBINA');
        $user = Auth::user()->roles;

        // return view('pages.admin.pembina.index', [
        //     'pembina' => $items,
        // ]);
        return view('pages.admin.pembina.index' , compact('items' , 'user'));
        // dd($user);
    }

    public function indexuser()
    {
        $items = Pembina::all();

        return view('pages.user.pembina.index', [
            'pembina' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.pembina.create');
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
            'nta' => 'required',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'no_tlp' => 'required',
            'golongan' => 'required',
            'jabatan' => 'required',
            'foto' => 'required|image|mimes:jpeg,jpg,png',
            
        ]);

        $foto_pembina = $request->foto;
        $nama_file = time().'.'.$foto_pembina->getClientOriginalExtension();
        $foto_pembina->move('foto_pembina/' , $nama_file);
        // $pembina = new Pembina;
        // $pembina->foto = $nama_file;
        // $pembina->save();
       

        User::create([
            'nama' => $request->nama,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request['password']),
            'nta' => $request->nta,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'alamat' => $request->alamat,
            'no_tlp' => $request->no_tlp,
            'roles' => 'PEMBINA',
            'jabatan' => $request->jabatan,
            'golongan' => $request->golongan,
            'foto' => $nama_file,
        ]);
        
        // dd($request);
        return redirect('pembina')->with('success', 'Data Pembina Berhasi Ditambahkan!');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Pembina::findOrFail($id);

        return view('pages.admin.pembina.show', [
            'pembina' => $item
        ]);
    }

    public function cetak_pdf($id)
    {
        // dd($id);
        $pembina = Pembina::where('id', '=', $id)->get();
        // dd($pembina);
        $pdf = Pdf::loadview('pages.admin.pembina.pembinapdf', ['pembina' => $pembina])->setpaper('A4', 'potrait');
        // dd($pdf);
        return $pdf->download('data-pembina.pdf');
    }

    public function print_pdf($id)
    {
        $pembina = Pembina::where('id', '=', $id)->get();
        $pdf = PDF::loadView('pages.admin.pembina.pembinapdf', ['pembina' => $pembina]);
        $output = $pdf->output();

        return new Response($output, 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' =>  'inline; filename="invoice.pdf"',
        ]);
    }


    public function edit($id)
    {
        $item = Pembina::findOrFail($id);

        return view('pages.admin.pembina.edit', [
            'pembina' => $item
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
            'nta' => 'required',
            'nama' => 'required',
            'username' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'no_tlp' => 'required',
            'golongan' => 'required',
            'jabatan' => 'required'
        ]);

        Pembina::where('id', $id)->update([
            'nta' => $request->nta,
            'nama' => $request->nama,
            'username' => $request->username,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'alamat' => $request->alamat,
            'no_tlp' => $request->no_tlp,
            'golongan' => $request->golongan,
            'jabatan' => $request->jabatan
        ]);
        return redirect('pembina')->with('success', 'Data Pembina Berhasil Diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Pembina::findOrFail($id);
        $item->delete();

        return redirect('pembina')->with('success', 'Data Pembina Berhasil Dihapus!');
    }

    public function export_excel()
    {
        return Excel::download(new PembinaExport, 'pembina.xlsx');
    }

    public function import_excel(Request $request)
    {
        // validasi
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        // menangkap file excel
        $file = $request->file('file');

        // membuat nama file unik
        $nama_file = rand() . $file->getClientOriginalName();

        // upload ke folder file_siswa di dalam folder public
        $file->move('file_pembina', $nama_file);

        // import data
        Excel::import(new PembinaImport, public_path('/file_pembina/' . $nama_file));

        // notifikasi dengan session
        // Session::flash('sukses','Data Siswa Berhasil Diimport!');

        // alihkan halaman kembali
        return redirect('/pembina')->with('sukses', 'Data Pembina Berhasil Diimport!');
    }
}
