@extends('layouts.admin')

@section('content')

    <div class="container-fluid">

       @if ($errors->any())
       <div class="alert alert-danger">
         <ul>
           @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
         </ul>
       </div>
       @endif

       <div class="card shadow mt-5">
         <div class="card-body">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/regu">Regu</a></li>
              <li class="breadcrumb-item">Detail</li>
            </ol>
          </nav>

          <table border="0" width="100%">
            <tr>
              <td width="83%"></td>
            </tr>
          </table>
          
         <br>
          <?php $i=1 ?>
          <table class="table" border="0">
            <tbody>
              <tr>
                <td width="20%">No</td>
                <td>{{$i++}}</td>
              </tr>
              <tr>
                <td>Golongan</td>
                <td>{{$regu->golongan}}</td>
              </tr>
              <tr>
                <td>No Kapling</td>
                <td>{{$regu->no_kapling}}</td>
              </tr>
              <tr>
                <td>Nama Regu</td>
                <td>{{$regu->nama_regu}}</td>
              </tr>
            </tbody>
          </table>
         </div>
       </div>

    </div>

@endsection