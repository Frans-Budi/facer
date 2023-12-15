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
              <div class="horizontal-line horizontal-line-finish align-self-center flex-grow-1"></div>
            </div>
            <p class="fw-medium text-color mt-2">Informasi Pembayaran</p>
          </div>
          {{-- Progress 3 --}}
          <div class="col-3 d-flex flex-column p-0 text-center">
            <div class="d-flex justify-content-start">
              <div class="horizontal-line horizontal-line-finish align-self-center w-50"></div>
              <a href="{{ route('payment.progress-3') }}"
                class="progress-circle progress-circle-finish rounded-circle fw-bold align-self-center d-flex justify-content-center text-decoration-none">
                <span class="align-self-center lh-1">3</span>
              </a>
            </div>
            <p class="fw-medium text-color mt-2">Pemesanan Berhasil</p>
          </div>
        </div>
        {{-- Content --}}
        <div class="row d-flex justify-content-center">
          <div class="col-9">
            {{-- Total & P.Method --}}
            <div class="row py-3">
              {{-- Total Cost --}}
              <div class="col-md rounded-20 d-flex justify-content-between align-items-center bg-white p-4 shadow-sm">
                <h3 class="lh-1 fw-semibold ttl-color mb-0"><span class="fs-6">Rp
                  </span>{{ number_format($paymentData->total_cost, 0, ',', '.') }}</h3>
                <div class="d-flex align-items-center">
                  <span class="green-color fw-medium me-2">Berhasil</span>
                  <img src="/assets/icons/ic-check-fill.png" width="30">
                </div>
              </div>
              {{-- Payment Method --}}
              <div
                class="col-md rounded-20 d-flex justify-content-between align-items-center ms-4 bg-white p-4 shadow-sm">
                <h5 class="lh-1 fw-semibold text-color mb-0">Pembayaran Via</h5>
                <div class="d-flex align-items-center">
                  <span class="ttl-color fw-medium me-2">{{ $paymentData->payment_method }}</span>
                  <img src="/assets/icons/ic-transfer.png" width="30">
                </div>
              </div>
            </div>
            {{-- Rincian Biaya --}}
            <div class="row px-0 pb-2 pt-3">
              <div class="rounded-20 container bg-white px-0 shadow-sm pb-3">
                {{-- Jumlah Transfer --}}
                <div class="text-color px-4 pb-1 pt-3">
                  <label class="col-sm-6 col-form-label fs-5 fw-semibold p-0">Jumlah Transfer</label>
                </div>
                <div class="w-100 my-2 border"></div>
                @foreach ($paymentData->costs as $cost)
                  <div class="row text-color mb-2 px-5">
                    <label class="col-sm-6 col-form-label fs-5 ttl-color p-0">{{ $cost->name }}</label>
                    <div class="col-sm-6 p-0">
                      <input type="text" class="form-control-plaintext fs-5 ttl-color p-0 text-right"
                        value="Rp {{ number_format($cost->amount, 0, ",", ".") }}">
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
            {{-- Rincian ID --}}
            <div class="row py-2">
              <div class="rounded-20 container bg-white px-0 shadow-sm">
                {{-- Rincian --}}
                <div class="text-color px-4 pb-1 pt-3">
                  <label class="col-sm-6 col-form-label fs-5 fw-semibold p-0">Rincian</label>
                </div>
                {{-- Jumlah Pembayaran --}}
                <div class="row text-color mb-3 px-5">
                  <label class="col-sm-6 col-form-label fs-5 ttl-color p-0">ID</label>
                  <div class="col-sm-6 p-0">
                    <input type="text" class="form-control-plaintext fs-5 ttl-color p-0 text-right"
                      value="#{{ $paymentData->request_product_id }}">
                  </div>
                </div>
              </div>
            </div>
            <p class="ttl-color fw-medium mt-2">*Biaya (Jika Ada) Termasuk PPN</p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
