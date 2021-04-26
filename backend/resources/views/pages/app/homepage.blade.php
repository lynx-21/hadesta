@extends('layouts.app')

@section('title', 'Selamat Datang di Hadesta!')

@section('content')
@include('partials.app.swal2.failed_login')
@include('partials.app.swal2.logout')
<div class="container text-center">
    <img src="{{ asset('app/img/logo.png') }}" class="img-fluid sizing-logo" alt="logo">
</div>

<div class="kotak">
  <div class="container p-5">
    <div class="row">
      <div class="col-lg-6 text-center">
        <img src="{{ asset('app/img/computer.png') }}" width="30%" class="img-fluid m-4" alt="">
        <img src="{{ asset('app/img/disscuss.png') }}" width="30%" class="img-fluid m-4" alt="">
        <img src="{{ asset('app/img/study.png') }}" width="30%" class="img-fluid m-4" alt="">
        <img src="{{ asset('app/img/kyboard.png') }}" width="30%" class="img-fluid m-4" alt=""> 
      </div>
      <div class="col-lg-6">
          <h1>Join With Us</h1>
          <h3><em>Buat <span>Codinganmu</span> Penuh <span>Warna</span> !!!</em></h3>
          <br>
          <div class="paragraf border-top pt-3">
            <p>Tempat para <strong>Programmer</strong> dan juga bagi kalian yang ingin belajar cara membuat program, website, dll. </p>
            <p>Disini kami menyediakan fitur fitur untuk kalian seperti membuat artikel, berdiskusi, dan juga tutorial tutorial yang kami sediakan.</p>
          </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid kondua pt-4 pb-4">
  <div class="container">
    <div class="row">
      <div class="col">
        <p class="fs-5">Apa yang ingin dipelajari ?</p>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <a href="javascript:;" class="dev">
        <div class="card hover-card">
          <img src="{{ asset('app/img/CI.png') }}" class="card-img-top" alt="CodeIgniter">
          <div class="card-body">
            <h5 class="card-title">CodeIgniter</h5>
          </div>
        </div>
      </a>
      </div>
      <div class="col-md-3">
        <a href="javascript:;" class="dev">
        <div class="card hover-card">
          <img src="{{ asset('app/img/laravel.png') }}" class="card-img-top" alt="Laravel">
          <div class="card-body">
            <h5 class="card-title">Laravel</h5>
          </div>
        </div>
        </a>
      </div>
      <div class="col-md-3">
        <a href="javascript:;" class="dev">
        <div class="card hover-card">
          <img src="{{ asset('app/img/bootstrap.png') }}" class="card-img-top" alt="bootstrap">
          <div class="card-body">
            <h5 class="card-title">Bootstrap</h5>
          </div>
        </div>
        </a>
      </div>
      <div class="col-md-3">
        <a href="javascript:;" class="dev">
        <div class="card hover-card">
          <img src="{{ asset('app/img/css.png') }}" class="card-img-top" alt="css">
          <div class="card-body">
            <h5 class="card-title">CSS</h5>
          </div>
        </div>
        </a>
      </div>
    </div>
  </div>
</div>

<div class="container pt-5 pb-5 my-5 kontiga border shadow-sm">

  <div class="row justify-content-around">
    <div class="col-lg-4">
      <div class="card p-2 m-auto" style="width: 23rem;">
        <div class="card-body">
          <h5 class="card-title border-bottom pb-2">Apa saja yang dipelajari di Hadesta?</h5>
          <p class="card-text">Mulai dari Web Development hingga Mobile Development</p>
        </div>
      </div>
    </div>
    <div class="col-lg-2 text-center align-self-center">
      <div class="circle-qna m-auto">
      </div>
    </div>
    <div class="col-lg-4 text-end">
    </div>
  </div>


  <div class="row justify-content-around">
    <div class="col-md-4">
    </div>
    <div class="col-lg-2 text-center align-self-center">
      <div class="circle-qna m-auto">
      </div>
    </div>
    <div class="col-lg-4 text-end">
      <div class="card p-2 m-auto" style="width: 23rem;">
        <div class="card-body">
          <h5 class="card-title border-bottom pb-2">Apa saja yang dibahas dalam Diskusi?</h5>
          <p class="card-text">Kalian bisa diskusi tentang apapun, Namun web development dan Mobile Development lebih diutamakan</p>
        </div>
      </div>
    </div>
  </div>

  <div class="row justify-content-around">
    <div class="col-lg-4">
      <div class="card p-2 m-auto" style="width: 23rem;">
        <div class="card-body">
          <h5 class="card-title border-bottom pb-2">Apa yang kita dapat dari Hadesta?</h5>
          <p class="card-text">Tidak hanya belajar, tentunya kita akan mendapatkan teman baru dan relasi yang banyak</p>
        </div>
      </div>
    </div>
    <div class="col-lg-2 text-center align-self-center">
      <div class="circle-qna m-auto">
      </div>
    </div>
    <div class="col-lg-4 text-end">
    </div>
  </div>

  <div class="row justify-content-around">
    <div class="col-lg-4">
    </div>
    <div class="col-lg-2 text-center align-self-center">
      <div class="circle-qna m-auto">
      </div>
    </div>
    <div class="col-lg-4 text-end">
      <div class="card p-2 m-auto" style="width: 23rem;">
        <div class="card-body">
          <h5 class="card-title border-bottom pb-2">Kegiatan apa yang diadakan Hadesta?</h5>
          <p class="card-text">Live Ngobar(ngoding bareng) secara online, bisa juga Ngobar di cafe atau tempat lain nya</p>
        </div>
      </div>
    </div>
  </div>

  <div class="row justify-content-around">
    <div class="col-lg-4">
      <div class="card p-2 m-auto" style="width: 23rem;">
        <div class="card-body">
          <h5 class="card-title border-bottom pb-2">Apakah bergabung dengan Hadesta itu gratis</h5>
          <p class="card-text">Gratis tanpa dipungut biaya</p>
        </div>
      </div>
    </div>
    <div class="col-lg-2 text-center align-self-center">
      <div class="circle-qna m-auto">
      </div>
    </div>
    <div class="col-lg-4 text-end">
    </div>
  </div>
</div>
@endsection