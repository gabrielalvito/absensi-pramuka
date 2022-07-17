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
              <li class="breadcrumb-item"><a href="/rekap">Rekap</a></li>
              <li class="breadcrumb-item">Detail</li>
            </ol>
          </nav>

          <table border="0" width="100%">
            <tr>
              <td width="83%"></td>
              <td>
                <ul class="nav">
                  <li  class="scroll-to-section p-1"><a class="btn btn-primary btn-sm" href="/rekap/{{ $rekap->id }}/cetak_pdf" target="_blank"><i class="fa fa-save"></i> Simpan</a> </li>
                  <li  class="scroll-to-section p-1"><a class="btn btn-primary btn-sm" href="/rekap/{{ $rekap->id }}/print_pdf" target="_blank"><i class="fa fa-print"></i> Cetak</a> </li>
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
              <!-- <tr>
                <td>Nama</td>
                <td>{{$rekap->nama}}</td>
              </tr>
              <tr>
                <td>NTA</td>
                <td>{{$rekap->nta}}</td>
              </tr>
              
              <tr>
                <td>Kelas</td>
                <td>{{$rekap->kelas}}</td>
              </tr>
              <tr>
                <td>Golongan</td>
                <td>{{$rekap->golongan}}</td>
              </tr> -->
              <tr>
                <td>Tanggal Absen</td>
                <td>{{$rekap->tanggal_absen}}</td>
              </tr>
              <tr>
                <td>Jam Absen</td>
                <td>{{$rekap->j_masuk}}</td>
              </tr>
              <tr>
                <td>Status Masuk</td>
                <td>{{$rekap->ket}}</td>
              </tr>
              <tr>
                <td>Foto</td>
                <td>{{$rekap->foto}}</td>
              </tr>
            </tbody>
          </table>
         </div>
       </div>

    </div>

@endsection