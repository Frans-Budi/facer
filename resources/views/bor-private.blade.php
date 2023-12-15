@extends('layouts.borr-lay')

@section('bor-content')
  <div class="bor-pem mt-3rem container">
    <div class="row">
      <h1 class="ttl-color fw-bold mb-5 text-center">Gedung Milik Pemerintah</h1>
      <div class="col-6 d-flex align-items-center justify-content-center mb-5">
        <div class="overlay"></div>
        <img src="/assets/images/img-taman-sari.png" alt="Lapangan Taman Sari" loading="lazy">
        <h5 class="fs-4">Lapangan Taman Sari</h5>
        <a href="{{ route('bor-private') }}/lapangan-taman-sari">
          Lihat Detail <i class="bi bi-chevron-right fw-bold"></i>
        </a>
      </div>
      <div class="col-6 d-flex align-items-center justify-content-center mb-5">
        <div class="overlay"></div>
        <img src="/assets/images/img-futsal-bkr.png" alt="Lapangan Futsal BKR" loading="lazy">
        <h5 class="fs-4">Lapangan Futsal BKR</h5>
        <a href="{{ route('bor-private') }}/lapangan-futsal-bkr">
          Lihat Detail <i class="bi bi-chevron-right fw-bold"></i>
        </a>
      </div>
      <div class="col-6 d-flex align-items-center justify-content-center mb-5">
        <div class="overlay"></div>
        <img src="/assets/images/img-harmoni.png" alt="Lapangan Harmoni" loading="lazy">
        <h5 class="fs-4">Lapangan Harmoni</h5>
        <a href="{{ route('bor-private') }}/lapangan-harmoni">
          Lihat Detail <i class="bi bi-chevron-right fw-bold"></i>
        </a>
      </div>
      <div class="col-6 d-flex align-items-center justify-content-center mb-5">
        <div class="overlay"></div>
        <img src="/assets/images/img-mayasari.png" alt="Lapangan Mayasari" loading="lazy">
        <h5 class="fs-4">Lapangan Mayasari</h5>
        <a href="{{ route('bor-private') }}/lapangan-mayasari">
          Lihat Detail <i class="bi bi-chevron-right fw-bold"></i>
        </a>
      </div>
    </div>
  </div>
@endsection
