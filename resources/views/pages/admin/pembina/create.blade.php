@extends('layouts.admin')



@section('content')



 <div class="container-fluid">

 <div class="alert alert-warning" role="alert">
 <i class="fas fa-fw fa-home"></i>
 <a  href="{{url('pembina')}}" style="text-decoration:none"> Tambah Pembina </a>
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
    <form action="/pembina/store" method="post">
    {{-- {{ crsf_field() }} --}}
      @csrf
      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" name="nama" placeholder="Nama" value="{{old('nama')}}"> 
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" name="email" placeholder="Email" value="{{old('email')}}"> 
      </div>
      
      <div class="form-group">
        <label for="password">Password</label>
        <input type="text" class="form-control" name="password" placeholder="Password" value="{{old('password')}}"> 
      </div>

      <div class="form-group">
        <label for="nta">NTA</label>
        <input type="text" class="form-control" name="nta" placeholder="NTA" value="{{old('nta')}}"> 
      </div>

      <div class="form-group">
        <label for="tempat_lahir">Tempat Lahir</label>
        <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir" value="{{old('tempat_lahir')}}"> 
      </div>

      <div class="form-group">
        <label for="tanggal_lahir">Tanggal Lahir</label>
        <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir" value="{{old('tanggal_lahir')}}"> 
      </div>
      
      <div class="form-group">
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <select class="custom-select my-1 mr-sm-2" id="jenis_kelamin" name="jenis_kelamin">
                          <option selected>Pilih...</option>
                          <option value="Laki-laki">Laki-laki</option>
                          <option value="Perempuan">Perempuan</option>
                      </select>
      </div>

      <div class="form-group">
        <label for="agama">Agama</label>
        <select class="custom-select my-1 mr-sm-2" id="agama" name="agama">
                          <option selected>Pilih...</option>
                          <option value="Islam">Islam</option>
                          <option value="Kristen">Kristen</option>
                          <option value="Katholik">Katholik</option>
                          <option value="Hindu">Hindu</option>
                          <option value="Budha">Budha</option>
                          <option value="Protestan">Protestan</option>
                      </select>
      </div>

      <div class="form-group">
        <label for="alamat">Alamat</label>
        <textarea class="form-control" id="message-text" name="alamat"></textarea>
      </div>

      <div class="form-group">
        <label for="no_tlp">No Tlp</label>
        <input type="text" class="form-control" name="no_tlp" placeholder="No Tlp" value="{{old('no_tlp')}}"> 
      </div>


      <div class="form-group">
        <label for="golongan">Golongan</label>
        <select class="custom-select my-1 mr-sm-2" id="golongan" name="golongan">
            <option selected>Pilih...</option>
            <option value="Penggalang Ramu">Pembina</option>
            <option value="Penggalang Rakit">Pembantu Pembina</option>
        </select>
      </div>

     <div class="form-group">
        <label for="jabatan">Jabatan</label>
          <select class="custom-select my-1 mr-sm-2" id="jabatan" name="jabatan">
            <option selected>Pilih...</option>
            <option value="Kamabigus">Kamabigus</option>
            <option value="Pembina Utama">Pembina Utama</option>
            <option value="Pembina Lapangan">Pembina Lapangan</option>
            <option value="Sekretaris">Sekretaris</option>
            <option value="Bendahara">Bendahara</option>
            <option value="Operator">Operator</option>
            <option value="Tenaga IT">Tenaga IT</option>
            <option value="Lainnya">Lainnya</option>
          </select>
      </div>

      <div class="form-group">
        <label for="foto">Foto</label>
      <div class="custom-file">      
        <input type="file" class="custom-file-input" id="validatedCustomFile" required>
        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
        <div class="invalid-feedback">Example invalid custom file feedback</div>
      </div>
      </div>

      <button type="submit" class="btn btn-primary ">Simpan</button>
      <button type="reset" class="btn btn-danger ">Batal</button>
    </form>
  </div>

</div>


</div>



@endsection