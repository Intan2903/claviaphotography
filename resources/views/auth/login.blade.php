@extends('layout.client')

@push('css')
  
  <style>
    .about-section{
      background-color: #C1CCD0;
      height: 100vh;
    }

    .title{
      color: #206D61;
      margin-bottom: 30px;
    }

    input{
      width: 100%;
      border: none;
      background-color: white;
      padding: 10px 20px;
      border-radius: 10px;
      margin-bottom: 10px;
      color: #206D61
    }

    input::placeholder{
      font-size: 14px;
      opacity: 50%;
    }

    input:focus{
      outline: none;
    }

    button{
      width: 100%;
      border: none;
      background-color: #206D61;
      padding: 10px;
      border-radius: 50px;
      text-transform: uppercase;
      font-size: 20px;
      color: white;
      font-weight: bold;
      margin-top: 30px;
    }

    .register{
      font-size: 15px;
      margin-top: 10px;
    }
  </style>

@endpush

@section('content')

  <section class="about-section section-padding" id="about-section">
    {{-- <div class="section-overlay"></div> --}}
    <div class="container mt-5">
      <br><br><br><br>
      <div class="row justify-content-center">
        <form action="{{ route('postLogin') }}" method="POST" class="col-lg-4 d-flex flex-column align-items-center">
          @csrf
          <h3 class="title">LOGIN</h3>
          <input type="email" name="email" placeholder="Email Address" required value="{{ old('email') }}">
          <span class="text-danger">
            @error('email')
              {{ $message }}
            @enderror
          </span>
          <input type="password" name="password" placeholder="Password" required >
          <span class="text-danger">
            @error('password')
              {{ $message }}
            @enderror
          </span>
          <button type="submit">Login</button>
          <p class="register">don't have an account yet? <a href="{{ route('auth.register') }}">Register</a></p>
        </form>
      </div>
    </div>
  </section>   

@endsection