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
              <div class="horizontal-line horizontal-line-finish align-self-center w-50"></div>
            </div>
            <p class="fw-medium text-color mt-2">Informasi Pemesanan</p>
          </div>
          {{-- Progress 2 --}}
          <div class="col-3 d-flex flex-column p-0 text-center">
            <div class="d-flex justify-content-center">
              <div class="horizontal-line horizontal-line-finish align-self-center flex-grow-1"></div>
              <a href="{{ route('payment.progress-2') }}"
                class="progress-circle progress-circle-finish rounded-circle fw-bold align-self-center d-flex justify-content-center text-decoration-none">
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
        <form action="/payment/progress-2" method="POST">
          @csrf
          <div class="row d-flex justify-content-center">
            <div class="col-9 d-flex flex-column">
              {{-- Rincian Harga --}}
              <div class="py-3">
                <h3 class="fw-semibold fs-4 mb-3">Rincian Harga</h3>
                <div class="rounded-12 container bg-white px-0 py-3 shadow-sm">
                  {{-- Harga yang Anda bayar --}}
                  <div class="row text-color d-flex align-items-center mb-3 px-5">
                    <label class="col-sm-6 col-form-label fs-5 p-0 ps-2">Harga yang Anda bayar</label>
                    <div class="col-sm-6 p-0 pe-4">
                      <input type="text" class="form-control-plaintext fs-4 fw-medium red-color p-0 text-right"
                        value="Rp {{ number_format($request_product->product->price + 60000, 0, ',', '.') }}">
                    </div>
                  </div>
                  <div class="w-100 my-2 border"></div>
                  {{-- Nama Gedung --}}
                  <h4 class="fw-semibold text-color my-3 px-5" style="margin-left: -5px">
                    {{ $request_product->product->name }}</h4>
                  {{-- Biaya Sewa Gedung --}}
                  <div class="row text-color mb-2 px-5">
                    <label class="col-sm-6 col-form-label fs-5 ttl-color p-0 ps-2">Biaya Sewa Gedung</label>
                    <div class="col-sm-6 p-0 pe-4">
                      <input type="text" class="form-control-plaintext fs-5 ttl-color p-0 text-right"
                        value="Rp {{ number_format($request_product->product->price, 0, ',', '.') }}">
                    </div>
                  </div>
                  {{-- Biaya Keamanan --}}
                  <div class="row text-color mb-2 px-5">
                    <label class="col-sm-6 col-form-label fs-5 ttl-color p-0 ps-2">Biaya Keamanan</label>
                    <div class="col-sm-6 p-0 pe-4">
                      <input type="text" class="form-control-plaintext fs-5 ttl-color p-0 text-right"
                        value="Rp 50.000">
                    </div>
                  </div>
                  {{-- Biaya Admin --}}
                  <div class="row text-color px-5">
                    <label class="col-sm-6 col-form-label fs-5 ttl-color p-0 ps-2">Biaya Admin</label>
                    <div class="col-sm-6 p-0 pe-4">
                      <input type="text" class="form-control-plaintext fs-5 ttl-color p-0 text-right"
                        value="Rp 10.000">
                    </div>
                  </div>
                </div>
              </div>
              {{-- Metode Pembayaran --}}
              <div class="py-3">
                <h3 class="fw-semibold fs-4 mb-3">Metode Pembayaran</h3>
                @if (session()->has('error'))
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                @endif
                {{-- Kartu Kredit/Debit --}}
                <div class="row mb-2 px-2">
                  <input type="radio" class="btn-check" name="payment_method" value="Kartu Kredit/Debit"
                    id="kartu-kredit-debit" autocomplete="off">
                  <label class="btn-payment-method d-flex align-items-center shadow-sm" for="kartu-kredit-debit">
                    Kartu Kredit/Debit
                    <img class="ms-auto" src="/assets/logos/lg-kartu-kredit-debit.png" height="25">
                  </label>
                </div>
                {{-- Transfer Bank --}}
                <div class="row mb-2 px-2">
                  <input type="radio" class="btn-check" name="payment_method" value="Transfer Bank" id="transfer-bnak"
                    autocomplete="off">
                  <label class="btn-payment-method d-flex align-items-center shadow-sm" for="transfer-bnak">
                    Transfer Bank
                    <img class="ms-auto" src="/assets/logos/lg-transfer-bank.png" height="25">
                  </label>
                </div>
                {{-- E-Wallet --}}
                <div class="row mb-2 px-2">
                  <input type="radio" class="btn-check" name="payment_method" value="E-Wallet" id="e-wallet"
                    autocomplete="off">
                  <label class="btn-payment-method d-flex align-items-center shadow-sm" for="e-wallet">
                    E-Wallet
                    <img class="ms-auto" src="/assets/logos/lg-e-wallet.png" height="25">
                  </label>
                </div>
                {{-- Alfamart --}}
                <div class="row mb-2 px-2">
                  <input type="radio" class="btn-check" name="payment_method" value="Alfamart" id="Alfamart"
                    autocomplete="off">
                  <label class="btn-payment-method d-flex align-items-center shadow-sm" for="Alfamart">
                    Alfamart
                    <img class="ms-auto" src="/assets/logos/lg-alfamart.png" height="25">
                  </label>
                </div>
                {{-- Indomaret --}}
                <div class="row mb-2 px-2">
                  <input type="radio" class="btn-check" name="payment_method" value="Indomaret" id="Indomaret"
                    autocomplete="off">
                  <label class="btn-payment-method d-flex align-items-center shadow-sm" for="Indomaret">
                    Indomaret
                    <img class="ms-auto" src="/assets/logos/lg-indomaret.png" height="25">
                  </label>
                </div>
              </div>
              {{-- Action Button --}}
              <input type="text" class="d-none" name="request_product_id" value="{{ $request_product->id }}">
              <input type="text" class="d-none" name="biaya_sewa_gedung"
                value="{{ $request_product->product->price }}">
              <input type="text" class="d-none" name="biaya_keamanan" value="50000">
              <input type="text" class="d-none" name="biaya_admin" value="10000">
              @if ($is_paid)
                <a href="{{ route('payment.progress-3') }}" class="btn btn-lg btn-primary fw-medium align-self-center rounded-12 mb-5 mt-3">
                  Lihat Pemesanan Berhasil
                </a>
              @else
                <button type="submit" class="btn btn-lg btn-primary fw-medium align-self-center rounded-12 mb-5 mt-3">
                  Lanjut ke Pembayaran
                </button>
              @endif
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
