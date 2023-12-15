@extends('layouts.borr-lay')

@section('bor-content')
  <div class="container mt-6rem min-vh-100">
    <div class="row">
      <h1 class="ttl-color fw-bold text-center">Peminjaman Gedung</h1>
      <p class="fs-5 mb-5 mt-2 text-center">
        Gedung yang dapat dipinjamkan untuk publik di Tasikmalaya <br />
        dimiliki oleh 2 pihak, yaitu pemerintah dan swasta.
      </p>
      <div class="col text-center">
        <h3 class="fw-semibold mb-3">Pemerintah</h3>
        <a href="{{ route('bor-goverment') }}">
          <img src="/assets/images/img-pemerintah.png" class="bor-img shadow-lg" width="400" alt="Pemerintah"
            loading="lazy">
        </a>
      </div>
      <div class="col text-center">
        <h3 class="fw-semibold mb-3">Swasta</h3>
        <a href="{{ route('bor-private') }}">
          <img src="/assets/images/img-swasta.png" class="bor-img shadow-lg" width="400" alt="Pemerintah"
            loading="lazy">
        </a>
      </div>
    </div>
  </div>
@endsection
