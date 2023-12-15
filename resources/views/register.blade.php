@extends('layouts.app')

@section('content')
  <div class="row pe-0">
    <div class="col-md-10 px-0">
      <div class="min-vh-100 d-flex align-items-center container ps-5">
        <div class="col-8">
          <h1 class="ttl-color fw-semibold mb-0">Daftar</h1>
          <p class="text-color mb-5">Cepat dan mudah</p>
          <form action="/register" method="POST" class="d-flex flex-column">
            @csrf
            {{-- First Name & Last Name --}}
            <div class="mb-2">
              {{-- Input --}}
              <div class="d-flex">
                <div class="w-100 me-2">
                  {{-- Input First Name --}}
                  <input type="text" placeholder="Nama depan" name="firstName"
                    class="form-control rounded-12 @error('name') is-invalid @enderror p-4"
                    value="{{ old('firstName') }}">
                  {{-- Invalid Massage --}}
                  @error('name')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="w-100">
                  {{-- Input Last Name --}}
                  <input type="text" placeholder="Nama belakang" name="lastName" class="form-control rounded-12 p-4"
                    value="{{ old('lastName') }}">
                </div>
              </div>
            </div>
            {{-- Email --}}
            <div class="mb-2">
              {{-- Input --}}
              <input type="email" placeholder="Email" name="email"
                class="form-control rounded-12 @error('email') is-invalid @enderror p-4" value="{{ old('email') }}">
              {{-- Invalid Message --}}
              @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            {{-- Password --}}
            <div class="mb-2">
              {{-- Input --}}
              <input type="password" placeholder="Kata sandi baru" name="password"
                class="form-control rounded-12 @error('password') is-invalid @enderror p-4">
              {{-- Invalid Message --}}
              @error('password')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary btn-lg align-self-center fw-medium rounded-12 w-50 mt-5">
              Daftar
            </button>
            <p class="text-color mt-3 text-center">
              Sudah memiliki akun? <a href="{{ route('login') }}" class="text-decoration-none fw-medium">Masuk</a>
            </p>
            <small class="text-color mt-3 text-justify">
              *Dengan mengklik Daftar, Anda menyetujui Ketentuan, Kebijakan Privasi, dan Kebijakan
              Cookie kami. Anda akan menerima Notifikasi SMS dari kami dan bisa berhenti kapan saja.
            </small>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
