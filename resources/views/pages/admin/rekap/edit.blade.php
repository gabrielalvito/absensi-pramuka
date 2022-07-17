@extends('layouts.admin')



@section('content')

 <div class="container-fluid">

 <div class="alert alert-warning" role="alert">
 <i class="fas fa-fw fa-home"></i>
 <a  href="{{url('rekap')}}" style="text-decoration:none">Edit {{$rekap->nama}} </a>
</div>

@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
      <li> {{ $error }} </li>
    @endforeach
  </ul>
</div>
@endif

<div class="card shadow">
  <div class="card-body">

    <form method="post" action="/rekap/{{ $rekap->id }}/update" enctype="multipart/form-data">
      @csrf
      @method('patch')
      <!-- <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" name="nama" value="{{$rekap->nama}}"> 
      </div>
      <div class="form-group">
        <label for="nta">NTA</label>
        <input type="text" class="form-control" name="nta" value="{{$rekap->nta}}"> 
      </div>
      <div class="form-group">
        <label for="kelas">Kelas</label>
        <input type="text" class="form-control" name="kelas" value="{{$rekap->kelas}}"> 
      </div> -->

      <div class="form-group">
        <label for="tanggal_absen">Tanggal Absen</label>
        <input type="date" class="form-control" name="tanggal_absen" value="{{$rekap->tanggal_absen}}"> 
      </div>
      

      <div class="form-group">
        <label for="j_masuk">Jam Absen</label>
        <input type="text" class="form-control" name="j_masuk" value="{{$rekap->j_masuk}}">
      </div>

      <div class="form-group">
        <label for="ket">Status Masuk</label>
        <input type="text" class="form-control" name="ket" value="{{$rekap->ket}}"> 
      </div>

      <div class="form-group">
        <label for="foto">Foto</label>
      <div class="custom-file">      
        <input type="file" name="foto" class="custom-file-input" id="validatedCustomFile" required>
        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
        <div class="invalid-feedback">Example invalid custom file feedback</div>
      </div>
      </div>

      <button type="submit" class="btn btn-primary">Ubah</button>
      <button type="reset" class="btn btn-danger">Batal</button>
    </form>
  </div>
</div>
</div>
@endsection