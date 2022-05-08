@extends('layouts.app')

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
    <li class="nav-item active">
        <a class="nav-link active" href="../warigabelog">
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

<h2 class="px-4 py-3" >Wariga</h2>
<form>
  <div class="px-4 py-3">
    <label for="tanggal_lahir" class="col-sm-2 col-form-label" >
      Tanggal Lahir
    </label>
    <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form_control">
  </div>
  <div class="px-4 py-3">
    <label for="tanggal_baik" class="col-sm-2 col-form-label" >
      Tanggal Hari Baik
    </label>
    <input type="date" name="tanggal_baik" id="tanggal_baik" class="form_control">
  </div>
  <div class="px-4 py-3">
  <button type="button" class="btn btn-primary btn-lg btn-block">
      NEXT
    </button>
  </div>
</form>


    
@endsection