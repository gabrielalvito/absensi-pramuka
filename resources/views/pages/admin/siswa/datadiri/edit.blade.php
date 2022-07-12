@extends('layouts.admin')



@section('content')

 <div class="container-fluid">

 <div class="alert alert-warning" role="alert">
 <i class="fas fa-fw fa-home"></i>
 <a  href="{{url('siswa')}}" style="text-decoration:none">Edit {{$siswa->nama}} </a>
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

    <form method="post" action="/siswa/{{ $siswa->id }}/update" enctype="multipart/form-data">
      @csrf
      @method('patch')
      <div class="form-group">
        <label for="nta">NTA</label>
        <input type="text" class="form-control" name="nta" value="{{$siswa->nta}}"> 
      </div>

      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" name="nama" value="{{$siswa->nama}}"> 
      </div>

      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" name="username" value="{{$siswa->username}}"> 
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" name="email" value="{{$siswa->email}}"> 
      </div>

      <div class="form-group">
        <label for="email">Password</label>
        <input type="password" class="form-control" name="password" value="{{$siswa->password}}"> 
      </div>

      <div class="form-group">
        <label for="kelas">Kelas</label>
        <select class="custom-select my-1 mr-sm-2" id="kelas" name="kelas" value="{{$siswa->kelas}}">
                          <option value="VII - A">VII - A</option>
                          <option value="VII - B">VII - B</option>
                          <option value="VII - C">VII - C</option>
                          <option value="VII - D">VII - D</option>
                          <option value="VII - E">VII - E</option>
                          <option value="VII - F">VII - F</option>
                          <option value="VII - G">VII - G</option>
                          <option value="VII - H">VII - H</option>
                          <option value="VIII - A">VIII - A</option>
                          <option value="VIII - B">VIII - B</option>
                          <option value="VIII - C">VIII - C</option>
                          <option value="VIII - D">VIII - D</option>
                          <option value="VIII - E">VIII - E</option>
                          <option value="VIII - F">VIII - F</option>
                          <option value="VIII - G">VIII - G</option>
                          <option value="VIII - H">VIII - H</option>
                          <option value="IX - A">IX - A</option>
                          <option value="IX - B">IX - B</option>
                          <option value="IX - C">IX - C</option>
                          <option value="IX - D">IX - D</option>
                          <option value="IX - E">IX - E</option>
                          <option value="IX - F">IX - F</option>
                          <option value="IX - G">IX - G</option>
                          <option value="IX - E">IX - E</option>
                          <option value="IX - F">IX - F</option>
                          <option value="IX - G">IX - G</option>
                          <option value="Laninya">Laninya</option>
                      </select>
      </div>

      <div class="form-group">
        <label for="tempat_lahir">Tempat Lahir</label>
        <input type="text" class="form-control" name="tempat_lahir" value="{{$siswa->tempat_lahir}}"> 
      </div>

      <div class="form-group">
        <label for="tanggal_lahir">Tanggal Lahir</label>
        <input type="date" class="form-control" name="tanggal_lahir" value="{{$siswa->tanggal_lahir}}"> 
      </div>
      
      <div class="form-group">
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <select class="custom-select my-1 mr-sm-2" id="jenis_kelamin" name="jenis_kelamin" value="{{$siswa->jenis_kelamin}}">
                          <option value="Laki-laki">Laki-laki</option>
                          <option value="Perempuan">Perempuan</option>
                          <option value="Laninya">Laninya</option>
                      </select>
      </div>

      <div class="form-group">
        <label for="agama">Agama</label>
        <select class="custom-select my-1 mr-sm-2" id="agama" name="agama" value="{{$siswa->agama}}">
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
        <textarea class="form-control" id="message-text" name="alamat">{{$siswa->alamat}}</textarea>
      </div>

      <div class="form-group">
        <label for="no_tlp">No Tlp</label>
        <input type="text" class="form-control" name="no_tlp" value="{{$siswa->no_tlp}}"> 
      </div>

      <!-- <div class="form-group">
        <label for="golongan">Golongan</label>
        <select class="custom-select my-1 mr-sm-2" id="golongan" name="golongan">
                          @if (old('golongan') == $siswa->golongan)
                              <option value="{{ $siswa->golongan }}" selected>{{ $siswa->golongan }}</option>
                            @else
                              <option value="Penggalang Ramu">Penggalang Ramu</option>
                              <option value="Penggalang Rakit">Penggalang Rakit</option>
                              <option value="Penggalang Terap">Penggalang Terap</option>
                          @endif
                      </select>
      </div> -->

      <div class="form-group">
        <label for="jabatan">Jabatan</label>
        <select class="custom-select my-1 mr-sm-2" id="jabatan" name="jabatan">
                              <option value="Dewan Galang" {{ ($siswa->jabatan == 'Dewan Galang') ? 'selected' : ''}}>Dewan Galang</option>
                              <option value="Pelatih Lapangan">Pratama Putra</option>
                              <option value="Pelatih Lapangan">Pratama Putri</option>
                              <option value="Pelatih Lapangan"  {{ ($siswa->jabatan == 'Pemimpin Regu') ? 'selected' : ''}}>Pemimpin Regu</option>
                              <option value="Pelatih Lapangan">Wakil Pemimpin Regu</option>
                              <option value="Sekretaris">Sekretaris</option>
                              <option value="Bendahara">Bendahara</option>
                              <option value="Lainnya">Lainnya</option>
                      </select>
      </div>

      <!-- <div class="form-group">
        <label for="no_kapling">No Kapling</label>
        <input type="text" class="form-control" name="no_kapling" value="{{$siswa->no_kapling}}"> 
      </div>

      <div class="form-group">
        <label for="nama_regu">Nama Regu</label>
        <input type="text" class="form-control" name="nama_regu" value="{{$siswa->nama_regu}}"> 
      </div> -->

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