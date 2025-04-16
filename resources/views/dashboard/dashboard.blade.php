@extends('master')

@section('content')
<h4 class="text-white text-3xl font-bold mb-4" style="margin-left: 12px;">
    🌱 Dashboard
</h4>

<div class="container py-4 fade-in-up">
    <div class="row g-4">
        <!-- LEFT COLUMN -->
        <div class="col-12 col-lg-6 d-flex flex-column gap-4">
            <!-- Total Sellers and Customers -->
            <div class="row g-4">
                <!-- Total Sellers -->
                <div class="col-6">
                    <div class="dashboard-box h-100">
                        <h6 class="title">Total Sellers</h6>
                        <h2>10 <i class="bi bi-person-gear ms-1"></i></h2>
                    </div>
                </div>
                <!-- Total Customers -->
                <div class="col-6">
                    <div class="dashboard-box h-100">
                        <h6 class="title">Total Customers</h6>
                        <h2>2,123 <i class="bi bi-people-fill ms-1"></i></h2>
                    </div>
                </div>
            </div>

            <!-- Top Customers -->
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

            <!-- Seller Management -->
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

        <!-- RIGHT COLUMN -->
        <div class="col-12 col-lg-6 d-flex flex-column gap-4">
            <!-- Transaction -->
            <div class="dashboard-box">
                <h6 class="title">Transaction</h6>
                <h2>?? <i class="bi bi-person-lines-fill ms-1"></i></h2>
            </div>

            <!-- Revenue Chart -->
            <div class="dashboard-box p-3">
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
                <canvas id="revenueChart" style="width: 100%; height: 344px;"></canvas>
            </div>
        </div>
    </div>
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
