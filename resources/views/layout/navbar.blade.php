<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 py-2">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="#">Green Cup</a>

        <!-- Navbar toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
            aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav gap-2 text-center mx-auto py-2">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('consumer') ? 'active' : '' }}" href="{{ url('/consumer') }}">Consumer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('seller') ? 'active' : '' }}" href="{{ url('/seller') }}">Sellers</a>
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

                <!-- Icons Below menu items on Mobile -->
                <div class="d-flex justify-content-center gap-2 d-lg-none mt-3">
                    <button class="btn btn-outline-light"><i class="bi bi-search"></i></button>
                    <button class="btn btn-outline-light"><i class="bi bi-person-circle"></i></button>
                </div>
            </ul>
        </div>

        <!-- Icons beside menu on Desktop -->
        <div class="d-none d-lg-flex gap-2">
            <button class="btn btn-outline-light"><i class="bi bi-search"></i></button>
            <button class="btn btn-outline-light"><i class="bi bi-person-circle"></i></button>
        </div>
    </div>
</nav>
