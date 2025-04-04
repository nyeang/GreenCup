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
            background-color: #004d00; /* Dark green background */
        }

        .custom-navbar {
            display: grid;
            grid-template-columns: auto 1fr auto;
            align-items: center;
        }

        .nav-center {
            justify-self: center;
        }

        .nav-link {
            color: white !important;
        }

        .nav-link.active {
            font-weight: bold;
            background-color: #2b2b2b;
            border-radius: 6px;
            padding: 6px 12px;
            box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.3);
        }

        .card {
            min-height: 180px;
            border-radius: 12px;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    @include('layout.navbar')
    <!-- Navbar -->

    <main class="container py-4">
        @yield('content')
    </main>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
