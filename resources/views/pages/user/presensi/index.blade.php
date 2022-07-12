@extends('layouts.myuser')



@section('content')


 <div class="container-fluid">

    

<div class="d-sm-flex align-items-center justify-content-between mb-4">
<div class="row container bg-white md-5 p-5">


        <div class="card-body">
            <h5><strong>Hello {{ Auth::user()->nama }} !!</strong></h5>
            <br>

            <!-- Modal Create -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Absen</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="{{ route('SPresensi') }}" method="post" enctype="multipart/form-data">
        {{-- {{ crsf_field() }} --}}
        @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama_siswa" class="form-control" id="nama_siswa" aria-describedby="nama" value="{{ Auth::user()->nama }}" readonly>
                  </div>
               {{--
                <div class="form-group">
                    <label>Status Masuk</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                          Hadir
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                          Tidak Hadir
                        </label>
                      </div>
                </div>
                @if()
                @endif
                --}}
                <div class="form-group">
                    <label>Keterangan</label>
                    <select class="custom-select my-1 mr-sm-2" id="keterangan" name="keterangan">
                        <option selected>Pilih...</option>
                        <option value="Hadir">Hadir</option>
                        <option value="Sakit">Sakit</option>
                        <option value="Ijin">Ijin</option>
                        
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
        </div>
        <div class="modal-footer">
            <!-- <button type="button" class="btn btn-primary btn-lg btn-block">Absen</button> -->
            <input type="submit" name="submit" value="Absen" class="btn btn-primary btn-lg btn-block">
        </div>
        </form>
      </div>
      </div>
    </div>

            <div class="row">
                <div class="col-8">
                 <p align="justify">Gunakan tombol dibawah untuk melakukan Absensi, cukup
                     menekan 1 kali saja untuk melakukan Absensi Perhari ini 
                        <?php
                        function tgl_indo($tanggal){
	                    $bulan = array (
		                1 =>   'Januari',
		                        'Februari',
		                        'Maret',
		                        'April',
		                        'Mei',
		                        'Juni',
		                        'Juli',
		                        'Agustus',
		                        'September',
		                        'Oktober',
		                        'November',
		                        'Desember'
	                            );
	                    $pecahkan = explode('-', $tanggal);
	
	                    // variabel pecahkan 0 = tanggal
	                    // variabel pecahkan 1 = bulan
	                    // variabel pecahkan 2 = tahun
 
	                return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
                    }
 
                    echo tgl_indo(date('Y-m-d')); 
                    ?>

                     Apabila telah melakukan proses kehadiran maka akan ada informasi 
                     bahwa kehadiran sudah di proses. Terimakasih 

                     <br>
                     <br>
                     <div><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#exampleModal">Presensi Sekarang</button></div>
                     

                 </p>
                </div>

                <div class="col">
                    <div class="card border-info mb-3" style="max-width: 18rem;">
                        <div class="card-header">Keterangan</div>
                        <div class="card-body text-info">
                            <table border="0">
                                <tr>
                                    <th width="3%">Hadir</th>
                                    <td width="1%">:</td>
                                    <td width="10%">8</td>
                                </tr>
                                <tr>
                                    <th width="3%">Sakit</th>
                                    <td width="1%">:</td>
                                    <td width="10%">2</td>
                                </tr>
                                <tr>
                                    <th width="3%">Ijin</th>
                                    <td width="1%">:</td>
                                    <td width="10%">2</td>
                                </tr>
                                <tr>
                                    <th width="3%">Alpha</th>
                                    <td width="1%">:</td>
                                    <td width="10%">2</td>
                                </tr>
                            </table>
                          </div>
                      </div>
                </div>
              </div>

          </div>
</div>
    </div>

</div>



@endsection