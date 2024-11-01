<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="sidebar-menu d-lg-flex" id="sidebar-menu">
                <li>
                    <a href="#">
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="pe-40">
                        <span>Government Directory</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="pe-40">
                        <span>Emergency Hotline</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="pe-40">
                        <span>Services</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="pe-40">
                        <span>About Us</span>
                    </a>
                </li>
                @auth
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="pe-40">
                            <span>Bayanihan</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="#"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Barangay 1</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}" class="pe-40">
                            <span>About Us</span>
                        </a>
                    </li>
                @endauth
                @if (Route::has('login'))
                    @guest
                        <li>
                            <a href="{{ route('login') }}" class="pe-40">
                                <span>Login</span>
                            </a>
                        </li>
                        @if (Route::has('register'))
                            <li>
                                <a href="{{ route('register') }}" class="pe-40">
                                    <span>Register</span>
                                </a>
                            </li>
                        @endif
                    @endguest
                @endif
            </ul>
        </div>
    </div>
</nav>