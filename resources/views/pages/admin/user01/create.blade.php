@extends('layouts.admin')



@section('content')



 <div class="container-fluid">

 <div class="alert alert-warning" role="alert">
 <i class="fas fa-fw fa-home"></i>
 <a  href="{{url('pembina')}}" style="text-decoration:none"> Tambah Admin </a>
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
        <label for="username">Username</label>
        <input type="text" class="form-control" name="username" placeholder="Username" value="{{old('username')}}"> 
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
        <label for="golongan">Roles</label>
        <select class="custom-select my-1 mr-sm-2" id="golongan" name="golongan">
            <option selected>Pilih...</option>
            <option value="Admin">ADMIN</option>
        </select>
      </div>

      <button type="submit" class="btn btn-primary ">Simpan</button>
      <button type="reset" class="btn btn-danger ">Batal</button>
    </form>
  </div>

</div>


</div>



@endsection