@extends ('master')
@section('content')

<div class="container py-4">
    <h3 class="text-white mb-4">Dashboard</h3>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="card bg-light shadow-sm p-4 dashboard-box">
                <strong>Total Seller</strong>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-light shadow-sm p-4 dashboard-box">
                <strong>Total User</strong>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-light shadow-sm p-4 dashboard-box">
                <strong>Transaction</strong>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-light shadow-sm p-4 dashboard-box">
                <strong>Top User</strong>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-light shadow-sm p-4 dashboard-box">
                <strong>Seller Management</strong>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-light shadow-sm p-4 dashboard-box">
                <strong>Consumer Management</strong>
            </div>
        </div>
    </div>
</div>

@endsection
