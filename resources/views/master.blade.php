<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Green Cup</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS & Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('footer.css') }}">
    <link rel="stylesheet" href="{{ asset('consumer.css') }}">
    <link rel="stylesheet" href="{{ asset('seller.css') }}">
    <link rel="stylesheet" href="{{ asset('transaction.css') }}">
    <link rel="stylesheet" href="{{ asset('feedback.css') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Add this line for view-specific styles -->
    @stack('styles')
</head>

<body>

    <!-- Navbar -->
    @include('layout.navbar')
    <!-- End Navbar -->

    <div class="page-wrapper">
        <main class="container py-4">
            @yield('content')
        </main>
    </div>

    @include('layout.footer')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <!-- Add this line for view-specific scripts -->
    @stack('scripts')
</body>

</html>
