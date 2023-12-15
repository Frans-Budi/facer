@extends('layouts.app')

@section('content')
  <div class="row pe-0">
    <div class="col-md-10 px-0">
      <div class="min-vh-100 d-flex align-items-center container ps-5">
        <div class="col-8">
          @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif

          @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{ session('loginError') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif

          <h1 class="ttl-color fw-semibold mb-5">Masuk</h1>
          <form action="/login" method="POST" class="d-flex flex-column">
            @csrf
            <div class="mb-2">
              <input type="email" placeholder="Email" name="email"
                class="form-control rounded-12 @error('email') is-invalid @enderror p-4" autofocus
                value="{{ old('email') }}" required>
              @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-2">
              <input type="password" placeholder="Kata sandi baru" name="password" class="form-control rounded-12 p-4"
                required>
            </div>
            <button type="submit" class="btn btn-primary btn-lg align-self-center fw-medium rounded-12 w-50 mt-5">
              Masuk
            </button>
            <p class="text-color mt-3 text-center">
              Belum memiliki akun? <a href="{{ route('register') }}" class="text-decoration-none fw-medium">Daftar</a>
            </p>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
