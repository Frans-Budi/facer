@extends('layouts.app')

@section('content')
  <div class="row pe-0">
    <div class="col-md-10 px-0">
      {{-- Navbar --}}
      @include('includes.navbar', ['title' => 'Pengguna'])
      {{-- Content --}}
      <div class="container mt-4 p-4 px-5">
        {{-- Profile Card --}}
        <div class="row mb-5">
          <div class="profile-card rounded-20 container px-4 pb-2 pt-3 shadow-sm">
            <div class="d-flex flex-column align-items-center w-fit-content">
              @if (auth()->user()->profile_image)
                <div class="rounded-circle profile-border ratio ratio-1x1" style="width: 125px">
                  <img src="{{ asset('storage/profile-images/' . auth()->user()->profile_image) }}" loading="lazy"
                    class="fit-image rounded-circle">
                </div>
              @else
                <div class="rounded-circle bg-primary-color profile-img p-3">
                  <img src="/assets/icons/ic-user.png" width="60" loading="lazy">
                </div>
              @endif
              <h3 class="fw-bold ttl-color mb-3 mt-2">{{ auth()->user()->name }}</h3>
            </div>
            {{-- Info --}}
            <div class="row">
              {{-- Address --}}
              <div class="col-3">
                <h6 class="fs-6 light-color fw-light">Address:</h6>
                <div class="d-flex align-items-center">
                  @if (auth()->user()->address)
                    <img src="/assets/icons/ic-location-circle.png" width="35">
                    <span class="fw-semibold ttl-color ms-2">{{ auth()->user()->address }}</span>
                  @else
                    -
                  @endif
                </div>
              </div>
              {{-- Phone --}}
              <div class="col-3">
                <h6 class="fs-6 light-color fw-light">Phone:</h6>
                <div class="d-flex align-items-center">
                  @if (auth()->user()->phone)
                    <img src="/assets/icons/ic-phone-circle.png" width="35">
                    <span class="fw-semibold ttl-color ms-2">{{ auth()->user()->phone }}</span>
                  @else
                    -
                  @endif
                </div>
              </div>
              {{-- Email --}}
              <div class="col-3">
                <h6 class="fs-6 light-color fw-light">Email:</h6>
                <div class="d-flex align-items-center">
                  @if (auth()->user()->email)
                    <img src="/assets/icons/ic-mail-circle.png" width="35">
                    <span class="fw-semibold ttl-color ms-2">{{ auth()->user()->email }}</span>
                  @else
                    -
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
        {{-- Order History --}}
        <div class="row" style="margin-bottom: 4.5rem">
          <div class="rounded-20 container bg-white p-3 shadow-sm">
            <div class="row">
              {{-- Title --}}
              <div class="col-12 d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center px-3">
                  <img src="/assets/ilustrations/il-order-history.png" width="35" loading="lazy">
                  <h2 class="fw-regular fs-5 mb-0 ms-3">Riwayat Pesanan</h2>
                </div>
                <a href="#" class="light-color text-decoration-none">
                  Lihat Riwayat Pesanan<i class="bi bi-chevron-right fw-bold"></i>
                </a>
              </div>
              {{-- Table --}}
              <div class="col-12 table-responsive">
                <table class="orhis-table table-borderless mt-4 table text-center">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Gedung</th>
                      <th scope="col">Acara</th>
                      <th scope="col">Tanggal</th>
                      <th scope="col">Pembayaran</th>
                      <th scope="col">Total Biaya</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($history as $his)
                      <tr class="table-group-divider">
                        <th scope="row">#{{ $his->id }}</th>
                        <td>{{ $his->product->name }}</td>
                        <td>{{ $his->program_name }}</td>
                        <td>{{ $his->program_date }}</td>
                        <td>{{ $his->payment->payment_method }}</td>
                        <td>Rp {{ number_format($his->payment->total_cost,0,",",".") }}/{{ $his->product->unit }}</td>
                        <td><a href="#"><img src="/assets/icons/ic-3dots.png" width="20"></a></td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        {{-- Action Button --}}
        <div class="row">
          <div class="rounded-20 container bg-white p-3 shadow-sm">
            <div class="row">
              <a href="{{ route('profile.edit') }}" class="d-flex align-items-center text-decoration-none cursor-pointer">
                <img src="/assets/icons/ic-profile-setting.png" width="35">
                <span class="fs-5 fw-medium text-color me-auto ms-3">Pengaturan Akun</span>
                <img src="/assets/icons/ic-chevron-right.png" width="30">
              </a>
              <hr class="my-2 p-0" style="border: 1px solid #AFB3B7" />
              <a href="#" class="d-flex align-items-center text-decoration-none cursor-pointer">
                <img src="/assets/icons/ic-cs.png" width="35">
                <span class="fs-5 fw-medium text-color me-auto ms-3">Layanan Konsumen</span>
                <img src="/assets/icons/ic-chevron-right.png" width="30">
              </a>
              <hr class="my-2 p-0" style="border: 1px solid #AFB3B7" />
              <form action="/logout" method="POST" class="mb-0">
                @csrf
                <button type="submit" class="btn d-flex w-100 align-items-center text-decoration-none cursor-pointer p-0"
                  onclick="return confirm('Apakah Kamu Yakin ingin Keluar?')">
                  <img src="/assets/icons/ic-logout.png" width="35">
                  <span class="fs-5 fw-medium text-color me-auto ms-3">Keluar</span>
                  <img src="/assets/icons/ic-chevron-right.png" width="30">
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
