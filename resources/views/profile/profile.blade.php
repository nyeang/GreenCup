@extends('master')

@section('content')




<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>




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

            <div class="dashboard-box" id="map" style="height: 400px;"></div>

        </div>
    </div>
</div>




<style>
    .coffee-icon {
        font-size: 24px;
        line-height: 24px;
        text-align: center;
        background: none;
        border: none;
    }
</style>

<script>
    const map = L.map('map').setView([11.5564, 104.9282], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: 'Map data © <a href="https://openstreetmap.org">OpenStreetMap</a> contributors'
    }).addTo(map);

    const coffeeIcon = L.icon({
        iconUrl: 'https://cdn-icons-png.freepik.com/512/5125/5125143.png?ga=GA1.1.1259686564.1739553011', // coffee icon
        iconSize: [35, 35],       // width and height in pixels
        iconAnchor: [16, 32],     // point of icon that corresponds to marker location
        popupAnchor: [0, -32]     // where the popup opens relative to the iconAnchor
    });

    const branches = [
        { name: 'Branch 1', lat: 11.5564, lng: 104.9282 },
        { name: 'Branch 2', lat: 11.5600, lng: 104.9300 }
    ];

    branches.forEach(branch => {
        L.marker([branch.lat, branch.lng], { icon: coffeeIcon })
            .addTo(map)
            .bindPopup(`<b>${branch.name}</b>`);
    });
</script>




@endsection
