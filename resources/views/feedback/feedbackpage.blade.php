@extends('master')

@section('content')
<div class="container py-4">

    <!-- 🔠 Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="text-white text-2xl fw-bold">
            <i class="bi bi-chat-dots-fill me-2"></i> Feedback Management
        </h4>
    </div>

    <!-- 📋 Feedback Table -->
    <div class="table-container shadow-sm p-3 bg-white fade-in-up">
        <div class="table-responsive">
            <table class="table table-borderless align-middle mb-0">
                <thead class="text-uppercase small fw-semibold" style="background-color:#1f8a4d; color:white;">
                    <tr class="text-center">
                        <th>User</th>
                        <th>Role</th>
                        <th>Entity</th>
                        <th>Rating</th>
                        <th>Comment</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <!-- Mock Row 1 -->
                    <tr>
                        <td>Sokleng Ry</td>
                        <td><span class="badge bg-primary">Consumer</span></td>
                        <td>Cup #12</td>
                        <td>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star text-muted"></i>
                        </td>
                        <td>Very eco-friendly and easy to clean!</td>
                        <td>2025-04-12</td>
                    </tr>
                    <!-- Mock Row 2 -->
                    <tr>
                        <td>Sovandara Phallim</td>
                        <td><span class="badge bg-primary">Seller</span></td>
                        <td>Cafe #3</td>
                        <td>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star text-muted"></i>
                            <i class="bi bi-star text-muted"></i>
                        </td>
                        <td>Good system but hard to track cup returns.</td>
                        <td>2025-04-10</td>
                    </tr>
                    <!-- Add more as needed -->
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
