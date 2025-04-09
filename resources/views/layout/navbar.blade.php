<nav class="navbar navbar-expand-lg navbar-dark px-4 py-3 shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><i class="bi bi-cup-hot-fill me-2"></i>Green Cup</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
            aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarContent">
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
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('monitoring') ? 'active' : '' }}" href="{{ url('/systemmonitoring') }}">
                        <i class="bi bi-graph-up-arrow me-1"></i>System Monitoring
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('account') ? 'active' : '' }}" href="{{ url('/account') }}">
                        <i class="bi bi-person-fill-gear me-1"></i>Account
                    </a>
                </li>

                <!-- Mobile icons -->
                <div class="d-flex justify-content-center gap-2 d-lg-none mt-3">
                    <button class="btn btn-outline-light"><i class="bi bi-search"></i></button>
                    <button class="btn btn-outline-light"><i class="bi bi-person-circle"></i></button>
                </div>
            </ul>
        </div>

        <!-- Desktop icons -->
        <div class="d-none d-lg-flex gap-2">
            <button class="btn btn-outline-light" title="Search"><i class="bi bi-search"></i></button>
            <button class="btn btn-outline-light" title="Profile"><i class="bi bi-person-circle"></i></button>
        </div>
    </div>
</nav>