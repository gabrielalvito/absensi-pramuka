@extends('layouts.admin')



@section('content')

 <div class="container-fluid">

 <div class="alert alert-warning" role="alert">
 <i class="fas fa-fw fa-home"></i>
 <a  href="{{url('pembina')}}" style="text-decoration:none">Edit {{$pembina->nama}} </a>
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

    <form method="post" action="/pembina/{{ $pembina->id }}/update" enctype="multipart/form-data">
      @csrf
      @method('patch')
      <div class="form-group">
        <label for="nta">NTA</label>
        <input type="text" class="form-control" name="nta" value="{{$pembina->nta}}"> 
      </div>

      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" name="nama" value="{{$pembina->nama}}"> 
      </div>
      
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" name="username" value="{{$pembina->username}}"> 
      </div>

      <div class="form-group">
        <label for="tempat_lahir">Tempat Lahir</label>
        <input type="text" class="form-control" name="tempat_lahir" value="{{$pembina->tempat_lahir}}"> 
      </div>

      <div class="form-group">
        <label for="tanggal_lahir">Tanggal Lahir</label>
        <input type="date" class="form-control" name="tanggal_lahir" value="{{$pembina->tanggal_lahir}}"> 
      </div>
      
      <div class="form-group">
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <select class="custom-select my-1 mr-sm-2" id="jenis_kelamin" name="jenis_kelamin" value="{{$pembina->jenis_kelamin}}">
                          <option value="Laki-laki">Laki-laki</option>
                          <option value="Perempuan">Perempuan</option>
                          <option value="Laninya">Laninya</option>
                      </select>
      </div>

      <div class="form-group">
        <label for="agama">Agama</label>
        <select class="custom-select my-1 mr-sm-2" id="agama" name="agama" value="{{$pembina->agama}}">
                          <option value="Islam">Islam</option>
                          <option value="Kristen">Kristen</option>
                          <option value="Katholik">Katholik</option>
                          <option value="Hindu">Hindu</option>
                          <option value="Budha">Budha</option>
                          <option value="Protestan">Protestan</option>
                          <option value="Protestan">Lainnya</option>
                      </select>
      </div>

      <div class="form-group">
        <label for="alamat">Alamat</label>
        <textarea class="form-control" id="message-text" name="alamat">{{$pembina->alamat}}</textarea>
      </div>

      <div class="form-group">
        <label for="no_tlp">No Tlp</label>
        <input type="text" class="form-control" name="no_tlp" value="{{$pembina->no_tlp}}"> 
      </div>

      <div class="form-group">
        <label for="golongan">Golongan</label>
        <select class="custom-select my-1 mr-sm-2" id="golongan" name="golongan">
                          @if (old('golongan') == $pembina->golongan)
                              <option value="{{ $pembina->golongan }}" selected>{{ $pembina->golongan }}</option>
                            @else
                            <option value="Penggalang Ramu">Pembina</option>
                            <option value="Penggalang Rakit">Pembantu Pembina</option>
                            
                          @endif
                      </select>
      </div>

      <div class="form-group">
        <label for="jabatan">Jabatan</label>
        <select class="custom-select my-1 mr-sm-2" id="jabatan" name="jabatan">
                              <option value="Kamabigus" {{ ($pembina->jabatan == 'Kamabigus') ? 'selected' : ''}}>Kamabigus</option>
                              <option value="Pembina Utama">Pembina Utama</option>
                              <option value="Pelatih Lapangan">Pelatih Lapangan</option>
                              <option value="Sekretaris"  {{ ($pembina->jabatan == 'Sekretaris') ? 'selected' : ''}}>Sekretaris</option>
                              <option value="Bendahara">Bendahara</option>
                              <option value="Operator">Operator</option>
                              <option value="Tenaga IT">Tenaga IT</option>
                              <option value="Lainnya">Lainnya</option>
                      </select>
      </div>


      <div class="form-group">
        <label for="foto">Foto</label>
      <div class="custom-file">      
        <input type="file" name="foto" class="custom-file-input" id="validatedCustomFile" required>
        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
        <div class="invalid-feedback">Example invalid custom file feedback</div>
      </div>
      </div>

      <button type="submit" class="btn btn-primary ">Ubah</button>
      <button type="reset" class="btn btn-danger ">Batal</button>
    </form>
  </div>

</div>


</div>



@endsection