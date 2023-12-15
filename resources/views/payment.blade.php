@extends('layouts.app')

@section('content')
  <div class="row pe-0">
    <div class="col-md-10 px-0">
      {{-- Navbar --}}
      @include('includes.navbar', ['title' => 'Pembayaran'])
      {{-- Content --}}
      <div class="min-vh-100 d-flex align-items-center justify-content-center flex-column container pb-5">
        <img src="/assets/ilustrations/il-no-order.png" alt="No Orders" width="200" loading="lazy">
        <span class="fw-medium fs-4 mb-4 mt-2">Belum ada pesanan</span>
        <a href="{{ route('borrowing') }}" class="btn btn-primary btn-lg fw-medium mb-5">
          Pesan Sekarang
        </a>
      </div>
    </div>
  </div>
@endsection
