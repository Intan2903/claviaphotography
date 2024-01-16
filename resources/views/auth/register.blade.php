@extends('layout.client')

@push('css')

<style>
  .about-section {
    background-color: #C1CCD0;
    height: 100vh;
  }

  .title {
    color: #206D61;
    margin-bottom: 30px;
  }

  .input {
    width: 100%;
    border: none;
    background-color: white;
    padding: 10px 20px;
    border-radius: 10px;
    margin-bottom: 10px;
    color: #206D61
  }

  .input::placeholder {
    font-size: 14px;
    opacity: 50%;
  }

  .input:focus {
    outline: none;
  }

  button {
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

  .register {
    font-size: 15px;
    margin-top: 10px;
  }

  .form-check-label {
    color: #206D61;
  }
</style>

@endpush

@section('content')

<section class="about-section section-padding" id="about-section">
  {{-- <div class="section-overlay"></div> --}}
  <div class="container mt-5">
    <br><br><br><br>
    <div class="row justify-content-center">
      <form action="{{ route('postRegister') }}" method="POST" class="col-lg-4 d-flex flex-column align-items-center">
        @csrf
        <h3 class="title">REGISTER</h3>
        <input class="input" type="text" name="name" placeholder="Your Name" required value="{{ old('name') }}">
        <span class="text-danger">
          @error('name')
          {{ $message }}
          @enderror
        </span>
        <input class="input" type="email" name="email" placeholder="Email address" required value="{{ old('email') }}">
        <span class="text-danger">
          @error('email')
          {{ $message }}
          @enderror
        </span>
        <input class="input" type="password" name="password" placeholder="Your Password" required>
        <span class="text-danger">
          @error('password')
          {{ $message }}
          @enderror
        </span>
        <input class="input" type="password" name="password_confirmation" placeholder="Confirm Your Password" required>
        <span class="text-danger">
          @error('password_confirmation')
          {{ $message }}
          @enderror
        </span>
        <div class="w-100 my-2">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin1" required
              value="Laki Laki">
            <label class="form-check-label" for="jenis_kelamin1">
              Male
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin2" required
              value="Perempuan">
            <label class="form-check-label" for="jenis_kelamin2">
              Female
            </label>
          </div>
        </div>
        <button type="submit">Register</button>
        <p class="register">already have an account? <a href="{{ route('auth.login') }}">Login</a></p>
      </form>
    </div>
  </div>
</section>

@endsection