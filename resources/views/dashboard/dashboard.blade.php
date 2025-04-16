@extends('master')

@section('content')

<h4 class="text-white text-3xl font-bold mb-4" style="margin-left: 12px;">
  🌱 Dashboard
</h4>



<div class="container py-4">
    <div class="row g-4">
        <!-- Total Sellers -->
        <div class="col-md-6 col-lg-3">
            <div class="dashboard-box">
                <h6 class="title">Total Sellers</h6>
                <h2>10 <i class="bi bi-person-gear ms-1"></i></h2>
            </div>
        </div>

        <!-- Total Customers -->
        <div class="col-md-6 col-lg-3">
            <div class="dashboard-box">
                <h6 class="title">Total Customers</h6>
                <h2>2,123 <i class="bi bi-people-fill ms-1"></i></h2>
            </div>
        </div>

        <!-- Transaction -->
        <div class="col-md-6 col-lg-3">
            <div class="dashboard-box">
                <h6 class="title">Transaction</h6>
                <h2>?? <i class="bi bi-person-lines-fill ms-1"></i></h2>
            </div>
        </div>

        <!-- Sales Chart -->
        <div class="col-md-6 col-lg-3">
            <div class="dashboard-box">
                <h6 class="title">Sales</h6>
                <img src="your-chart.png" alt="Sales Graph" style="max-width: 100%; height: 80px;">
            </div>
        </div>

        <!-- Seller Management -->
        <div class="col-md-6 col-lg-6">
            <div class="dashboard-box p-3">
                <h6 class="title">Seller Management <i class="bi bi-gear float-end"></i></h6>
                <div class="input-group mb-2">
                    <input type="text" class="form-control rounded-start" placeholder="Search...">
                    <button class="btn btn-success"><i class="bi bi-search"></i></button>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Neaksen Yeang <i class="bi bi-pencil-square"></i>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Neaksen Yeang <i class="bi bi-pencil-square"></i>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Top Customers -->
        <div class="col-md-6 col-lg-6">
            <div class="dashboard-box p-3">
                <h6 class="title">Top Customers <i class="bi bi-trophy float-end"></i></h6>
                <div class="input-group mb-2">
                    <input type="text" class="form-control rounded-start" placeholder="Search...">
                    <button class="btn btn-success"><i class="bi bi-search"></i></button>
                </div>
                <ol class="list-group list-group-numbered list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Neaksen Yeang <i class="bi bi-box-arrow-up-right"></i>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Neaksen Yeang <i class="bi bi-box-arrow-up-right"></i>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>

@endsection
