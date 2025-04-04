<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 py-2">
        <div class="container-fluid custom-navbar">
            <!-- Logo -->
            <a class="navbar-brand fw-bold" href="#">Green Cup</a>

            <!-- Centered Navbar Links -->
            <div class="nav-center d-none d-lg-block">
                <ul class="navbar-nav flex-row gap-3">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('consumer') ? 'active' : '' }}" href="{{ url('/consumer') }}">Consumer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('sellers') ? 'active' : '' }}" href="{{ url('/seller') }}">Sellers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('transaction') ? 'active' : '' }}" href="{{ url('/transaction') }}">Transaction</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('feedback') ? 'active' : '' }}" href="{{ url('/feedback') }}">Feedback</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('monitoring') ? 'active' : '' }}" href="{{ url('/monitoring') }}">System Monitoring</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('account') ? 'active' : '' }}" href="{{ url('/account') }}">Account</a>
                    </li>
                </ul>
            </div>

            <!-- Right Icons -->
            <div class="d-flex gap-2">
                <button class="btn btn-outline-light"><i class="bi bi-search"></i></button>
                <button class="btn btn-outline-light"><i class="bi bi-person-circle"></i></button>
            </div>
        </div>
    </nav>