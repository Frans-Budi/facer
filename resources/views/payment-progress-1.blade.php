@extends('layouts.app')

@section('content')
  <div class="row pe-0">
    <div class="col-md-10 px-0">
      {{-- Navbar --}}
      @include('includes.navbar', ['title' => 'Pembayaran'])
      {{-- Content --}}
      <div class="mt-3rem min-vh-100 container">
        {{-- Progress --}}
        <div class="row d-flex justify-content-center">
          {{-- Progress 1 --}}
          <div class="col-3 d-flex flex-column p-0 text-center">
            <div class="d-flex justify-content-end">
              <a href="{{ route('payment.progress-1') }}"
                class="progress-circle progress-circle-finish rounded-circle fw-bold align-self-center d-flex justify-content-center text-decoration-none">
                <span class="align-self-center lh-1">1</span>
              </a>
              <div class="horizontal-line align-self-center w-50"></div>
            </div>
            <p class="fw-medium text-color mt-2">Informasi Pemesanan</p>
          </div>
          {{-- Progress 2 --}}
          <div class="col-3 d-flex flex-column p-0 text-center">
            <div class="d-flex justify-content-center">
              <div class="horizontal-line align-self-center flex-grow-1"></div>
              <a href="{{ route('payment.progress-2') }}"
                class="progress-circle rounded-circle fw-bold align-self-center d-flex justify-content-center text-decoration-none">
                <span class="align-self-center lh-1">2</span>
              </a>
              <div class="horizontal-line align-self-center flex-grow-1"></div>
            </div>
            <p class="fw-medium text-color mt-2">Informasi Pembayaran</p>
          </div>
          {{-- Progress 3 --}}
          <div class="col-3 d-flex flex-column p-0 text-center">
            <div class="d-flex justify-content-start">
              <div class="horizontal-line align-self-center w-50"></div>
              <a href="{{ route('payment.progress-3') }}"
                class="progress-circle rounded-circle fw-bold align-self-center d-flex justify-content-center text-decoration-none">
                <span class="align-self-center lh-1">3</span>
              </a>
            </div>
            <p class="fw-medium text-color mt-2">Pemesanan Berhasil</p>
          </div>
        </div>
        {{-- Content --}}
        <div class="row d-flex justify-content-center">
          <div class="col-9 d-flex flex-column">
            @if (session()->has('confirm'))
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ session('confirm') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
            {{-- Detail Acara --}}
            <div class="py-3">
              <h3 class="fw-semibold fs-4 mb-3">Detail Acara</h3>
              <div class="rounded-12 container bg-white px-5 py-3 shadow-sm">
                {{-- Nama Acara --}}
                <div class="row text-color mb-3">
                  <label class="col-sm-6 col-form-label fs-5 p-0 ps-2">Nama Acara</label>
                  <div class="col-sm-6 p-0">
                    <input type="text" class="form-control-plaintext fs-5 fw-semibold p-0"
                      value="{{ $request_product->program_name }}">
                  </div>
                </div>
                {{-- Tanggal Acara --}}
                <div class="row text-color mb-3">
                  <label class="col-sm-6 col-form-label fs-5 p-0 ps-2">Tanggal Acara</label>
                  <div class="col-sm-6 p-0">
                    <input type="text" class="form-control-plaintext fs-5 fw-semibold p-0"
                      value="{{ $request_product->program_date }}">
                  </div>
                </div>
                {{-- Waktu --}}
                <div class="row text-color mb-3">
                  <label class="col-sm-6 col-form-label fs-5 p-0 ps-2">Waktu</label>
                  <div class="col-sm-6 p-0">
                    <input type="text" class="form-control-plaintext fs-5 fw-semibold p-0"
                      value="{{ $request_product->program_time }}">
                  </div>
                </div>
                {{-- Jenis Acara --}}
                <div class="row text-color">
                  <label class="col-sm-6 col-form-label fs-5 p-0 ps-2">Jenis Acara</label>
                  <div class="col-sm-6 p-0">
                    <input type="text" class="form-control-plaintext fs-5 fw-semibold p-0"
                      value="{{ $request_product->program_type }}">
                  </div>
                </div>
              </div>
            </div>
            {{-- Detail Acara --}}
            <div class="py-3">
              <h3 class="fw-semibold fs-4 mb-3">Detail Gedung</h3>
              <div class="rounded-12 container bg-white px-5 py-3 shadow-sm">
                {{-- Nama Gedung --}}
                <div class="row text-color mb-3">
                  <label class="col-sm-6 col-form-label fs-5 p-0 ps-2">Nama Gedung</label>
                  <div class="col-sm-6 p-0">
                    <input type="text" class="form-control-plaintext fs-5 fw-semibold p-0"
                      value="{{ $request_product->product->name }}">
                  </div>
                </div>
                {{-- Tanggal Peminjaman --}}
                <div class="row text-color mb-3">
                  <label class="col-sm-6 col-form-label fs-5 p-0 ps-2">Tanggal Peminjaman</label>
                  <div class="col-sm-6 p-0">
                    <input type="text" class="form-control-plaintext fs-5 fw-semibold p-0"
                      value="{{ $request_product->tanggal_peminjaman }}">
                  </div>
                </div>
                {{-- Fasilitas yang Digunakan --}}
                <div class="row text-color mb-3">
                  <label class="col-sm-6 col-form-label fs-5 p-0 ps-2">Fasilitas yang Digunakan</label>
                  <div class="col-sm-6 p-0">
                    <input type="text" class="form-control-plaintext fs-5 fw-semibold p-0"
                      value="{{ $request_product->used_facility }}">
                  </div>
                </div>
                {{-- Kebutuhan Tambahan --}}
                <div class="row text-color">
                  <label class="col-sm-6 col-form-label fs-5 p-0 ps-2">Kebutuhan Tambahan</label>
                  <div class="col-sm-6 p-0">
                    <input type="text" class="form-control-plaintext fs-5 fw-semibold p-0"
                      value="{{ $request_product->other_needs }}">
                  </div>
                </div>
              </div>
            </div>
            <a href="{{ route('payment.progress-2') }}"
              class="btn btn-lg btn-primary fw-medium align-self-center rounded-12 mt-4">
              Lanjut ke Informasi Pembayaran
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
