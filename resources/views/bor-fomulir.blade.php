@extends('layouts.borr-lay')

@section('bor-content')
  <div class="mt-3rem formulir container mb-5">
    @php
      if ($product->category_product_id == 1) {
          $company = 'pemerintah';
      } else {
          $company = 'swasta';
      }
      $actionPost = "/borrowing/$company/$product->slug/formulir";
    @endphp

    <form action="{{ $actionPost }}" method="POST">
      @csrf
      <div class="row d-flex justify-content-center">
        <div class="col-9 d-flex flex-column">
          <h1 class="fw-bold ttl-color fs-2 mb-3 text-center">Formulir Peminjaman</h1>
          {{-- Informasi Acara --}}
          <div class="py-2">
            <h3 class="ttl-color fs-4 fw-semibold mb-3">Informasi Acara</h3>
            {{-- Nama Acara --}}
            <div class="mb-3">
              <input type="text" name="program_name" class="form-control rounded-pill border-2px border-black p-4"
                placeholder="Nama Acara" value="{{ old('program_name') }}" required>
            </div>
            {{-- Tanggal Acara --}}
            <div class="mb-3">
              <input type="text" name="program_date" class="form-control rounded-pill border-2px border-black p-4"
                placeholder="Tanggal Acara" value="{{ old('program_date') }}" required>
            </div>
            {{-- Waktu Mulai dan Selesai --}}
            <div class="mb-3">
              <input type="text" name="program_time" class="form-control rounded-pill border-2px border-black p-4"
                placeholder="Waktu Mulai dan Selesai" value="{{ old('program_time') }}" required>
            </div>
            {{-- Jenis Acara --}}
            <div class="mb-3">
              <input type="text" name="program_type" class="form-control rounded-pill border-2px border-black p-4"
                placeholder="Jenis Acara" value="{{ old('program_type') }}" required>
            </div>
          </div>
          {{-- Pilihan Gedung --}}
          <div class="py-2">
            <h3 class="ttl-color fs-4 fw-semibold mb-3">Pilihan Gedung</h3>
            {{-- Pilihan Gedung --}}
            <div class="mb-3">
              <input type="text" class="form-control rounded-pill border-2px border-black p-4"
                value="{{ $product->name }}" disabled>
            </div>
            {{-- Fasilitas --}}
            <div class="mb-3">
              <input type="text" name="used_facility" class="form-control rounded-pill border-2px border-black p-4"
                placeholder="Fasilitas yang Ingin Digunakan" value="{{ old('used_facility') }}" required>
            </div>
          </div>
          {{-- Detail Kebutuhan Tambahan --}}
          <div class="py-2">
            <h3 class="ttl-color fs-4 fw-semibold mb-3">Detail Kebutuhan Tambahan</h3>
            {{-- Kebutuhan --}}
            <div class="mb-3">
              <input type="text" name="other_needs" class="form-control rounded-pill border-2px border-black p-4"
                placeholder="Isi Kebutuhan Anda" value="{{ old('other_needs') }}" required>
            </div>
          </div>
          {{-- Persyartan dan Ketentuan --}}
          <div class="py-2">
            <h3 class="ttl-color fs-4 fw-semibold mb-3">Persyaratan dan Ketentuan</h3>
            {{-- Persyaratan Peminjaman --}}
            <div class="mb-3">
              <input type="text" class="form-control rounded-pill border-2px border-black p-4"
                value="Persyaratan Peminjaman" disabled>
            </div>
            {{-- Ketentuan Penggunaan Gedung --}}
            <div class="mb-3">
              <input type="text" class="form-control rounded-pill border-2px border-black p-4"
                value="Ketentuan Penggunaan Gedung" disabled>
            </div>
          </div>
          {{-- CheckBox --}}
          <div class="form-check mb-3">
            <input type="checkbox" class="form-check-input border-2px border-black" id="check">
            <label class="form-check-label ttl-color" for="check">
              Saya bersedia untuk memenuhi semua persyaratan dan ketentuan yang tertera di atas.
            </label>
          </div>
          <button type="submit" class="btn btn-primary rounded-pill align-self-center fw-semibold mt-4">
            Ajuka Peminjaman
          </button>
        </div>
      </div>
    </form>
  </div>
@endsection
