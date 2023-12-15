@extends('layouts.app')

@section('content')
  <div class="row pe-0">
    <div class="col-md-10 px-0">
      {{-- Navbar --}}
      @include('includes.navbar', ['title' => 'Beranda'])
      {{-- Content --}}
      <div class="cn-hero container">
        {{-- Hero --}}
        <div class="row align-items-center px-4">
          {{-- Description --}}
          <div class="col">
            <h1 class="fw-bold ttl-color fs-lg-ttl mb-4">Selamat Datang di Facer!</h1>
            <p class="fs-4 text-color text-justify">
              Penyedia layanan inovatif yang berdedikasi untuk memudahkan pengguna dalam menemukan dan memesan
              gedung-gedung di area Tasikmalaya.
            </p>
            {{-- Button --}}
            <div class="d-flex mt-5">
              <a href="{{ route('borrowing') }}" class="btn btn-primary rounded-pill fw-medium">Book Now</a>
              <a href="{{ route('borrowing') }}" class="btn btn-outline-primary rounded-pill fw-medium ms-3">Explore More</a>
            </div>
          </div>
          {{-- Image --}}
          <div class="col text-center">
            <img class="hero-img shadow-lg" src="/assets/images/img-hero.png" width="80%" loading="lazy">
          </div>
        </div>
        {{-- Offers --}}
        <div class="row offers px-3">
          <h2 class="fw-bold ttl-color mb-5 text-center">Apa yang Kami Tawarkan?</h2>
          {{-- Offer 1 --}}
          <div class="col px-4 text-center">
            <img src="/assets/ilustrations/il-building.png" width="165" loading="lazy">
            <h3 class="fs-4 ttl-color mt-3">Daftar Gedung Terlengkap</h3>
            <p class="text-color text-justify">
              Jelajahi pilihan gedung-gedung berkualitas yang dapat Anda pinjam untuk
              berbagai acara.
            </p>
          </div>
          {{-- Offer 2 --}}
          <div class="col px-4 text-center">
            <img src="/assets/ilustrations/il-information.png" width="165" loading="lazy">
            <h3 class="fs-4 ttl-color mt-3">Informasi Terperinci</h3>
            <p class="text-color text-justify">
              Dapatkan informasi lengkap tentang fasilitas, kapasitas, dan layanan tambahan dari setiap gedung.
            </p>
          </div>
          {{-- Offer 3 --}}
          <div class="col px-4 text-center">
            <img src="/assets/ilustrations/il-document.png" width="165" loading="lazy">
            <h3 class="fs-4 ttl-color mt-3">Proses Peminjaman Mudah</h3>
            <p class="text-color text-justify">
              Memungkinkan Anda untuk memesan, dan mengelola peminjaman gedung dengan cepat.
            </p>
          </div>
        </div>
        {{-- Footer --}}
        <div class="row px-0">
            @include('includes.footer')
        </div>
      </div>
    </div>
  </div>
@endsection
