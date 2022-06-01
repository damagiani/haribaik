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
    <li class="nav-item ">
        <a class="nav-link" href="../warigabelog">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Wariga Belog</span>
          </a>
    </li>
    <li class="nav-item">
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
<h4 class="px-4 py-3" style="margin-left: 15px" >Riwayat Perhitungan</h4>


<div class="card-body">
    <a href="{{ route('fengshui.create') }}" class="btn btn-md btn-success mb-3">TAMBAH PERHITUNGAN</a>
    <div class="table-responsive">
      <table class="table align-items-center mb-0" id="riwayatfengshui">
        <thead>
          <tr>
            <th scope="col">JENIS KELAMIN</th>
            <th scope="col">TAHUN LAHIR</th>
            <th class="text-center" scope="col">AKSI</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($fengshuis as $fengshui)
              <tr>
                  <td>{{ $fengshui->jeniskelamin }}</td>
                  <td>{{ $fengshui->tahun_lahir }}</td>
                  <td class="text-center">
                      <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('fengshui.delete', $fengshui->id) }}" method="POST">
                          <a href="{{ route('fengshui.result', $fengshui->id) }}" class="btn btn-sm btn-primary">HASIL</a>
                          @csrf
                          @method('POST')
                          <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                      </form>
                  </td>
              </tr>
            @empty
                <div class="alert alert-danger">
                    Riwayat Belum Tersedia.
                </div>
            @endforelse
          </tbody>
      </table>  
    </div>
    
      {{ $fengshuis->links() }}
</div>
</div>

    
@endsection


    
