@extends('layouts.myuser')



@section('content')


 <div class="container-fluid">

 <div class="alert alert-warning" role="alert">
 <i class="fas fa-fw fa-home"></i>
 <a  href="{{url('pembina')}}" style="text-decoration:none">Pembina </a>
</div>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
<div class="row container bg-white md-5 p-5">

{{-- ================================================ --}}
{{-- notifikasi form validasi --}}
@if ($errors->has('file'))
<span class="invalid-feedback" role="alert">
    <strong>{{ $errors->first('file') }}</strong>
</span>
@endif

{{-- notifikasi sukses --}}
@if ($sukses = Session::get('sukses'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button> 
    <strong>{{ $sukses }}</strong>
</div>
@endif



@if (count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>            
        @endforeach
    </ul>
</div>
@endif

@if (Session::has('success'))
<p class="alert alert-success">{{ Session::get('success')}}</p><br/>
@endif
    <!-- DataTales Example -->
    {{-- <div class="card shadow mb-4"> --}}
        {{-- <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div> --}}
        <div class="card-body">
            <div>
                 <table class="table tdable-bordered table-hover " id="dataTable" width="100%" cellspacing="0">
                    <thead class="table-dark text-center" >
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Foto</th>
                            <th>NTA</th>
                            <th>Golongan</th>
                            <th>Jabatan</th>
                        </tr>
                    <tbody>
                        @foreach ($pembina as $item)
                        <tr>
                            <td align="center">{{ $loop->iteration }}</td>
                            <td>{{ $item->nama }}</td>
                            <td align="center"><a href="{{ asset('frontend/images/IMG_6959.jpeg') }}" target="_blank"><img height="70px" width="50px" src="{{ asset('frontend/images/IMG_6959.jpeg') }}" alt=""></a></td>
                           
                            <td>{{ $item->nta }}</td>
                            <td>{{ $item->golongan }}</td>
                            <td>{{ $item->jabatan }}</td>
                            
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    {{-- </div> --}}
</div>
    </div>

</div>



@endsection