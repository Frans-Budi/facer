@extends('layouts.app')

@section('content')
  <div class="row pe-0">
    <div class="col-md-10 px-0">
      {{-- Navbar --}}
      @include('includes.navbar', ['title' => 'Pengajuan'])
      {{-- Content --}}
      <div class="mt-3rem formulir container mb-5">
        <form action="" method="POST">
          @csrf
          <div class="row d-flex justify-content-center">
            <div class="col-9 d-flex flex-column">
              <h1 class="fw-bold ttl-color fs-2 mb-3 text-center">Detail Pengajuan</h1>
              {{-- Informasi Pengguna --}}
              <div class="py-2">
                <h3 class="ttl-color fs-4 fw-semibold mb-3">Informasi Pengguna</h3>
                {{-- Nama Pengguna --}}
                <div class="mb-3">
                  <input type="text" name="name" class="form-control rounded-pill border-2px border-black p-4"
                    value="{{ $data->user->name }}" disabled>
                </div>
                {{-- Email Pengguna --}}
                <div class="mb-3">
                  <input type="text" name="email" class="form-control rounded-pill border-2px border-black p-4"
                    value="{{ $data->user->email }}" disabled>
                </div>
              </div>
              {{-- Informasi Acara --}}
              <div class="py-2">
                <h3 class="ttl-color fs-4 fw-semibold mb-3">Informasi Acara</h3>
                {{-- Nama Acara --}}
                <div class="mb-3">
                  <input type="text" name="program_name" class="form-control rounded-pill border-2px border-black p-4"
                    value="{{ $data->program_name }}" disabled>
                </div>
                {{-- Tanggal Acara --}}
                <div class="mb-3">
                  <input type="text" name="program_date" class="form-control rounded-pill border-2px border-black p-4"
                    value="{{ $data->program_date }}" disabled>
                </div>
                {{-- Waktu Mulai dan Selesai --}}
                <div class="mb-3">
                  <input type="text" name="program_time" class="form-control rounded-pill border-2px border-black p-4"
                    value="{{ $data->program_time }}" disabled>
                </div>
                {{-- Jenis Acara --}}
                <div class="mb-3">
                  <input type="text" name="program_type" class="form-control rounded-pill border-2px border-black p-4"
                    value="{{ $data->program_type }}" disabled>
                </div>
              </div>
              {{-- Pilihan Gedung --}}
              <div class="py-2">
                <h3 class="ttl-color fs-4 fw-semibold mb-3">Pilihan Gedung</h3>
                {{-- Pilihan Gedung --}}
                <div class="mb-3">
                  <input type="text" class="form-control rounded-pill border-2px border-black p-4"
                    value="{{ $data->product->name }}" disabled>
                </div>
                {{-- Fasilitas --}}
                <div class="mb-3">
                  <input type="text" name="used_facility" class="form-control rounded-pill border-2px border-black p-4"
                    value="{{ $data->used_facility }}" disabled>
                </div>
                {{-- Price --}}
                <div class="mb-3">
                  <input type="text" name="price" class="form-control rounded-pill border-2px border-black p-4"
                    value="Rp {{ number_format($data->product->price,0,",",".") }}/{{ $data->product->unit }}" disabled>
                </div>
              </div>
              {{-- Detail Kebutuhan Tambahan --}}
              <div class="py-2">
                <h3 class="ttl-color fs-4 fw-semibold mb-3">Detail Kebutuhan Tambahan</h3>
                {{-- Kebutuhan --}}
                <div class="mb-3">
                  <input type="text" name="other_needs" class="form-control rounded-pill border-2px border-black p-4"
                    value="{{ $data->other_needs }}" disabled>
                </div>
              </div>
              {{-- Action Button --}}
              <div class="d-flex justify-content-center mt-4">
                <button type="submit" class="btn btn-primary rounded-pill align-self-center fw-semibold me-2">
                  Izinkan
                </button>
                <a href="{{ route('submission') }}"
                  class="btn btn-outline-primary rounded-pill align-self-center fw-semibold">
                  Tolak
                </a>
              </div>

            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
