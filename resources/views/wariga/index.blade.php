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
<h4 class="px-4 py-3" style="margin-left: 15px" >Riwayat Perhitungan</h4>


<div class="card-body">
    <a href="{{ route('warigabelog.create') }}" class="btn btn-md btn-success mb-3">TAMBAH PERHITUNGAN</a>
    <div class="table-responsive">
      <table class="table align-items-center mb-0">
        <thead>
          <tr>
            <th scope="col">NAMA</th>
            <th scope="col">TANGGAL LAHIR</th>
            <th scope="col">TANGGAL PILIHAN</th>
            <th class="text-center" scope="col">AKSI</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($warigas as $wariga)
              <tr>
                  <td>{{ $wariga->nama}}</td>
                  <td>{{ $wariga->tanggal_lahir }}</td>
                  <td>{{ $wariga->tanggal_pilihan }}</td>
                  <td class="text-center">
                      <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('warigabelog.delete', $wariga->id) }}" method="POST">
                          <a href="{{ route('warigabelog.result', $wariga->id) }}" class="btn btn-sm btn-primary">HASIL</a>
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
    
      {{ $warigas->links() }}
</div>
</div>

    
@endsection