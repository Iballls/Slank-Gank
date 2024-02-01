<div class="clever-main-menu">
    <div class="classy-nav-container breakpoint-off">
        <!-- Menu -->
        <nav class="classy-navbar justify-content-between" id="cleverNav">

            <!-- Logo -->
            <a class="nav-brand" href="/"><img src="{{ asset('img/icons') }}/bank_sampah.jpeg" width="50" alt=""> BANK SAMPAH</a>

            <!-- Navbar Toggler -->
            <div class="classy-navbar-toggler">
                <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>

            <!-- Menu -->
            <div class="classy-menu">

                <!-- Close Button -->
                <div class="classycloseIcon">
                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                </div>

                <!-- Nav Start -->
                <div class="classynav">
                    <ul>
                        <li><a href="/" class="{{ Request::is('/') || Request::is('home') ? 'text-primary' : '' }}">Home</a></li>
                        <li><a href="{{ route('about') }}" class="{{ Request::is('about') ? 'text-primary' : '' }}">Tentang</a></li>
                        <li><a href="{{ route('contact') }}" class="{{ Request::is('contact') ? 'text-primary' : '' }}">Kontak</a></li>
                        <li><a href="{{ route('data_sampah') }}" class="{{ Request::segment(1) == 'data_sampah' ? 'text-primary' : '' }}">Data Sampah</a></li>
                        <li><a href="{{ route('galeri') }}" class="{{ Request::segment(1) == 'galeri' ? 'text-primary' : '' }}">Galeri</a></li>
                        <li><a href="{{ route('pengumuman') }}" class="{{ Request::segment(1) == 'pengumuman' ? 'text-primary' : '' }}">Pengumuman</a></li>
                        <li><a href="{{ route('data_transaksi') }}" class="{{ Request::segment(1) == 'data_transaksi' ? 'text-primary' : '' }}">Data Transaksi</a></li>
                        @guest
                        <li><a href="{{ route('register.nasabah') }}" class="{{ Request::segment(1) == 'nasabah-register' ? 'text-primary' : '' }}">Pendaftaran Nasabah</a></li>
                        @endguest
                    </ul>


                    @auth
                    <div class="login-state d-flex align-items-center">
                        <div class="user-name mr-30">
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" id="userName" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ auth()->user()->name }}</a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userName">
                                    <a class="dropdown-item" href="{{ route('admin.index') }}">Dashboard</a>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                    @endauth

                </div>
                <!-- Nav End -->
            </div>
        </nav>
    </div>
</div>