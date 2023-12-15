<nav class="navbar px-3">
  <div class="container mt-3 ps-4">
    <a class="navbar-brand fw-bold fs-3 ttl-color">{{ $title }}</a>
    <div class="d-flex align-items-center">
      <form class="me-5" role="search">
        <input class="form-control me-2 shadow-sm" type="search" placeholder="Cari" aria-label="Search">
      </form>
      <a class="ic-button d-flex justify-content-center align-items-center mx-2 shadow-sm" href="#">
        <img src="/assets/icons/ic-notification.png" width="20">
      </a>
      <a class="ic-button d-flex justify-content-center align-items-center mx-2 shadow-sm" href="#">
        <img src="/assets/icons/ic-setting.png" width="22">
      </a>
      <div class="d-flex align-items-center ms-4">
        <div class="me-1 text-right">
          <h6 class="fs-14px lh-1 m-0">{{ auth()->check() ? auth()->user()->name : 'Akun' }}</h6>
          <span class="fs-14px lh-1 light-color">{{ auth()->check() ? auth()->user()->is_admin ? "Admin" : "User" : "Guest" }}</span>
        </div>
        @if (auth()->user() && auth()->user()->profile_image)
          <a href="{{ route('profile') }}" class="ic-button ratio ratio-1x1 mx-2">
            <img src="{{ asset('storage/profile-images/' . auth()->user()->profile_image) }}" class="rounded-circle fit-image shadow-sm" width="40">
          </a>
        @else
          <a class="ic-button bg-primary-color d-flex justify-content-center align-items-center mx-2 shadow-sm"
            href="{{ route('profile') }}">
            <img src="/assets/icons/ic-user.png" width="22" loading="lazy">
          </a>
        @endif
      </div>
    </div>
  </div>
</nav>
