@extends('layouts.home')

@section('title')

@section('content')


 <!-- ***** Features Item Start ***** -->
 <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Program <em>Kerja</em></h2>
                        <img src="{{url('frontend/template/assets/images/line-dec.png')}}" alt="waves">
                        <p>
                            Gerakan pramuka merupakan salah satu ekstrakurikuler pertama dan wajib di SMPN 43 Semarang. Berikut program kerja pramuka SMPN 43 Semarang tahun ajaran 2021/2022.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">

                        
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{url('frontend/template/assets/images/latihanrutin.jpeg')}}" alt="First One" width="20%" height="20%">
                            </div>
                            <div class="right-content">
                                <h4>LATIHAN RUTIN</h4>
                                <p>Please do not re-distribute this template ZIP file on any template collection website. This is not allowed.</p>
                                <a href="#" class="text-button">Discover More</a>
                            </div>
                        </li>

                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{url('frontend/template/assets/images/gudepmantap.jpeg')}}" alt="third gym training" width="20%" height="20%">
                            </div>
                            <div class="right-content">
                                <h4>GUDEP MANTAP</h4>
                                <p>Credit goes to <a rel="nofollow" href="https://www.pexels.com" target="_blank">Pexels website</a> for images and video background used in this HTML template.</p>
                                <a href="#" class="text-button">Discover More</a>
                            </div>
                        </li>

                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{url('frontend/template/assets/images/pramukapeduli.jpeg')}}" alt="training fifth" width="20%" height="20%">
                            </div>
                            <div class="right-content">
                                <h4>PRAMUKA PEDULI</h4>
                                <p>This template is built on Bootstrap v4.3.1 framework. It is easy to adapt the columns and sections.</p>
                                <a href="#" class="text-button">Discover More</a>
                            </div>
                        </li>

                        

                        
  
                    </ul>
                </div>

                <div class="col-lg-6">
                    <ul class="features-items">
                        
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{url('frontend/template/assets/images/dg.png')}}" alt="fourth muscle" width="20%" height="20%">
                            </div>
                            <div class="right-content">
                                <h4>DEWAN GALANG</h4>
                                <p>You may want to browse through <a rel="nofollow" href="https://templatemo.com/tag/digital-marketing" target="_parent">Digital Marketing</a> or <a href="https://templatemo.com/tag/corporate">Corporate</a> HTML CSS templates on our website.</p>
                                <a href="#" class="text-button">Discover More</a>
                            </div>
                        </li>

                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{url('frontend/template/assets/images/survival.jpeg')}}" alt="second one" width="20%" height="20%">
                            </div>
                            <div class="right-content">
                                <h4>SURVIVAL</h4>
                                <p>If you wish to support TemplateMo website via PayPal, please feel free to contact us. We appreciate it a lot.</p>
                                <a href="#" class="text-button">Discover More</a>
                            </div>
                        </li>
                        

                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{url('frontend/template/assets/images/cikalstore.jpeg')}}" alt="gym training" width="20%" height="20%">
                            </div>
                            <div class="right-content">
                                <h4>CIKAL STORE</h4>
                                <p>Suspendisse fringilla et nisi et mattis. Curabitur sed finibus nisi. Integer nibh sapien, vehicula et auctor.</p>
                                <a href="#" class="text-button">Discover More</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
  </section>
   
    <section class="section" id="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">

                    {{-- Waktu Hari --}}
                        <?php
                        function hari_ini(){
                            $hari = "date" ("D");

                            switch($hari){
                                case 'Sun':
                                    $hari_ini = "Minggu";
                                break;
                                case 'Mon':
                                    $hari_ini = "Senin";
                                break;
                                case 'Tue':
                                    $hari_ini = "Selasa";
                                break;
                                case 'Wed':
                                    $hari_ini = "Rabu";
                                break;
                                case 'Thu':
                                    $hari_ini = "Kamis";
                                break;
                                case 'Fri':
                                    $hari_ini = "Jumat";
                                break;
                                case 'Sat':
                                    $hari_ini = "Sabtu";
                                break;

                                default:
                                $hari_ini = "Tidak di ketahui";
                                break;
                            }

                            return "<em>" .$hari_ini. "</em>";
                        }

                        echo "<h2>" .hari_ini(); "</H2>" ?>, 
                        
                        {{-- Waktu Tanggal --}}
                        <?php
                        function tgl_indo($tanggal){
                            $bulan = array(
                                1 => 'Januari',
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

                            //Variabel pecahkan 0 = tanggal
                            //Variabel pecahkan 1 = bulan
                            //Variabel pecahkan 2 = tahun

                            return $pecahkan[2]. ' ' .$bulan[(int)$pecahkan[1]]. ' ' .$pecahkan[0];
                        }

                    
                        echo "<em>" .tgl_indo(date('Y-m-d')); //21 Oktober 2017?>
                        
                            
                        {{--Waktu Jam Indonesia--}}
                        <table align="center">
                            <tr>
                                <td width="20%"><h2 id="jam" ></h2></td>
                                <td width="20%"><h2 id="menit"></h2></td>
                                <td width="20%"><h2 id="detik"></h2></td>
                            </tr>
                        </table>
                       
                        <p>Ut consectetur, metus sit amet aliquet placerat, enim est ultricies ligula, sit amet dapibus odio augue eget libero. Morbi tempus mauris a nisi luctus imperdiet.</p>
                        <div class="main-button scroll-to-section">
                            <a href="#">Presensi Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Our Classes Start ***** -->2
    <section class="section" id="our-classes">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading" >
                        <h2>Berita <em>Mingguan</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
                    </div>
                </div>
            </div>
            <div class="row" id="tabs">
              <div class="col-lg-4">
                <ul>
                  <li><a href='#tabs-1'><img src="{{url('frontend/template/assets/images/tabs-first-icon.png')}}" alt="" width="10%">First Training Class</a></li>
                  <li><a href='#tabs-2'><img src="{{url('frontend/template/assets/images/tabs-first-icon.png')}}" alt="" width="10%">Second Training Class</a></li>
                  <li><a href='#tabs-3'><img src="{{url('frontend/template/assets/images/tabs-first-icon.png')}}" alt="" width="10%">Third Training Class</a></li>
                  <li><a href='#tabs-4'><img src="{{url('frontend/template/assets/images/tabs-first-icon.png')}}" alt="" width="10%">Fourth Training Class</a></li>
                  <div class="main-rounded-button"><a href="#">Komentar lainnya</a></div>
                </ul>
              </div>
              <div class="col-lg-8">
                <section class='tabs-content'>
                  <article id='tabs-1'>
                    <img src="{{url('frontend/template/assets/images/garuda.jpeg')}}" alt="First Class" >
                    <h4>Pramuka Garuda</h4>
                    <p>Phasellus convallis mauris sed elementum vulputate. Donec posuere leo sed dui eleifend hendrerit. Sed suscipit suscipit erat, sed vehicula ligula. Aliquam ut sem fermentum sem tincidunt lacinia gravida aliquam nunc. Morbi quis erat imperdiet, molestie nunc ut, accumsan diam.</p>
                    <div class="main-button">
                        <a href="#">Selengkapnya</a>
                    </div>
                  </article>
                  <article id='tabs-2'>
                    <img src="{{url('frontend/template/assets/images/training-image-02.jpg')}}" alt="Second Training">
                    <h4>Second Training Class</h4>
                    <p>Integer dapibus, est vel dapibus mattis, sem mauris luctus leo, ac pulvinar quam tortor a velit. Praesent ultrices erat ante, in ultricies augue ultricies faucibus. Nam tellus nibh, ullamcorper at mattis non, rhoncus sed massa. Cras quis pulvinar eros. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    <div class="main-button">
                        <a href="#">View Schedule</a>
                    </div>
                  </article>
                  <article id='tabs-3'>
                    <img src="{{url('frontend/template/assets/images/training-image-03.jpg')}}" alt="Third Class">
                    <h4>Third Training Class</h4>
                    <p>Fusce laoreet malesuada rhoncus. Donec ultricies diam tortor, id auctor neque posuere sit amet. Aliquam pharetra, augue vel cursus porta, nisi tortor vulputate sapien, id scelerisque felis magna id felis. Proin neque metus, pellentesque pharetra semper vel, accumsan a neque.</p>
                    <div class="main-button">
                        <a href="#">View Schedule</a>
                    </div>
                  </article>
                  <article id='tabs-4'>
                    <img src="{{url('frontend/template/assets/images/training-image-04.jpg')}}" alt="Fourth Training">
                    <h4>Fourth Training Class</h4>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean ultrices elementum odio ac tempus. Etiam eleifend orci lectus, eget venenatis ipsum commodo et.</p>
                    <div class="main-button">
                        <a href="#">View Schedule</a>
                    </div>
                  </article>
                </section>
              </div>
            </div>
        </div>
    </section>
    <!-- ***** Our Classes End ***** -->
    
    <section class="section" id="schedule">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading dark-bg">
                        <h2><em>Jadwal Kegiatan Pramuka</em></h2>
                        <img src="{{url('frontend/template/assets/images/line-dec.png')}}" alt="">
                        <p>Jadwal kegiatan pramuka kelas VII, VIII dan IX </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="filters">
                        <ul class="schedule-filter">
                            <li class="active" data-tsfilter="monday">Minggu ke-1</li>
                            <li data-tsfilter="tuesday">Minggu ke-2</li>
                            <li data-tsfilter="wednesday">Minggu ke-3</li>
                            <li data-tsfilter="thursday">Minggu ke-4</li>
                            <li data-tsfilter="friday">Minggu ke-5</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-10 offset-lg-1">
                    <div class="schedule-table filtering">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="day-time">Fitness Class</td>
                                    <td class="monday ts-item show" data-tsmeta="monday">10:00AM - 11:30AM</td>
                                    <td class="tuesday ts-item" data-tsmeta="tuesday">2:00PM - 3:30PM</td>
                                    <td>William G. Stewart</td>
                                </tr>
                                <tr>
                                    <td class="day-time">Muscle Training</td>
                                    <td class="friday ts-item" data-tsmeta="friday">10:00AM - 11:30AM</td>
                                    <td class="thursday friday ts-item" data-tsmeta="thursday" data-tsmeta="friday">2:00PM - 3:30PM</td>
                                    <td>Paul D. Newman</td>
                                </tr>
                                <tr>
                                    <td class="day-time">Body Building</td>
                                    <td class="tuesday ts-item" data-tsmeta="tuesday">10:00AM - 11:30AM</td>
                                    <td class="monday ts-item show" data-tsmeta="monday">2:00PM - 3:30PM</td>
                                    <td>Boyd C. Harris</td>
                                </tr>
                                <tr>
                                    <td class="day-time">Yoga Training Class</td>
                                    <td class="wednesday ts-item" data-tsmeta="wednesday">10:00AM - 11:30AM</td>
                                    <td class="friday ts-item" data-tsmeta="friday">2:00PM - 3:30PM</td>
                                    <td>Hector T. Daigle</td>
                                </tr>
                                <tr>
                                    <td class="day-time">Advanced Training</td>
                                    <td class="thursday ts-item" data-tsmeta="thursday">10:00AM - 11:30AM</td>
                                    <td class="wednesday ts-item" data-tsmeta="wednesday">2:00PM - 3:30PM</td>
                                    <td>Bret D. Bowers</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Testimonials Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Pembina <em>Pramuka</em></h2>
                        <img src="{{url('frontend/template/assets/images/line-dec.png')}}" alt="">
                        <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="{{url('frontend/template/assets/images/dj.jpeg')}}" alt="" width="25%" height="25%">
                        </div>
                        <div class="down-content">
                            <span>Pembina Putra</span>
                            <h6>Dwijantoro B.S, S.Pd., M.Pd</h6>
                            <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="{{url('frontend/template/assets/images/nur.jpeg')}}" alt="" width="100%" height="25%">
                        </div>
                        <div class="down-content">
                            <span>Pembina Putri</span>
                            <h6>Nurwakhidah, S.Pd. I</h6>
                            <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-3">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="{{url('frontend/template/assets/images/ang.jpeg')}}" alt="" width="25%" height="25%">
                        </div>
                        <div class="down-content">
                            <span>Pelatih Putra</span>
                            <h6>Angsori, S.Pd</h6>
                            <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="{{url('frontend/template/assets/images/phi.jpeg')}}" alt="" width="25%" height="25%">
                        </div>
                        <div class="down-content">
                            <span>Pelatih Putri</span>
                            <h6>Hafidlotul Rifa'ah, S.Pd</h6>
                            <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan church-key pour-over seitan flannel.</p>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Ends ***** -->
    
    <!-- ***** Contact Us Area Starts ***** -->
    <section class="section" id="contact-us">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-6 col-xs-12">
                    <div id="map">
                      <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="600px" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
               
            </div>
        </div>
    </section>
    <!-- ***** Contact Us Area Ends ***** -->


    <script>
	                    window.setTimeout("waktu()", 1000);
 
	                    function waktu() {
		                var waktu = new Date();
		                setTimeout("waktu()", 1000);
		                document.getElementById("jam").innerHTML = waktu.getHours();
		                document.getElementById("menit").innerHTML = waktu.getMinutes();
		                document.getElementById("detik").innerHTML = waktu.getSeconds();
	                    }
                        </script>




@endsection
