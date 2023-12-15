@extends('layouts.borr-lay')

@section('bor-content')
  <div class="mt-3rem bor-detail container px-5">
    <div class="row">
      {{-- Description --}}
      <h1 class="fw-semibold ttl-color mb-3">{{ $product->name }}</h1>
      <div class="col-6 me-auto">
        <div class="py-2">
          <h3 class="fw-medium fs-4 ttl-color">Deskripsi</h3>
          <p class="fs-5 text-color text-justify">
            {!! $product->description !!}
          </p>
        </div>
        <div class="py-2">
          <h3 class="fw-medium fs-4 ttl-color">Fasilitas</h3>
          <ul class="fs-5 text-color ps-3">
            @foreach (json_decode($product->facility) as $facility)
              <li>{{ $facility }}</li>
            @endforeach
          </ul>
        </div>
        <div class="py-2">
          <h3 class="fw-medium fs-4 ttl-color">Lokasi</h3>
          <p class="fs-5 text-color text-justify">{{ $product->location }}</p>
        </div>
      </div>
      {{-- Action --}}
      <div class="col-5">
        <div class="rounded-20 container mt-3 bg-white px-3 py-4 text-center shadow">
          <img src="{{ url('assets/images', $product->image) }}" class="rounded-20 w-100 mb-5">
          <h2 class="ttl-color fw-bold">Rp {{ number_format($product->price, 0, ',', '.') }}<span
              class="light-color">/{{ $product->unit }}</span></h2>
          <p class="text-color">Mohon cek jadwal ketersediaan gedung terlebih dahulu</p>
          <a href="{{ $product->category_product_id == 1 ? route('bor-goverment') : route('bor-private') }}{{ "/$product->slug/formulir" }} "
            class="rounded-pill btn btn-primary fw-medium fs-5 mb-2 mt-3">Dapatkan sekarang</a>
        </div>
      </div>
    </div>
  </div>
@endsection
