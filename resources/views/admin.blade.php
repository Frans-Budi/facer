@extends('layouts.app')

@section('content')
  <div class="row pe-0">
    <div class="col-md-10 px-0">
      {{-- Navbar --}}
      @include('includes.navbar', ['title' => 'Pengajuan'])
      {{-- Content --}}
      <div class="min-vh-100 container mt-4 p-4 px-5">
        @if (session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        @if (session()->has('info'))
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ session('info') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        <div class="rounded-20 container bg-white p-3 shadow-sm">
          <div class="row">
            {{-- Table --}}
            <div class="col-12 table-responsive">
              <table class="orhis-table mt-4 table text-center">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Gedung</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Acara</th>
                    <th scope="col">Biaya</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($all_request as $request)
                    <tr>
                      <th scope="row">#{{ $request->id }}</th>
                      <td>{{ $request->user->name }}</td>
                      <td>{{ $request->product->name }}</td>
                      <td>{{ $request->program_date }}</td>
                      <td>{{ $request->program_name }}</td>
                      <td>Rp {{ number_format($request->product->price, 0, ',', '.') }}</td>
                      <td><a href="{{ route('submission') }}/{{ $request->id }}"><img src="/assets/icons/ic-3dots.png"
                            width="20"></a></td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
