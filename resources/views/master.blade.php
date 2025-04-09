<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Green Cup</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #00cc44 30%, #b2f5c4 100%);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #ffffff;
            min-height: 100vh;
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
            padding: 2rem 1rem;
        }

        .dashboard-box {
    height: 200px;
    background: linear-gradient(145deg, #f9f9f9, #e0ffe8);
    color: #1a1a1a; /* Darker text */
    font-size: 1.3rem;
    font-weight: 800; /* Extra bold */
    letter-spacing: 0.3px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.05); /* Gentle depth */
    border-radius: 24px;
    border: 2px solid #45e0c2;
    box-shadow:
        0 8px 20px rgba(0, 0, 0, 0.15),
        0 2px 5px rgba(0, 0, 0, 0.1),
        inset 0 1px 2px rgba(255, 255, 255, 0.6);
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    transition: all 0.3s ease;
    position: relative;
    z-index: 1;
}



        .dashboard-box::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 24px;
            background: linear-gradient(120deg, rgba(255, 255, 255, 0.35), transparent);
            pointer-events: none;
            z-index: 0;
        }

        .dashboard-box:hover {
            transform: translateY(-10px);
            box-shadow:
                0 14px 28px rgba(0, 0, 0, 0.3),
                0 24px 48px rgba(0, 0, 0, 0.2),
                inset 0 1px 2px rgba(255, 255, 255, 0.5);
            cursor: pointer;
        }


        @media (max-width: 767px) {
            .dashboard-box {
                height: 160px;
            }
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

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>