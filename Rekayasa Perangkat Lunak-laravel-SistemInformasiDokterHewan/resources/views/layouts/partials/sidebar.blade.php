@section('sidebar')
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    @if (Auth::user()->role == 'admin')
        <ul class="nav">
            <li class="nav-item {{ (request()->segment(2) == 'dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <i class="icon-grid menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>

            {{-- <li class="nav-item {{ (request()->segment(2) == 'dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <i class="icon-grid menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li> --}}

            <li class="nav-item {{ (request()->segment(2) == 'daftarcustumer') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('daftarcustumer.index') }}">
                    <i class="ti-user menu-icon"></i>
                    <span class="menu-title">Daftar Customer</span>
                </a>
            </li>



            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                    <i class="ti-heart menu-icon"></i>
                  <span class="menu-title">Pelayanan</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item {{ (request()->segment(1) == 'services') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('services.index') }}">

                            <span class="menu-title">Tambah layanan</span>
                        </a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('services.about') }}">Tentang layanan</a></li>
                  </ul>
                </div>
              </li>

            {{-- <li class="nav-item {{ (request()->segment(1) == 'services') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('services.index') }}">
                    <i class="ti-heart menu-icon"></i>
                    <span class="menu-title">Pelayanan</span>
                </a>
            </li> --}}
            <li class="nav-item {{ (request()->segment(1) == 'reservations') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('reservations.index') }}">
                    <i class="ti-book menu-icon"></i>
                    <span class="menu-title">Reservasi</span>
                </a>
            </li>
        </ul>
    @else
        <ul class="nav">
            <li class="nav-item {{ (request()->segment(2) == 'dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('customer.dashboard') }}">
                    <i class="icon-grid menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>





            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                  <i class="icon-briefcase menu-icon"></i>
                  <span class="menu-title">Layanan</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('reservations.list') }}">Daftar layanan</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('reservations.about') }}">Tentang layanan</a></li>
                  </ul>
                </div>
              </li>


            <li class="nav-item {{ (request()->segment(2) == 'create') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('reservations.create') }}">
                    <i class="icon-book menu-icon"></i>
                    <span class="menu-title">Reservasi</span>
                </a>
            </li>


            <li class="nav-item {{ (request()->segment(2) == 'history' || request()->segment(3) == 'edit') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('reservations.history') }}">
                    <i class="ti-clipboard menu-icon"></i>
                    <span class="menu-title">Riwayat Reservasi</span>
                </a>
            </li>
        </ul>
    @endif
</nav>
@show
