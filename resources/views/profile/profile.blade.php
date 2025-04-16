@extends('master')

@section('content')
<h4 class="text-white text-3xl font-bold mb-4" style="margin-left: 12px;">
    🧑‍💼 Profile Settings
</h4>

<div class="container py-4 fade-in-up">
    <div class="row g-4">
        <!-- LEFT COLUMN -->
        <div class="col-12 col-lg-4 d-flex flex-column gap-4">
            <!-- Profile Picture -->
            <div class="dashboard-box text-center p-4">
                <img src="https://i.pravatar.cc/100" class="rounded-circle" alt="Profile Picture">
                <h5 class="text-white">Admin Name</h5>
                <p class="text-muted">Administrator</p>
            </div>

            <!-- Personal Information -->
            <div class="dashboard-box p-3">
                <h6 class="title">Personal Information</h6>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <strong>Email:</strong> admin@example.com
                    </li>
                    <li class="list-group-item">
                        <strong>Phone:</strong> +855 12 345 678
                    </li>
                </ul>
            </div>

            <!-- Account Settings -->
            <div class="dashboard-box p-3">
                <h6 class="title">Account Settings</h6>
                <button class="btn btn-warning w-100 mb-2">Change Password</button>
                <button class="btn btn-danger w-100">Logout</button>
            </div>
        </div>

        <!-- RIGHT COLUMN -->
        <div class="col-12 col-lg-8 d-flex flex-column gap-4">
            <!-- Sales Analytics -->
            <div class="dashboard-box p-3">
                <h6 class="title">Sales Analytics</h6>
                <div class="d-flex justify-content-between">
                    <div>
                        <h5>Total Revenue</h5>
                        <h2>$25,000 <i class="bi bi-cash-stack ms-1"></i></h2>
                    </div>
                    <div>
                        <h5>Monthly Revenue</h5>
                        <h2>$5,200 <i class="bi bi-calendar-month ms-1"></i></h2>
                    </div>
                </div>
            </div>

            <!-- Recent Activity -->
            <div class="dashboard-box p-3">
                <h6 class="title">Recent Activity</h6>
                <ol class="list-group list-group-numbered list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        New customer order placed <i class="bi bi-check-circle ms-1 text-success"></i>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Stock updated for item #12345 <i class="bi bi-pencil-square ms-1 text-warning"></i>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Price updated for product "ABC" <i class="bi bi-pencil-square ms-1 text-warning"></i>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection
