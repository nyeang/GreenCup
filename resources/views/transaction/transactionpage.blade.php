@extends('master')
@section('content')
<!-- Header Section -->
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="text-2xl font-bold text-white">📊 Transaction Overview</h4>
    <button class="btn btn-outline-light rounded-pill px-4">Select Month</button>
</div>

<!-- Overview Cards -->
<div class="row g-4 mb-4">
    <div class="col-md-4">
        <div class="overview-card">
            <h6>Total Cups Sold</h6>
            <h2>12,000</h2>
        </div>
    </div>
    <div class="col-md-4">
        <div class="overview-card">
            <h6>Total Revenue</h6>
            <h2>$5,000</h2>
        </div>
    </div>
    <div class="col-md-4">
        <div class="overview-card">
            <h6>Green Fee Income</h6>
            <h2>$800</h2>
        </div>
    </div>
</div>

<!-- Table Section -->
<div class="transaction-table shadow-sm p-4 rounded bg-white table-responsive">
    <table class="table table-hover align-middle">
        <thead class="table-success">
            <tr>
                <th>Cafe Name</th>
                <th>Cups Sold</th>
                <th>Revenue</th>
                <th>Green Fee</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <div class="d-flex align-items-center gap-2">
                        <img src="https://i.pravatar.cc/40" class="rounded-circle" alt="..." width="40">
                        <div>
                            <strong>Cell Content</strong><br>
                            <small class="text-muted">Sub Content</small>
                        </div>
                    </div>
                </td>
                <td><a href="#">View</a></td>
                <td><a href="#">Link</a></td>
                <td><span class="badge bg-success bg-opacity-25 text-success fw-semibold px-3 py-1">Verified</span></td>
                <td class="actions-cell">
                    <div class="icon-group">
                        <i class="bi bi-pencil-square text-primary"></i>
                        <i class="bi bi-trash3 text-danger"></i>
                        <i class="bi bi-share text-secondary"></i>
                    </div>
                </td>

            </tr>
            <!-- Repeat rows... -->
        </tbody>
    </table>
</div>

@endsection