@extends('layout.client')

@push('css')
  
  <style>
    .hero-section{
      background-image: url('../image/hero-img-2.jpg');
      background-size: cover;
    }
  </style>

@endpush

@section('content')

  <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">

    <div class="container">
      <div class="row align-items-center">

        <div class="col-lg-6 col-12 mx-auto">
          <h1>Clavia Photography</h1>
          <p class="text-white mb-4 pb-lg-2">abadikan <em>momen indahmu</em> Bersama kami </p>
          <a class="btn custom-btn smoothscroll me-2 mb-2"  href="{{ route('auth.login') }}"><strong>Login First</strong></a>
          <a class="btn custom-btn smoothscroll me-2 mb-2"  href="{{ route('auth.register') }}"><strong>Registrasi</strong></a>
          {{-- <a class="btn custom-btn custom-border-btn smoothscroll me-3" href="{{ route('auth.register') }}">Registrasi</a> --}}
        </div>

      </div>
    </div>

    <div class="hero-slides"></div>

  </section> 

@endsection