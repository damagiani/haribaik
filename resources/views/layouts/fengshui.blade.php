@extends('layouts.app')

@section('tulisanpages')
<ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
  <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
  <li class="breadcrumb-item text-sm text-white active" aria-current="page">Fengshui</li>
</ol>
<h6 class="font-weight-bolder text-white mb-0">Fengshui</h6>
@endsection

@section('active')

<ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="../">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
          <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
        </div>
        <span class="nav-link-text ms-1">Dashboard</span>
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
        <a class="nav-link active" href="../fengshui">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Fengshui</span>
          </a>
    </li>
  </ul>
@endsection

@section('content')
<div class="card mb-4">
  <h2 class="px-4 py-3" style="margin-left: 20px" >Fengshui</h2>
  <hr class="horizontal gelap mt-0" style="margin-bottom: 30px">
  
    <form class="row" style="margin-left: 30px; margin-bottom: 40px">
      <label for="date" class="col-2 col-form-label">Tanggal Lahir</label>
      <div class="col-5">
        <div class="input-group date" id="datepicker">
          <input type="date" class="form-control" id="date"/>
        </div>
      </div>
    </form>
    <form class="row" style="margin-left: 30px; margin-bottom: 30px">
      <label for="date" class="col-2 col-form-label">Hari Pilihan</label>
      <div class="col-5">
        <div class="input-group date" id="datepicker">
          <input type="date" class="form-control" id="date"/>
        </div>
      </div>
    </form>
    <div class="px-4 py-3" style="margin-left: 20px">
    <button type="button" class="btn btn-primary btn-lg btn-block">
        HASIL
      </button>
    </div>
  </div>
</div>
    
@endsection