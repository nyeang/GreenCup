<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Green Cup Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background-color: #004d00; /* Dark green */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #f1f1f1;
        }

        .navbar {
            background-color: #1c1c1c;
        }

        .navbar-brand {
            color: #28a745 !important;
            font-weight: bold;
            font-size: 1.3rem;
        }

        .nav-link {
            color: #f1f1f1 !important;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            color: #a8ffbf !important;
        }

        .nav-link.active {
            background-color: rgba(40, 167, 69, 0.15);
            color: #28a745 !important;
            font-weight: 600;
            border: 1px solid #28a745;
            border-radius: 10px;
            padding: 6px 12px;
            box-shadow: inset 0 0 4px rgba(0, 255, 128, 0.3);
        }

        .navbar-toggler {
            border: none;
        }

        .navbar-toggler:focus {
            box-shadow: none;
        }

        .d-lg-none.mt-3 .btn,
        .d-none.d-lg-flex .btn {
            border-radius: 50%;
            padding: 8px;
            width: 42px;
            height: 42px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        main.container {
            /* background-color: #006400; */
            padding: 2rem 1rem;
            /* border-top-left-radius: 16px;
            border-top-right-radius: 16px; */
        }

        .card {
            background-color: #fff;
            color: #000;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.15);
            padding: 1.2rem;
            margin-bottom: 1rem;
            transition: transform 0.2s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        @media (max-width: 767px) {
            .navbar-nav .nav-item {
                margin-bottom: 0.25rem;
            }
        }

        .dashboard-box {
    min-height: 140px;
    font-size: 1.2rem;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 12px;
    transition: all 0.3s ease;
}

.dashboard-box:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 16px rgba(0,0,0,0.15);
    cursor: pointer;
}

    </style>
</head>
<body>

<!-- Navbar -->
@include('layout.navbar')
<!-- End Navbar -->

<main class="container">
    @yield('content')
</main>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
