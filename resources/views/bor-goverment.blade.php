@extends('layouts.borr-lay')

@section('bor-content')
  <div class="bor-pem mt-3rem container">
    <div class="row">
      <h1 class="ttl-color fw-bold mb-5 text-center">Gedung Milik Pemerintah</h1>
      <div class="col-6 d-flex align-items-center justify-content-center mb-5">
        <div class="overlay"></div>
        <img src="/assets/images/img-gcc.png" alt="GCC" loading="lazy">
        <h5 class="fs-4">GCC</h5>
        <a href="{{ route('bor-goverment') }}/gcc">
          Lihat Detail <i class="bi bi-chevron-right fw-bold"></i>
        </a>
      </div>
      <div class="col-6 d-flex align-items-center justify-content-center mb-5">
        <div class="overlay"></div>
        <img src="/assets/images/img-gor-susanti.png" alt="Gor Susanti" loading="lazy">
        <h5 class="fs-4">Gor Susanti</h5>
        <a href="{{ route('bor-goverment') }}/gor-susanti">
          Lihat Detail <i class="bi bi-chevron-right fw-bold"></i>
        </a>
      </div>
      <div class="col-6 d-flex align-items-center justify-content-center mb-5">
        <div class="overlay"></div>
        <img src="/assets/images/img-stadion.png" alt="Stadion Dadaha" loading="lazy">
        <h5 class="fs-4">Stadion Dadaha</h5>
        <a href="{{ route('bor-goverment') }}/stadion-dadaha">
          Lihat Detail <i class="bi bi-chevron-right fw-bold"></i>
        </a>
      </div>
      <div class="col-6 d-flex align-items-center justify-content-center mb-5">
        <div class="overlay"></div>
        <img src="/assets/images/img-gor-sukapura.png" alt="Gor Sakupura" loading="lazy">
        <h5 class="fs-4">Gor Sukapura</h5>
        <a href="{{ route('bor-goverment') }}/gor-sukapura">
          Lihat Detail <i class="bi bi-chevron-right fw-bold"></i>
        </a>
      </div>
    </div>
  </div>
@endsection
