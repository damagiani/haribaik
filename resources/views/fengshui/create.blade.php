@extends('layouts.appold')
@section('tulisanpages')
<ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
  <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
  <li class="breadcrumb-item text-sm text-white active" aria-current="page">Fengshui</li>
</ol>
<h6 class="font-weight-bolder text-white mb-0">Fengshui</h6>
@endsection
@section('backgroundheader')
<div class="position-absolute w-100 min-height-300 top-0" style="background-image: url('{{ URL::asset('assets/img/headchina.jpg') }}'); background-position-y: 50%;">
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
    <li class="nav-item">
        <a class="nav-link " href="../warigabelog">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Wariga Belog</span>
          </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link active " href="../fengshui">
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
@if (\Session::has('error'))
    <div class="alert alert-danger text-white">
        <ul>
            <li>{!! \Session::get('error') !!}</li>
        </ul>
    </div>
@endif
<form style="margin-left: 30px" action="{{ route('fengshui.store') }}" method="POST">
    @csrf
        
        <div class="row" style="margin-left: 30px; margin-bottom: 30px">
            <label for="date" class="col-2 col-form-label">Nama</label>
            <div class="col-6" style="margin-bottom: 20px">
                <input type="text" class="form-control" name="nama" value="{{ Auth::user()->name }}"  readonly>
                                
                <!-- error message untuk title -->
                @error('nama')
                    <div class="text-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

        <div class="row" style="margin-left: 30px; margin-bottom: 30px">
            <label for="date" class="col-2 col-form-label">Jenis Kelamin</label>
            <div class="col-6" style="margin-bottom: 20px">
                <select name="jeniskelamin" class="form-control">
                    <option disabled selected>- Pilih -</option>
                    <option value="Laki-Laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>              
                <!-- error message untuk title -->
                @error('jeniskelamin')
                    <div class="text-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="row" style="margin-left: 30px; margin-bottom: 30px">
            <label for="date" class="col-2 col-form-label">Tahun Lahir</label>
            <div class="col-6" style="margin-bottom: 20px">
                <input type="text" class="form-control" name="tahunlahir" value="{{ old('tempatlahir') }}"  placeholder="Masukkan Tahun Lahir Anda" autocomplete="off">
                                
                <!-- error message untuk title -->
                @error('tahunlahir')
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