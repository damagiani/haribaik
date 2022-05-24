@extends('layouts.app')
@section('tulisanpages')
<ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
  <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
  <li class="breadcrumb-item text-sm text-white active" aria-current="page">Wariga Belog</li>
</ol>
<h6 class="font-weight-bolder text-white mb-0">Wariga Belog</h6>
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

<div class="card mb-4">
<h2 class="px-4 py-3" style="margin-left: 20px" >Wariga Belog</h2>
<hr class="horizontal gelap mt-0" style="margin-bottom: 30px">
@if (\Session::has('error'))
    <div class="alert alert-danger text-white">
        <ul>
            <li>{!! \Session::get('error') !!}</li>
        </ul>
    </div>
@endif
<form style="margin-left: 30px" action="{{ route('warigabelog.store') }}" method="POST">
    @csrf
        
        <div class="row" style="margin-left: 30px; margin-bottom: 30px">
            <label for="date" class="col-2 col-form-label">Nama</label>
            <div class="col-6" style="margin-bottom: 20px">
                <input type="text" class="form-control" name="nama" value="{{ old('nama') }}"  placeholder="Masukkan Nama Anda" autocomplete="off">
                                
                <!-- error message untuk title -->
                @error('nama')
                    <div class="text-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    
        <div class="row" style="margin-left: 30px; margin-bottom: 30px">
            <label for="date" class="col-2 col-form-label">Tanggal Lahir</label>
            <div class="col-6" style="margin-bottom: 20px">
                <div class="input-group date" id="datepicker">
                  <input type="date" class="form-control" id="date" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}">
    
                </div>
                @error('tanggal_lahir')
                      <div class="text-danger mt-2">
                          {{ $message }}
                      </div>
                  @enderror
              </div>
        </div>

        <div class="row" style="margin-left: 30px; margin-bottom: 30px">
            <label for="date" class="col-2 col-form-label">Hari Pilihan</label>
            <div class="col-6">
              <div class="input-group date" id="datepicker">
                <input type="date" class="form-control"  name="tanggal_pilihan" value="{{ old('tanggal_pilihan') }}">
              </div>
              @error('tanggal_pilihan')
                    <div class="text-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

      <div class="px-4 py-3" style="margin-left: 20px">
      <button type="submit" class="btn btn-primary btn-lg btn-block">
          HASIL
        </button>
      </div>
    </div>

</form>

    
@endsection