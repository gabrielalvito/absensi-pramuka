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
              <li class="breadcrumb-item"><a href="/user01">Admin</a></li>
              <li class="breadcrumb-item">Detail</li>
            </ol>
          </nav>

          <table border="0" width="100%">
            <tr>
              <td width="83%"></td>
              <td>
                <ul class="nav">
                  <li  class="scroll-to-section p-1"><a class="btn btn-primary btn-sm" href="/user01/{{ $user01->id }}/cetak_pdf" target="_blank"><i class="fa fa-save"></i> Simpan</a> </li>
                  <li  class="scroll-to-section p-1"><a class="btn btn-primary btn-sm" href="/user01/{{ $user01->id }}/print_pdf" target="_blank"><i class="fa fa-print"></i> Cetak</a> </li>
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
                <td>NTA</td>
                <td>{{$user01->nta}}</td>
              </tr>
              <tr>
                <td>Nama</td>
                <td>{{$user01->nama}}</td>
              </tr>
              <tr>
                <td>Username</td>
                <td>{{$user01->username}}</td>
              </tr>
              <tr>
                <td>Tempat Lahir</td>
                <td>{{$user01->tempat_lahir}}</td>
              </tr>
              <tr>
                <td>Tanggal Lahir</td>
                <td>{{$user01->tanggal_lahir}}</td>
              </tr>
              <tr>
                <td>Jenis Kelamin</td>
                <td>{{$user01->jenis_kelamin}}</td>
              </tr>
              <tr>
                <td>Agama</td>
                <td>{{$user01->agama}}</td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td>{{$user01->alamat}}</td>
              </tr>
              <tr>
                <td>No Telp</td>
                <td>{{$user01->no_tlp}}</td>
              </tr>
              <tr>
                <td>Golongan</td>
                <td>{{$user01->golongan}}</td>
              </tr>
              <tr>
                <td>Jabatan</td>
                <td>{{$user01->jabatan}}</td>
              </tr>
              <tr>
                <td>Foto</td>
                <td>{{$user01->foto}}</td>
              </tr>
            </tbody>
          </table>
         </div>
       </div>

    </div>

@endsection