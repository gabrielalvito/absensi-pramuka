@extends('layouts.admin')
@section('content')

 <div class="container-fluid">

 <div class="alert alert-warning" role="alert">
 <i class="fas fa-fw fa-home"></i>
 <a  href="{{url('regu')}}" style="text-decoration:none"> Tambah Regu Pembina </a>
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
    <form action="/regu/store" method="post">
    {{-- {{ crsf_field() }} --}}
      @csrf
      
      <div class="form-group">
        <label for="golongan">Golongan</label>
        <select class="custom-select my-1 mr-sm-2" id="golongan" name="golongan">
            <option selected>Pilih...</option>
            <option value="Penggalang Ramu">Pembina</option>
            <option value="Penggalang Rakit">Pembantu Pembina</option>
        </select>
      </div>

      <div class="form-group">
        <label for="no_kapling">No Kapling</label>
        <input type="text" class="form-control" name="no_kapling" placeholder="No Kapling" value="{{old('no_kapling')}}"> 
      </div>
      
      <div class="form-group">
        <label for="nama_regu">Nama Regu</label>
        <input type="text" class="form-control" name="nama_regu" placeholder="Nama Regu" value="{{old('nama_regu')}}"> 
      </div>

      <button type="submit" class="btn btn-primary ">Simpan</button>
      <button type="reset" class="btn btn-danger ">Batal</button>
    </form>
  </div>

</div>
</div>



@endsection