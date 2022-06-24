@extends('layouts.admin')



@section('content')

 <div class="container-fluid">

 <div class="alert alert-warning" role="alert">
 <i class="fas fa-fw fa-home"></i>
 <a  href="{{url('regu')}}" style="text-decoration:none">Edit {{$regu->nama}} </a>
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

    <form method="post" action="/regu/{{ $regu->id }}/update">
      @csrf
      @method('patch')
      <div class="form-group">
        <label for="golongan">Golongan</label>
          <select class="custom-select my-1 mr-sm-2" id="golongan" name="golongan">
                          @if (old('golongan') == $regu->golongan)
                              <option value="{{ $regu->golongan }}" selected>{{ $regu->golongan }}</option>
                            @else
                            <option value="Penggalang Ramu">Pembina</option>
                            <option value="Penggalang Rakit">Pembantu Pembina</option>
                            
                          @endif
          </select>
      </div>

      <div class="form-group">
        <label for="no_kapling">No Kapling</label>
        <input type="text" class="form-control" name="no_kapling" value="{{$regu->no_kapling}}"> 
      </div>

      <div class="form-group">
        <label for="nama_regu">Nama Regu</label>
        <input type="text" class="form-control" name="nama_regu" value="{{$regu->nama_regu}}"> 
      </div>
      </div>
      </div>
      
      <button type="submit" class="btn btn-primary ">Ubah</button>
      <button type="reset" class="btn btn-danger ">Batal</button>
    </form>
  </div>

</div>


</div>



@endsection