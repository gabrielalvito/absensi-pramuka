@extends('layouts.admin')

@section('content')


<div class="container-fluid">

    <div class="alert alert-warning" role="alert">
        <i class="fas fa-fw fa-home"></i>
        <a href="{{url('rekap')}}" style="text-decoration:none">Rekap Presensi</a>
    </div>

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div class="row container bg-white md-5 p-5">
           
            <div class="card-body">
            <ul class="nav">
            <li class="scroll-to-section p-1"><a class="btn btn-warning btn-sm" href="/rekap/export_excel" target="_blank"> <i class="fas fa-fw fa-file-import"></i> Cetak</a></li>
            </ul><br>
                <div>
                    <table class="table tdable-bordered table-hover text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead class="table-dark">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NTA</th>
                                <th>Kelas</th>
                                <th>Tanggal Absen</th>
                                <th>Jam Absen</th>
                                <th>Status Masuk</th>
                                <th>Foto</th>
                                <th>Action</th>
                            </tr>
                        <tbody>
                            @foreach ($rekap as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->nta }}</td>
                                <td>{{ $item->kelas }}</td>
                                <td>{{ $item->tanggal_absen }}</td>
                                <td>{{ $item->j_masuk }}</td>
                                <td>{{ $item->ket }}</td>
                                <td><a target="_blank"><img height="70px" width="50px" src="{{ asset('foto_presensi/'.$item->foto) }}" alt=""></a></td>
                                <td>
                                    <a class="btn btn-info" href="{{url('rekap/'.$item->id.'/show')}}"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-success" href="{{url('rekap/'.$item->id.'/edit')}}"><i class="fas fa-pencil-alt"></i></a>
                                    <form class="d-inline" action="{{url('rekap/'.$item->id)}}" method="POST">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
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