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
        <a class="nav-link " href="/warigabelog">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Wariga Belog</span>
          </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link active " href="/fengshui">
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
            <img src="{{ URL::asset('assets/img/logowangshui.png ') }}" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
          </div>
        </div>
        <div class="col-auto my-auto">
          <div class="h-100">
            <h5 class="mb-1">
              HASIL PERHITUNGAN
            </h5>
            <p class="mb-0 font-weight-bold text-sm">
              Fengshui
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
    
@endsection


@section('content')

<div class="card mb-4">
<h2 class="px-4 py-3" style="margin-left: 20px" >Ming Kua : {{$fengshuiii->angka_kua}}</h2>
<hr class="horizontal gelap mt-0" style="margin-bottom: 30px">

  <div class="row" style="margin-left: 30px; margin-bottom: 40px">
    <h4 class="px-4 py-3"  ><span class="text-success">Sifat Baik : </span>{{$fengshuiii->sifat_baik}}</h2>
  </div>
  <div class="row" style="margin-left: 30px; margin-bottom: 40px">
    <h4 class="px-4 py-3"  ><span class="text-danger">Sifat Buruk : </span>{{$fengshuiii->sifat_buruk}}</h2>
  </div>
  <h3 class="px-4 py-3" style="margin-left: 20px" >Arah ruang rumah yang baik</h3>
  <hr class="horizontal gelap mt-0" style="margin-bottom: 30px">
  <div class="row" style="margin-left: 30px; margin-bottom: 40px">
    <h5 class="px-2 py-2" style="margin-left: 20px" >- Seng Chi : {{$fengshuiii->sheng_qi}}</h5>
    <h5 class="px-2 py-2" style="margin-left: 20px" >- Tian Yi : {{$fengshuiii->tian_yi}}</h5>
    <h5 class="px-2 py-2" style="margin-left: 20px" >- Nian Yan : {{$fengshuiii->yan_nian}}</h5>
    <h5 class="px-2 py-2" style="margin-left: 20px" >- Fu Wei : {{$fengshuiii->wu_fei}}</h5>
    <h5 class="px-2 py-2" style="margin-left: 20px" >- Ho Hai : {{$fengshuiii->huo_hai}}</h5>
    <h5 class="px-2 py-2" style="margin-left: 20px" >- Wu Gui : {{$fengshuiii->wu_gui}}</h5>
    <h5 class="px-2 py-2" style="margin-left: 20px" >- Liu Sha : {{$fengshuiii->liu_sha}}</h5>
    <h5 class="px-2 py-2" style="margin-left: 20px" >- Cheuh Ming : {{$fengshuiii->jue_ming}}</h5>


  </div>
  <h3 class="px-4 py-3" style="margin-left: 20px" >Penjelasan masing-masing arah ruang</h3>
  <hr class="horizontal gelap mt-0" style="margin-bottom: 30px">
  <div class="row" style="margin-left: 30px; margin-bottom: 40px; margin-right:50px">
    <h5 class="px-2 py-2" style="margin-left: 20px" ><span class="text-success">- Seng Chi </span>: berarti menciptakan napas naga dan kekayaan.
        Peruntukan lokasi atau sudut Seng Chi di Lokasi pintu utama, Kamar tidur utama</h5>
    <h5 class="px-2 py-2" style="margin-left: 20px" ><span class="text-success">- Tian Yi </span>: berarti pertolongan dan kesehatan.
        Peruntukan lokasi atau sudut Tian Yi di Lokasi pintu utama, Lokasi pintu ke dua, Kamar tidur utama, Kamar tidur lainnya</h5>
    <h5 class="px-2 py-2" style="margin-left: 20px" ><span class="text-success">- Nian Yan </span>: berarti umur panjang dan keharmonisan, percintaan pribadi
        Peruntukan lokasi atau sudut Nian Yan : Lokasi pintu utama, Lokasi pintu ke dua, Kamar tidur utama, Kamar tidur lainnya</h5>
    <h5 class="px-2 py-2" style="margin-left: 20px" ><span class="text-success">- Fu Wei </span>: berarti langgeng selamanya, pertumbuhan pribadi
        Peruntukan lokasi atau sudut Fu Wei : Lokasi pintu utama, Lokasi pintu ke dua, Kamar tidur utama, Kamar tidur lainnya, Lokasi ruang kerja, ruang belajar dan perpustakaan</h5>
    <h5 class="px-2 py-2" style="margin-left: 20px" ><span class="text-success">- Ho Hai </span>: bernasib buruk
        Penggunaan sektor ini sebaiknya untuk: Halaman atau taman di mana kita tidak terlalu sering di sana, Gudang, Kamar mandi, Atau tempat yang jarang dipakai duduk atau tinggal berlama-lama di sana sehingga efek chi buruk tidak terlalu berpengaruh kepada kita</h5>    
    <h5 class="px-2 py-2" style="margin-left: 20px" ><span class="text-success">- Wu Gui </span>: keuangan merosot dan musibah.
        Penggunaan sektor ini sebaiknya untuk: Halaman atau taman di mana kita tidak terlalu sering di sana, Gudang, Kamar mandi, Dapur, Atau tempat yang jarang dipakai duduk atau tinggal berlama-lama di sana sehingga efek chi buruk tidak terlalu berpengaruh kepada kita</h5>
    <h5 class="px-2 py-2" style="margin-left: 20px" ><span class="text-success">- Liu Sha </span>: sakit parah dan masalah hukum
        Penggunaan sektor ini sebaiknya untuk: Halaman atau taman di mana kita tidak terlalu sering di sana, Kamar mandi untuk menekan chi buruk, Atau tempat yang jarang dipakai duduk atau tinggal berlama-lama di sana sehingga efek chi buruk tidak terlalu berpengaruh kepada kita</h5>
    <h5 class="px-2 py-2" style="margin-left: 20px" ><span class="text-success">- Cheuh Ming </span>: mega kemalangan dan kehilangan total
        Cheuh Ming adalah arah dan lokasi terburuk dari ke semua arah buruk tadi. Cheuh Ming sering disebut-sebut sebagai Kehilangan Total, Karena begitu mematikan dan bahaya yang sangat fatal, Master dan Akhli Feng Shui menyarankan untuk menghindari sama sekali tempat ini.</h5>
  </div>
  <h3 class="px-4 py-3" style="margin-left: 20px" >Hari Baik Pindah Rumah</h3>
  <hr class="horizontal gelap mt-0" style="margin-bottom: 30px">
  <div class="row" style="margin-left: 30px; margin-bottom: 40px">
    <h5 class="px-2 py-2" style="margin-left: 20px" >Hindari pindah rumah pada bulan {{$shiooo->bulankonflik}}</h5>
  </div>
  <h3 class="px-4 py-3" style="margin-left: 20px" >Hari Baik Memulai Bisnis</h3>
  <hr class="horizontal gelap mt-0" style="margin-bottom: 30px">
  <div class="row" style="margin-left: 30px; margin-bottom: 40px">
    <h5 class="px-2 py-2" style="margin-left: 20px" >Tanggal baik memulai bisnis adalah tanggal 4, 10, 16, 22, dan 28</h5>
  </div>
  <h3 class="px-4 py-3" style="margin-left: 20px" >Hari Baik Memotong Rambut</h3>
  <hr class="horizontal gelap mt-0" style="margin-bottom: 30px">
  <div class="row" style="margin-left: 30px; margin-bottom: 40px">
    <h5 class="px-2 py-2" style="margin-left: 20px" >Tanggal baik untuk memotong rambut adalah 1, 3, 4, 6, 7, 8, 15, 16, 24, 26, 29, dan 30</h5>
  </div>

  <div class="px-4 py-3" style="margin-left: 20px">
    <a href="{{ route('fengshui') }}" class="btn btn-md btn-warning mb-3">KEMBALI</a>
    </div>

</div>

    
@endsection