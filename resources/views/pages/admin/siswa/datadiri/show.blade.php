@extends('layouts.admin')

@section('content')

    <div class="container-fluid">

       @if ($errors->any())
       <div class="alert alert-danger">
         <ul>
           @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
         </ul>
       </div>
       @endif

       <div class="card shadow mt-5">
         <div class="card-body">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/siswa">Siswa</a></li>
              <li class="breadcrumb-item">Detail</li>
            </ol>
          </nav>

          <table border="0" width="100%">
            <tr>
              <td width="83%"></td>
              <td>
                <ul class="nav">
                  <li  class="scroll-to-section p-1"><a class="btn btn-primary btn-sm" href="/siswa/{{ $siswa->id }}/cetak_pdf" target="_blank"><i class="fa fa-save"></i> Simpan</a> </li>
                  <li  class="scroll-to-section p-1"><a class="btn btn-primary btn-sm" href="/siswa/{{ $siswa->id }}/print_pdf" target="_blank"><i class="fa fa-print"></i> Cetak</a> </li>
              </ul>
              </td>
            </tr>
          </table>
          
         <br>

         
          <?php $i=1 ?>
          <table class="table" border="0">
            <tbody>
              <tr>
                <td width="20%">No</td>
                <td>{{$i++}}</td>
              </tr>
              <tr>
                <td>Nama</td>
                <td>{{$siswa->nama}}</td>
              </tr>
              <tr>
                <td>Email</td>
                <td>{{$siswa->email}}</td>
              </tr>
              <tr>
                <td>Password</td>
                <td>{{$siswa->password}}</td>
              </tr>
              <tr>
                <td>Kelas</td>
                <td>{{$siswa->kelas}}</td>
              </tr>
              <tr>
                <td>NTA</td>
                <td>{{$siswa->nta}}</td>
              </tr>
              <tr>
                <td>Tempat Lahir</td>
                <td>{{$siswa->tempat_lahir}}</td>
              </tr>
              <tr>
                <td>Tanggal Lahir</td>
                <td>{{$siswa->tanggal_lahir}}</td>
              </tr>
              <tr>
                <td>Jenis Kelamin</td>
                <td>{{$siswa->jenis_kelamin}}</td>
              </tr>
              <tr>
                <td>Agama</td>
                <td>{{$siswa->agama}}</td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td>{{$siswa->alamat}}</td>
              </tr>
              <tr>
                <td>No Telp</td>
                <td>{{$siswa->no_tlp}}</td>
              </tr>
              <tr>
                <td>Id Regu</td>
                <td>{{$siswa->id_regu}}</td>
              </tr>
              <tr>
                <td>Jabatan</td>
                <td>{{$siswa->jabatan}}</td>
              </tr>
              <tr>
              <tr>
                <td>Foto</td>
                <td>{{$siswa->foto}}</td>
              </tr>
            </tbody>
          </table>
         </div>
       </div>

    </div>

@endsection