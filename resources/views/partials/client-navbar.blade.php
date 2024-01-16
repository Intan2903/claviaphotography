<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="/">
      <img src="{{ asset('image') }}/logoo.jpeg" class="navbar-brand-image img-fluid" alt="Barista Cafe Template">
      Clavia Photography
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-lg-auto">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('photographer') ? 'active' : '' }}" href="/photographer">Photographer</a>
        </li>
        @if (Auth::user())
          <li class="nav-item">
            <a class="nav-link">|</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('order') ? 'active' : '' }}" href="/order">Order</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('my-order') ? 'active' : '' }}" href="/my-order">My Order</a>
          </li>
        @endif
        @if (Auth::user())
          <li class="nav-item">
            <a class="btn-inout" href="{{ route('logout') }}">Logout</a>
          </li>
        @else
          <li class="nav-item">
            <a class="btn-inout" href="{{ route('auth.login') }}">Login</a>
          </li>
        @endif
      </ul>
    </div>
  </div>
</nav>