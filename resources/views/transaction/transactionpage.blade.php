@extends('master')
@section('content')
<!-- Header Section -->
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="text-2xl font-bold text-white">📊 Transaction Overview</h4>
    <button class="btn btn-outline-light rounded-pill px-4">Select Month</button>
</div>

<!-- Overview Cards -->
<div class="row g-4 mb-4 fade-in-up">
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

<div class="row mb-4 fade-in-up">
    <div class="col-12">
        <div class="overview-card p-3">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <h6 class="title mb-0">Revenue</h6>
                <select id="revenueRange" class="form-select form-select-sm w-auto">
                    <option value="week">This Week</option>
                    <option value="month">This Month</option>
                    <option value="6months">Last 6 Months</option>
                    <option value="year">This Year</option>
                    <option value="all">All Time</option>
                </select>
            </div>
            <!-- Set width to 100% and height to a smaller value -->
            <canvas id="revenueChart" style="width: 100%; height: 300px;"></canvas>
        </div>             
    </div>
</div>

<!-- Table Section -->
<div class="overview-card transaction-table shadow-sm p-4 bg-white table-responsive fade-in-up">
    <table class="table table-hover align-middle fade-in-up">
        <thead class="table-success fade-in-up">
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




<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('revenueChart').getContext('2d');

    // Create gradient fill
    function getGradient(ctx, chartArea) {
        const gradient = ctx.createLinearGradient(0, chartArea.top, 0, chartArea.bottom);
        gradient.addColorStop(0, 'rgba(0, 130, 93, 0.7)'); // #00825D (Top - darker)
        gradient.addColorStop(0.3, 'rgba(21, 149, 73, 0.55)'); // #159549
        gradient.addColorStop(0.55, 'rgba(26, 153, 68, 0.5)'); // #1A9944
        gradient.addColorStop(0.75, 'rgba(59, 177, 82, 0.45)'); // #3BB152
        gradient.addColorStop(1, 'rgba(166, 253, 126, 0.4)'); // #A6FD7E (Bottom - lighter)
        return gradient;
    }

    let chartDataSets = {
        week: {
            labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
            data: [120, 150, 180, 200, 170, 250, 300]
        },
        month: {
            labels: Array.from({
                length: 30
            }, (_, i) => `${i + 1}`),
            data: Array.from({
                length: 30
            }, () => Math.floor(Math.random() * 500))
        },
        '6months': {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
            data: [1000, 1300, 1250, 1400, 1600, 1750]
        },
        year: {
            labels: ["Q1", "Q2", "Q3", "Q4"],
            data: [3000, 4000, 3500, 5000]
        },
        all: {
            labels: ["2019", "2020", "2021", "2022", "2023", "2024"],
            data: [12000, 14000, 16000, 18000, 20000, 22000]
        }
    };

    // Chart configuration
    let revenueChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: chartDataSets.week.labels,
            datasets: [{
                label: 'Revenue ($)',
                data: chartDataSets.week.data,
                borderColor: '#159549', // Green line
                backgroundColor: function(context) {
                    const chart = context.chart;
                    const {
                        ctx,
                        chartArea
                    } = chart;
                    if (!chartArea) return null;
                    return getGradient(ctx, chartArea);
                },
                fill: true,
                tension: 0.4,
                pointBackgroundColor: '#159549'
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    mode: 'index',
                    intersect: false
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        stepSize: 100
                    }
                }
            },
            animation: {
                onComplete: () => null
            }
        }
    });

    // Update on dropdown change
    document.getElementById('revenueRange').addEventListener('change', function() {
        const selected = this.value;
        const dataset = chartDataSets[selected];
        revenueChart.data.labels = dataset.labels;
        revenueChart.data.datasets[0].data = dataset.data;
        revenueChart.update();
    });
</script>

@endsection