@extends('master')

@section('content')

<!-- ✅ Enhanced Styling -->


<!-- ✅ Page Title -->
<h4 class="text-white text-3xl font-bold mb-6 animate-pulse">🌿 Consumer Management</h4>

<!-- ✅ Search Bar -->
<div class="table-controls">
    <div class="search-box">
        <input type="text" id="searchInput" placeholder="🔍 Search by Name..." onkeyup="searchConsumerTable()">
    </div>
</div>

<!-- ✅ Consumer Table -->
<div class="consumer-section">
    <table id="consumerTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Cup's Brand</th>
                <th>Points</th>
                <th>Transactions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>
                    <div class="member-info">
                        <img src="https://i.pravatar.cc/100?img=1" alt="Avatar">
                        <div class="member-text">
                            <div class="member-name">Sokleng Ry</div>
                            <div class="member-label">Platinum Member</div>
                        </div>
                    </div>
                </td>
                <td>070786545</td>
                <td>Toul Kork<br><span class="member-label">Phnom Penh</span></td>
                <td>Starbucks</td>
                <td>2100</td>
                <td>$5000</td>
            </tr>
            <tr>
                <td>2</td>
                <td>
                    <div class="member-info">
                        <img src="https://i.pravatar.cc/100?img=2" alt="Avatar">
                        <div class="member-text">
                            <div class="member-name">Sovandara Phallim</div>
                            <div class="member-label">Silver Member</div>
                        </div>
                    </div>
                </td>
                <td>070768390</td>
                <td>Toul Kork<br><span class="member-label">Phnom Penh</span></td>
                <td>Amazon</td>
                <td>500</td>
                <td>$1000</td>
            </tr>
        </tbody>
    </table>

    <!-- ✅ Pagination -->
    <div class="pagination">
        <span>&lt;</span>
        <span class="active">1</span>
        <span>2</span>
        <span>3</span>
        <span>...</span>
        <span>100</span>
        <span>&gt;</span>
    </div>
</div>

<!-- ✅ JavaScript for Search -->
<script>
    function searchConsumerTable() {
        const input = document.getElementById("searchInput").value.toLowerCase();
        const rows = document.querySelectorAll("#consumerTable tbody tr");

        rows.forEach(row => {
            const nameCell = row.querySelector(".member-name");
            if (nameCell) {
                const name = nameCell.innerText.toLowerCase();
                row.style.display = name.includes(input) ? "" : "none";
            }
        });
    }
</script>

@endsection
