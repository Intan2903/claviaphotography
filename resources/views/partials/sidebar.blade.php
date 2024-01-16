<nav class="col-md-2 d-none d-md-block sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.paket') }}">
                    <i class="fas fa-camera" style="color: #3498db;"></i> Daftar Paket</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/pesanan">
                    <i class="fas fa-shopping-cart" style="color: #3498db;"></i> Pesanan
                </a>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link" href="#">
                  <i class="fas fa-exchange-alt" style="color: #3498db;"></i> Transaksi
              </a>
          </li> --}}
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.fotografer') }}">
                    <i class="fas fa-camera" style="color: #3498db;"></i> Fotografer
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('logout') }}" style="text-decoration: none">
                    <i class="fas fa-sign-out-alt" style="color: #3498db;"></i> Keluar
                </a>
            </li>
        </ul>
    </div>
</nav>