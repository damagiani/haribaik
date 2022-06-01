@extends('layouts.appold')

@section('head')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> --}}
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
@endsection

@section('tulisanpages')
<ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
  <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
  <li class="breadcrumb-item text-sm text-white active" aria-current="page">Dashboard</li>
</ol>
<h6 class="font-weight-bolder text-white mb-0">Dashboard</h6>
@endsection

@section('backgroundheader')
<div class="min-height-300 bg-primary position-absolute w-100"></div>
@endsection

@section('active')
<ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link active" href="/home">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
          <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
        </div>
        <span class="nav-link-text ms-1">About</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="../warigabelog">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
          <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
        </div>
        <span class="nav-link-text ms-1">Wariga Belog</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="../fengshui">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
          <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
        </div>
        <span class="nav-link-text ms-1">Fengshui</span>
      </a>
    </li>
  </ul>
@endsection
 

@section('content')
<div class="card card-carousel overflow-hidden h-100 p-0">
  <div id="carouselExampleIndicators" class="carousel slide h-100" data-bs-ride="carousel" >
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner border-radius-lg h-100" >
      <div class="carousel-item">
        <img src="../assets/img/China3.jpg" class="img-fluid" alt="" >
        <div class="carousel-caption d-none d-md-block" style="margin-bottom: 120px; ">
          <h1  style="color: white; height:60px;">Aplikasi WangShui</h1>
        <h5 style="color: white"><span style="color: #FFCC00">WangShui </span> adalah aplikasi yang digunakan untuk melakukan perhitungan wariga belog dan fengshui</h5>
      </div>
      </div>
      <div class="carousel-item active">
        <img src="../assets/img/Dashboard1.jpg" class="img-fluid" alt="" >
        <div class="carousel-caption d-none d-md-block" style="margin-bottom: 90px; ">
            <h1  style="color: white; height:60px;">Fengshui</h1>
          <h5 style="color: white"><span style="color: #FFCC00">Fengshui</span> merupakan adalah ilmu topografi kuno dari Cina yang mengatur penataan bangunan, ruang dan benda</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../assets/img/Bali2.jpg" class="img-fluid" alt="" >
        <div class="carousel-caption d-none d-md-block" style="margin-bottom: 90px; ">
          <h1  style="color: white; height:60px;">Wariga Belog</h1>
        <h5 style="color: white">Wariga Belog atau <span style="color: #FFCC00">Behavior Environtmental Logos</span> merupakan salah satu konsep perhitungan hari baik berdasarkan perhitungan urip alam dan individu</h5>
      </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

@endsection
