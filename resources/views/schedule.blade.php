@extends('layouts.app')

@section('content')
  <div class="row pe-0">
    <div class="col-md-10 px-0">
      {{-- Navbar --}}
      @include('includes.navbar', ['title' => 'Jadwal'])
      {{-- Content --}}
      <div class="container my-5">
        <div class="row px-4">
          {{-- Left Side --}}
          <div class="col-8 rounded-20 bg-white px-3 py-4 shadow-sm">
            {{-- Header --}}
            <div class="d-flex align-items-center">
              <h4 class="ttl-color fw-bold me-auto">GCC</h4>
              <select class="form-select w-fit-content mx-2 sc-select rounded-pill">
                <option value="Januari" selected>Januari</option>
                <option value="Febuari">Febuari</option>
                <option value="Maret">Maret</option>
              </select>
              <select class="form-select w-fit-content mx-2 sc-select rounded-pill">
                <option value="2023" selected>2023</option>
                <option value="2024">2024</option>
              </select>
            </div>
            {{-- Calender --}}
            <img src="/assets/images/img-calender.png" class="w-100 mb-4 mt-3" alt="Calender" loading="lazy">
          </div>
          {{-- Right Side --}}
          <div class="col-4 ps-4">
            {{-- Title --}}
            <div class="rounded-20 container mb-3 bg-white px-4 py-3 shadow-sm">
              <h4 class="fw-bold ttl-color fs-5 mb-1">Detail Jadwal</h4>
              <span class="fs-14px light-color fw-medium">Selasa, 10 Januari 2023</span>
            </div>
            {{-- Sticky 1 --}}
            <div class="bg-sticky-purple rounded-20 container bg-white px-4 py-3 shadow-sm mb-3">
              <div class="ps-3">
                <h4 class="fw-bold ttl-color fs-6 mb-0">Dignity UPI</h4>
                <span class="fs-14px light-color fw-medium">Diletra 4.0</span>
                <div class="d-flex align-items-center mt-1">
                  <img src="/assets/icons/ic-time.png" width="24">
                  <span class="fs-14px light-color ms-2">09.00 - 10.00 AM</span>
                </div>
              </div>
            </div>
            {{-- Sticky 2 --}}
            <div class="bg-sticky-orange rounded-20 container bg-white px-4 py-3 shadow-sm mb-3">
              <div class="ps-3">
                <h4 class="fw-bold ttl-color fs-6 mb-0">SD Negeri 05 Tasikmalaya</h4>
                <span class="fs-14px light-color fw-medium">Pramuka</span>
                <div class="d-flex align-items-center mt-1">
                  <img src="/assets/icons/ic-time.png" width="24">
                  <span class="fs-14px light-color ms-2">12.00 - 13.00 PM</span>
                </div>
              </div>
            </div>
            {{-- Sticky 3 --}}
            <div class="bg-sticky-yellow rounded-20 container bg-white px-4 py-3 shadow-sm mb-3">
              <div class="ps-3">
                <h4 class="fw-bold ttl-color fs-6 mb-0">D'Krest UPI</h4>
                <span class="fs-14px light-color fw-medium">Creasi</span>
                <div class="d-flex align-items-center mt-1">
                  <img src="/assets/icons/ic-time.png" width="24">
                  <span class="fs-14px light-color ms-2">15.00 - 17.00 PM</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
