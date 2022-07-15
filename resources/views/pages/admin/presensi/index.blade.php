@extends('layouts.admin')

@section('content')


 <div class="container-fluid">

 <div class="alert alert-warning" role="alert">
 <i class="fas fa-fw fa-home"></i>
 <a  href="{{url('presensi')}}" style="text-decoration:none">Presensi </a>
</div>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
<div class="row container bg-white md-5 p-5">

<ul class="nav">
    <li  class="scroll-to-section p-1"><a class="btn btn-primary btn-sm" href="{{url('presensi/create')}}"><i class="fa fa-plus-circle"></i> Tambah Data</a> </li>
    <li  class="scroll-to-section p-1"><a class="btn btn-warning btn-sm" href="/presensi/export_excel" target="_blank"> <i class="fas fa-fw fa-file-import"></i> Export</a></li>
    <li  class="scroll-to-section p-1"><button class="btn btn-success btn-sm" data-toggle="modal" data-target="#importExcel"> <i class="fas fa-fw fa-file-download"></i>Import</button></li>
</ul>

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

{{-- <button type="button" class="btn btn-primary mr-5" data-toggle="modal" data-target="#importExcel">
    IMPORT EXCEL
</button> --}}

<!-- Import Excel -->
<div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form method="post" action="/presensi/import_excel" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                </div>
                <div class="modal-body">

                    {{ csrf_field() }}

                    <label>Pilih file excel</label>
                    <div class="form-group">
                        <input type="file" name="file" required="required">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Import</button>
                </div>
            </div>
        </form>
    </div>
</div>
{{-- ================================================ --}}

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
                 <table class="table tdable-bordered table-hover text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NTA</th>
                            <th>Golongan</th>
                            <th>Jabatan</th>
                            <th>Status Kehadiran</th>
                            <th>Action</th> 
                        </tr>
                    {{-- </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Foto</th>
                            <th>Kelas</th>
                            <th>NTA</th>
                            <th>Golongan</th>
                            <th>Jabatan</th>
                            <th>Action</th> 
                        </tr>
                    </tfoot> --}}
                    <tbody>
                        @foreach ($presensi as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama }}</td>
                            <td><a href="{{ asset('frontend/images/IMG_6959.jpeg') }}" target="_blank"><img height="70px" width="50px" src="{{ asset('frontend/images/IMG_6959.jpeg') }}" alt=""></a></td>
                           
                            <td>{{ $item->nta }}</td>
                            <td>{{ $item->golongan }}</td>
                            <td>{{ $item->jabatan }}</td>
                            <td>
                                <a class="btn btn-info" href="{{url('presensi/'.$item->id.'/show')}}"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-success" href="{{url('presensi/'.$item->id.'/edit')}}"><i class="fas fa-pencil-alt"></i></a>
                                <form class="d-inline" action="{{url('presensi/'.$item->id)}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                                    </form></td>
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