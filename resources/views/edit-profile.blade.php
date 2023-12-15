@extends('layouts.app')

@section('content')
  <div class="row pe-0">
    <div class="col-md-10 px-0">
      {{-- Navbar --}}
      @include('includes.navbar', ['title' => 'Pengaturan Akun'])
      {{-- Content --}}
      <div class="min-vh-100 container mt-5 p-4 px-5">
        @if (session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        <div class="rounded-20 container bg-white p-4">
          <div class="row">
            <h3 class="text-color fs-4 mb-1">Profile Saya</h3>
            <p>Kelola informasi akun Anda untuk mengontrol, melindungi, dan mengamankan akun.</p>
          </div>
          <form action="/profile/edit" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row d-flex mt-5">
              {{-- Form Input --}}
              <div class="col-7 d-flex flex-column ps-5">
                {{-- Name --}}
                <div class="row mb-3">
                  <label for="name" class="col-sm-4 col-form-label gray-color">Name</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="name" id="name"
                      value="{{ auth()->user()->name }}">
                  </div>
                </div>
                {{-- Email --}}
                <div class="row mb-3">
                  <label for="email" class="col-sm-4 col-form-label gray-color">Email</label>
                  <div class="col-sm-8">
                    <input type="email" class="form-control-plaintext" name="email" id="email"
                      value="{{ auth()->user()->email }}" disabled>
                  </div>
                </div>
                {{-- Alamat --}}
                <div class="row mb-3">
                  <label for="alamat" class="col-sm-4 col-form-label gray-color">Alamat</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="address" id="alamat"
                      value="{{ auth()->user()->address }}">
                  </div>
                </div>
                {{-- Nomor Telepon --}}
                <div class="row mb-3">
                  <label for="nomor-telepon" class="col-sm-4 col-form-label gray-color">Nomor Telepon</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="phone" id="nomor-telepon"
                      value="{{ auth()->user()->phone }}">
                  </div>
                </div>
                {{-- Jenis Kelamin --}}
                <div class="row mb-3">
                  <label for="jenis-kelamin" class="col-sm-4 col-form-label gray-color">Jenis Kelamin</label>
                  <div class="col-sm-8">
                    <select class="form-select" name="gender">
                      <option selected>Pilih Jenis Kelamin</option>
                      <option @if (auth()->user()->gender == 'laki-laki') selected @endif value="laki-laki">Laki-laki</option>
                      <option @if (auth()->user()->gender == 'perempuan') selected @endif value="perempuan">Perempuan</option>
                    </select>
                  </div>
                </div>
                {{-- Tanggal Lahir --}}
                <div class="row mb-3">
                  <label for="tanggal-lahir" class="col-sm-4 col-form-label gray-color">Tanggal Lahir</label>
                  <div class="col-sm-8">
                    <input type="date" class="form-control" name="date_of_birth" id="tanggal-lahir"
                      placeholder="D MM YYYY" value="{{ auth()->user()->date_of_birth }}">
                  </div>
                </div>
              </div>
              {{-- Choose Profile Image --}}
              <div class="col-5 d-flex flex-column">
                <div class="col-7 align-self-center">
                  <div class="ratio ratio-1x1">
                    <img id="previewImage"
                      src="{{ auth()->user()->profile_image ? asset('storage/profile-images/' . auth()->user()->profile_image) : '/assets/icons/ic-user-circle.png' }}"
                      class="rounded-circle fit-image border shadow" alt="Profile Image">
                  </div>
                  <div class="mb-2 mt-4 text-center">
                    <label class="form-label btn btn-outline-dark px-4" for="profile_image">Pilih Gambar</label>
                    <input class="form-control d-none" type="file" name="profile_image" id="profile_image"
                      onchange="getImagePreview(event)" accept=".jpg, .jpeg, .png">
                    <div class="text-danger fs-12px">
                      @if ($errors->has('profile_image'))
                        {{ $errors->first('profile_image') }}
                      @endif
                    </div>
                  </div>
                  <p class="fs-14px gray-color text-center">Ukuran gambar: maks. 1 MB Format gambar: .JPEG, .PNG</p>
                </div>
              </div>
              {{-- Action Button --}}
              <button type="submit" class="btn btn-primary w-fit-content align-self-center mx-auto px-5">
                Ubah Profile
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <script type="text/javascript">
      function getImagePreview(event) {
        var image = URL.createObjectURL(event.target.files[0]);

        var previewImage = document.getElementById('previewImage');

        previewImage.src = image;
      }
    </script>
  @endsection
