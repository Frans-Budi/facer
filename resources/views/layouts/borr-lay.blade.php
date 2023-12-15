@extends('layouts.app')

@section('content')
  <div class="row pe-0">
    <div class="col-md-10 px-0">
      {{-- Navbar --}}
      @include('includes.navbar', ['title' => 'Peminjaman'])
      {{-- Content --}}
      @yield("bor-content")
    </div>
  </div>
@endsection
