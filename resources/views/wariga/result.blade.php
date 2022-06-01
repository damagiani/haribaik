@extends('layouts.appold')
@section('tulisanpages')
<ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
  <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
  <li class="breadcrumb-item text-sm text-white active" aria-current="page">Wariga Belog</li>
</ol>
<h6 class="font-weight-bolder text-white mb-0">Wariga Belog</h6>
@endsection
@section('backgroundheader')
<div class="position-absolute w-100 min-height-300 top-0" style="background-image: url('{{ URL::asset('assets/img/headbali.jpg') }}'); background-position-y: 50%;">
  <span class="mask bg-primary opacity-6"></span>
</div>
@endsection

@section('active')
<ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="/home">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
          <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
        </div>
        <span class="nav-link-text ms-1">About</span>
      </a>
    </li>
    <li class="nav-item active">
        <a class="nav-link active" href="/warigabelog">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Wariga Belog</span>
          </a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="/fengshui">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
          <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
        </div>
        <span class="nav-link-text ms-1">Fengshui</span>
      </a>
    </li>
  </ul>
@endsection

@section('dauh')
<div class="card shadow-lg mx-1">
  <div class="card-body p-3">
    <div class="row gx-4">
      <div class="col-auto">
        <div class="avatar avatar-xl position-relative">
          <img src="{{ URL::asset('assets/img/day-and-night.png ') }}" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
        </div>
      </div>
      <div class="col-auto my-auto">
        <div class="h-100">
          <h5 class="mb-1">
            HASIL PERHITUNGAN
          </h5>
          <p class="mb-0 font-weight-bold text-sm">
            Dauh (Waktu) & Wariga Belog
          </p>
          {{-- darkmode --}}
          {{-- <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-2 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div> --}}
        </div>
      </div>
    </div>
  </div>
  </div>
<div class="row mt-4">
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-uppercase font-weight-bold">05.30 - 07.45</p>
              <h5 class="font-weight-bolder">
                SIANG
              </h5>
              <p class="mb-0">
                {{$dauh->siang_a}}
              </p>
            </div>
          </div>
          <div class="col-4 text-end">
              <img src="{{ URL::asset('assets/img/cloudy-day.png ') }}" class="icon icon-shape rounded-circle" alt="dauh">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-uppercase font-weight-bold">07.45 - 10.18</p>
              <h5 class="font-weight-bolder">
                SIANG
              </h5>
              <p class="mb-0">
                {{$dauh->siang_b}}
              </p>
            </div>
          </div>
          <div class="col-4 text-end">
            <img src="{{ URL::asset('assets/img/cloudy-day.png ') }}" class="icon icon-shape rounded-circle" alt="dauh">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-uppercase font-weight-bold">10.18 - 12.42</p>
              <h5 class="font-weight-bolder">
                SIANG
              </h5>
              <p class="mb-0">
                {{$dauh->siang_c}}
              </p>
            </div>
          </div>
          <div class="col-4 text-end">
            <img src="{{ URL::asset('assets/img/cloudy-day.png ') }}" class="icon icon-shape rounded-circle" alt="dauh">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-uppercase font-weight-bold">12.42 - 15.06</p>
              <h5 class="font-weight-bolder">
                SIANG
              </h5>
              <p class="mb-0">
                {{$dauh->siang_d}}
              </p>
            </div>
          </div>
          <div class="col-4 text-end">
            <img src="{{ URL::asset('assets/img/cloudy-day.png ') }}" class="icon icon-shape rounded-circle" alt="dauh">

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row mt-4">
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-uppercase font-weight-bold">15.06 - 17.30 </p>
              <h5 class="font-weight-bolder">
                SIANG
              </h5>
              <p class="mb-0">
                {{$dauh->siang_e}}
              </p>
            </div>
          </div>
          <div class="col-4 text-end">
            <img src="{{ URL::asset('assets/img/cloudy-day.png ') }}" class="icon icon-shape rounded-circle" alt="dauh">

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-uppercase font-weight-bold">17.30 - 19.45</p>
              <h5 class="font-weight-bolder">
                MALAM
              </h5>
              <p class="mb-0">
                {{$dauh->malam_a}}
              </p>
            </div>
          </div>
          <div class="col-4 text-end">
            <img src="{{ URL::asset('assets/img/cloudy-night.png ') }}" class="icon icon-shape rounded-circle" alt="dauh">

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-uppercase font-weight-bold">19.45 - 22.18</p>
              <h5 class="font-weight-bolder">
                MALAM
              </h5>
              <p class="mb-0">
                {{$dauh->malam_b}}
              </p>
            </div>
          </div>
          <div class="col-4 text-end">
            <img src="{{ URL::asset('assets/img/cloudy-night.png ') }}" class="icon icon-shape rounded-circle" alt="dauh">

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-uppercase font-weight-bold">22.18 - 24.42</p>
              <h5 class="font-weight-bolder">
                MALAM
              </h5>
              <p class="mb-0">
                {{$dauh->malam_c}}
              </p>
            </div>
          </div>
          <div class="col-4 text-end">
            <img src="{{ URL::asset('assets/img/cloudy-night.png ') }}" class="icon icon-shape rounded-circle" alt="dauh">

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row mt-4">
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-uppercase font-weight-bold">24.42 - 03.06</p>
              <h5 class="font-weight-bolder">
                MALAM
              </h5>
              <p class="mb-0">
                {{$dauh->malam_d}}
              </p>
            </div>
          </div>
          <div class="col-4 text-end">
            <img src="{{ URL::asset('assets/img/cloudy-night.png ') }}" class="icon icon-shape rounded-circle" alt="dauh">

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-uppercase font-weight-bold">03.06 - 05.30</p>
              <h5 class="font-weight-bolder">
                MALAM
              </h5>
              <p class="mb-0">
                {{$dauh->malam_e}}
              </p>
            </div>
          </div>
          <div class="col-4 text-end">
            <img src="{{ URL::asset('assets/img/cloudy-night.png ') }}" class="icon icon-shape rounded-circle" alt="dauh">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 mt-1">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
            <div class="numbers">
              <h5 class="font-weight-bolder">
                <span class="text-success">Catatan :</span>
              </h5>
              <hr class="horizontal gelap mt-0" style="margin-bottom: 10px">
              <p class="mb-0">
                Waktu yang disajikan menunjukan dari waktu-waktu yang baik di hari yang telah dipilih
              </p>
            </div>
          
        </div>
      </div>
    </div>
  </div>
