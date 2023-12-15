<div class="row flex-nowrap">
  <div class="bg-sidebar col-md-2 hv-100 col-auto px-0">
    <div class="bg-sidebar p-0">
      <a href="#" class="d-flex justify-content-center text-decoration-none pt-1 pt-5 text-white">
        <span class="fs-2 d-none d-sm-inline fw-bold">Facer</span>
      </a>
      <ul class="nav nav-pills flex-column mt-5 ps-4">
        {{-- Beranda --}}
        <li class="nav-item my-2">
          <a href="{{ route('home') }}"
            class="nav-link rounded-start-pill d-flex align-items-center {{ $active == 'home' ? 'active' : '' }} ps-3 text-white">
            <img src="/assets/icons/ic-home.png" width="30">
            <span class="fs-6 fw-medium text-color d-none d-sm-inline ms-3">Beranda</span>
          </a>
        </li>
        {{-- Jadwal --}}
        <li class="nav-item my-2">
          <a href="{{ route('schedule') }}"
            class="nav-link rounded-start-pill d-flex align-items-center {{ $active == 'jadwal' ? 'active' : '' }} ps-3 text-white">
            <img src="/assets/icons/ic-calender.png" width="30">
            <span class="fs-6 fw-medium text-color d-none d-sm-inline ms-3">Jadwal</span>
          </a>
        </li>
        {{-- Pengguna --}}
        <li class="nav-item my-2">
          <a href="{{ route('profile') }}"
            class="nav-link rounded-start-pill d-flex align-items-center {{ $active == 'pengguna' ? 'active' : '' }} ps-3 text-white">
            <img src="/assets/icons/ic-user.png" width="30">
            <span class="fs-6 fw-medium text-color d-none d-sm-inline ms-3">Pengguna</span>
          </a>
        </li>
        {{-- Peminjaman --}}
        <li class="nav-item my-2">
          <a href="{{ route('borrowing') }}"
            class="nav-link rounded-start-pill d-flex align-items-center {{ $active == 'peminjaman' ? 'active' : '' }} ps-3 text-white">
            <img src="/assets/icons/ic-document.png" width="30">
            <span class="fs-6 fw-medium text-color d-none d-sm-inline ms-3">Peminjaman</span>
          </a>
        </li>
        {{-- Pembayaran --}}
        <li class="nav-item my-2">
          <a href="{{ route('payment') }}"
            class="nav-link rounded-start-pill d-flex align-items-center {{ $active == 'pembayaran' ? 'active' : '' }} ps-3 text-white">
            <img src="/assets/icons/ic-payment.png" width="30">
            <span class="fs-6 fw-medium text-color d-none d-sm-inline ms-3">Pembayaran</span>
          </a>
        </li>
        {{-- Pengajuan --}}
        @can('admin')
          <li class="nav-item my-2">
            <a href="{{ route('submission') }}"
              class="nav-link rounded-start-pill d-flex align-items-center {{ $active == 'pengajuan' ? 'active' : '' }} ps-3 text-white">
              <img src="/assets/icons/ic-document.png" width="30">
              <span class="fs-6 fw-medium text-color d-none d-sm-inline ms-3">Pengajuan</span>
            </a>
          </li>
        @endcan
      </ul>
    </div>
  </div>
