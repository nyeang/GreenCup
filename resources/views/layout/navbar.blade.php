<nav class="navbar navbar-expand-lg navbar-dark px-4 py-3 shadow-sm" style="background: linear-gradient(90deg, #14532d, #1e7e34);">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <i class="bi bi-cup-hot-fill me-2"></i><span class="fw-bold">Green Cup</span>
        </a>

        <!-- Hamburger Toggle -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
            aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Menu -->
        <div class="collapse navbar-collapse justify-content-between" id="navbarContent">
            <ul class="navbar-nav mx-auto gap-lg-3 gap-2 text-center py-2">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">
                        <i class="bi bi-speedometer2 me-1"></i>Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('consumer') ? 'active' : '' }}" href="{{ url('/consumer') }}">
                        <i class="bi bi-people-fill me-1"></i>Consumer
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('seller') ? 'active' : '' }}" href="{{ url('/seller') }}">
                        <i class="bi bi-shop me-1"></i>Sellers
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('transaction') ? 'active' : '' }}" href="{{ url('/transaction') }}">
                        <i class="bi bi-cash-stack me-1"></i>Transaction
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('feedback') ? 'active' : '' }}" href="{{ url('/feedback') }}">
                        <i class="bi bi-chat-dots-fill me-1"></i>Feedback
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link {{ Request::is('system-monitoring') ? 'active' : '' }}" href="{{ url('/system-montoring') }}">
                        <i class="bi bi-pc-display me-1"></i>System Monitoring
                    </a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('profile') ? 'active' : '' }}" href="{{ url('/profile') }}">
                        <i class="bi bi-person-fill-gear me-1"></i>Profile
                    </a>
                </li>
            </ul>

            <!-- Icons inside hamburger (only visible on mobile) -->
            <div class="d-lg-none d-flex justify-content-center gap-2 mt-3">
                <button class="btn btn-outline-light rounded-circle" title="Search"><i class="bi bi-search"></i></button>
                <button class="btn btn-outline-light rounded-circle" title="Profile"><i class="bi bi-person-circle"></i></button>
            </div>
        </div>

        <!-- Desktop icons (outside collapse) -->
        <div class="d-none d-lg-flex gap-2">
            <button class="btn btn-outline-light rounded-circle" title="Search"><i class="bi bi-search"></i></button>
            <button class="btn btn-outline-light rounded-circle" title="Profile"><i class="bi bi-person-circle"></i></button>
        </div>
    </div>
</nav>
