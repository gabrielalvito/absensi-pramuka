<style>
	h1,h2,p,a{
		font-family: sans-serif;
		font-weight: normal;
	}
 
	.jam-digital-malasngoding {
		overflow: hidden;
		width: 150px;
		margin: 20px auto;
		border: 1px solid #efefef;
	}
	.kotak{
		float: left;
		width: 60px;
		height: 60px;
		background-color: #189fff;
	}
	.jam-digital-malasngoding p {
		color: #fff;
		font-size: 36px;
		text-align: center;
		margin-top: 3px;
        align-items: center;
	}
    .date p {
		color: #fff;
		font-size: 14px;
		text-align: right;
	}
 
 
</style>

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('/admin')}}">
    <div class="sidebar-brand-icon rotate-n-15">
        {{-- <img width="70%" src="{{asset('/assets/img/cikal.png')}}" alt=""></img> --}}
        <!-- <i class="fas fa-laugh-wink"></i> -->
    </div>
    <div class="sidebar-brand-text mx-3">SIPPRA</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

 <hr class="sidebar-divider">
<!-- Heading -->
<div class="sidebar-heading">
    Menu Navigasi
</div>
<br>
<hr class="sidebar-divider my-0">

<li class="nav-item active">
    <a class="nav-link" href="{{url('user')}}">
        <i class="fas fa-fw fa-home"></i>
        <span>Dashboard</span></a>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-coins"></i>
        <span>Master Data</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{url('pembina')}}">Data Pembina</a>
            <a class="collapse-item" href="{{url('siswa')}}">Data Siswa</a>
            <a class="collapse-item" href="{{url('siswa')}}">Data Siswa</a>
            <a class="collapse-item" href="{{url('regu')}}">Data Regu</a>
        </div>
    </div>
</li>

<!-- Nav Item - Utilities Collapse Menu -->

<li class="nav-item">
    <a class="nav-link" href="{{url('presensi')}}">
        <i class="fas fa-fw fa-clipboard-list"></i>
        <span>Presensi</span></a>
</li>


<!-- Nav Item - Charts -->

{{-- <li class="nav-item">
    <a class="nav-link" href="{{url('jadwal')}}">
        <i class="fas fa-fw fa-table"></i>
        <span>Jadwal</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{url('berita')}}">
        <i class="fas fa-fw fa-tasks"></i>
        <span>Berita</span></a>
</li> --}}

<!-- Nav Item - Tables -->
<li class="nav-item">
    <a class="nav-link" href="{{url('rekap')}}">
        <i class="fas fa-fw fa-archive"></i>
        <span>Rekap presensi</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">
<!-- <table align="center">
    <tr>
        <td align="center">
            <div class="kotak jam-digital-malasngoding">
            <p id="jam"></p>
            </div>
        </td>
        <td align="center">
            <div class="kotak jam-digital-malasngoding">
            <p id="menit"></p>
            </div>
        </td>
        <td align="center">
            <div class="kotak jam-digital-malasngoding">
            <p id="detik"></p>
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="3" class="date">
                <p>
                <?php 
                echo date ('d F Y');
                 ?>
                </p>
        </td>
    </tr>
</table> -->
<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>


</ul>
<!-- End of Sidebar -->

<!-- <script>
	window.setTimeout("waktu()", 1000);
 
	function waktu() {
		var waktu = new Date();
		setTimeout("waktu()", 1000);
		document.getElementById("jam").innerHTML = waktu.getHours();
		document.getElementById("menit").innerHTML = waktu.getMinutes();
		document.getElementById("detik").innerHTML = waktu.getSeconds();
	}
</script> -->