</div>

    
@endsection



@section('content')

<div class="card mb-4">
<h2 class="px-4 py-3" style="margin-left: 20px" >{{$hari_baik->bagian}}</h2>
<hr class="horizontal gelap mt-0" style="margin-bottom: 30px">

  <div class="row" style="margin-left: 30px; margin-bottom: 40px; margin-right:40px;">
    <h4 class="px-4 py-3" style="margin-left: 20px; margin-right:40px;" >{{$hari_baik->deskripsi}}</h2>
  </div>
  <h3 class="px-4 py-3" style="margin-left: 20px" >Pangarasan (Sifat)</h3>
  <hr class="horizontal gelap mt-0" style="margin-bottom: 30px">
  <div class="row" style="margin-left: 30px; margin-bottom: 40px">
    <h5 class="px-4 py-3" style="margin-left: 20px" >{{$pangarasancek->sifat}}</h5>
  </div>
  <h3 class="px-4 py-3" style="margin-left: 20px" >Pancasudha (Sifat)</h3>
  <hr class="horizontal gelap mt-0" style="margin-bottom: 30px">
  <div class="row" style="margin-left: 30px; margin-bottom: 40px">
    <h5 class="px-4 py-3" style="margin-left: 20px" >{{$pancasudhacek->sifat}}</h5>
  </div>
  <h3 class="px-4 py-3" style="margin-left: 20px" >Keputusan untuk bepergian</h3>
  <hr class="horizontal gelap mt-0" style="margin-bottom: 30px">
  <div class="row" style="margin-left: 30px; margin-bottom: 40px">
    <h5 class="px-4 py-3" style="margin-left: 20px" >{{$berpergiancek->keterangan}}</h5>
  </div>
  <h3 class="px-4 py-3" style="margin-left: 20px" >Sandang Pangan</h3>
  <hr class="horizontal gelap mt-0" style="margin-bottom: 30px">
  <div class="row" style="margin-left: 30px; margin-bottom: 40px">
    @foreach ($sandangpangancek as $sandangpangan)
      <h5 class="px-4 py-3" style="margin-left: 20px" ><span class="text-success">Umur {{$sandangpangan->dari_umur}}-{{$sandangpangan->sampai_umur}} </span> : {{$sandangpangan->keterangan}}</h5>
    @endforeach
  </div>

  <div class="px-4 py-3" style="margin-left: 20px">
    <a href="{{ route('warigabelog') }}" class="btn btn-md btn-warning mb-3">KEMBALI</a>
    </div>

</div>

    
@endsection