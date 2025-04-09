@extends('master')

@section('content')

<!-- ✅ Seller Table Styling -->


<!-- ✅ Page Title -->
<h4 class="text-white text-3xl font-bold mb-6 animate-pulse">🛍️ Seller Management</h4>

<!-- ✅ Search Bar -->
<div class="table-controls">
    <div class="search-box">
        <input type="text" id="searchInput" placeholder="🔍 Search by Name..." onkeyup="searchSellerTable()">
    </div>
</div>

<!-- ✅ Table Section -->
<div class="seller-table-container">
    <table class="seller-table" id="sellerTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Contact</th>
                <th>Location</th>
                <th>Brand</th>
                <th>Total Sold</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>
                    <div class="seller-info">
                        <img src="https://i.pravatar.cc/100?img=3" alt="Seller">
                        <div>
                            <div class="name">Brown Coffee TK</div>
                            <div class="email">browncfkt1@gmail.com</div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="bold">070786545</div>
                    <small>browncfkt1@gmail.com</small>
                </td>
                <td>
                    Toul Kork<br><small class="email">Phnom Penh</small>
                </td>
                <td><div class="bold">Starbucks</div></td>
                <td>500 Cups<br><small>1000 drinks</small></td>
                <td class="actions">
                    <i class="fa-solid fa-user-slash suspend" title="Suspend" onclick="confirmAction('suspend')"></i>
                    <i class="fa-solid fa-ban ban" title="Ban" onclick="confirmAction('ban')"></i>
                    <i class="fa-solid fa-pen-to-square edit" title="Edit" onclick="confirmAction('edit')"></i>
                    <i class="fa-solid fa-trash delete" title="Delete" onclick="confirmAction('delete')"></i>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>
                    <div class="seller-info">
                        <img src="https://i.pravatar.cc/100?img=4" alt="Seller">
                        <div>
                            <div class="name">Starbucks TTP</div>
                            <div class="email">starbucksttp1@gmail.com</div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="bold">070768390</div>
                    <small>starbucksttp1@gmail.com</small>
                </td>
                <td>
                    Toul Tompoung<br><small class="email">Phnom Penh</small>
                </td>
                <td><div class="bold">Amazon</div></td>
                <td>500 Cups<br><small>1000 drinks</small></td>
                <td class="actions">
                    <i class="fa-solid fa-user-slash suspend" title="Suspend" onclick="confirmAction('suspend')"></i>
                    <i class="fa-solid fa-ban ban" title="Ban" onclick="confirmAction('ban')"></i>
                    <i class="fa-solid fa-pen-to-square edit" title="Edit" onclick="confirmAction('edit')"></i>
                    <i class="fa-solid fa-trash delete" title="Delete" onclick="confirmAction('delete')"></i>
                </td>
            </tr>
        </tbody>
    </table>

    <!-- ✅ Pagination -->
    <div class="pagination">
        <a href="#">&lt;</a>
        <a href="#" class="active">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <span>...</span>
        <a href="#">10</a>
        <a href="#">&gt;</a>
    </div>
</div>

<!-- ✅ JavaScript for Filter & Confirm -->
<script>
    function searchSellerTable() {
        const input = document.getElementById("searchInput").value.toLowerCase();
        const rows = document.querySelectorAll("#sellerTable tbody tr");

        rows.forEach(row => {
            const nameCell = row.querySelector(".name");
            const name = nameCell ? nameCell.innerText.toLowerCase() : "";
            row.style.display = name.includes(input) ? "" : "none";
        });
    }

    function confirmAction(actionType) {
        const messages = {
            suspend: "Are you sure you want to suspend this seller?",
            ban: "Are you sure you want to permanently ban this seller?",
            edit: "Do you want to edit this seller's details?",
            delete: "Are you sure you want to delete this seller? This cannot be undone!"
        };

        if (confirm(messages[actionType])) {
            alert(`${actionType.charAt(0).toUpperCase() + actionType.slice(1)} action confirmed.`);
        }
    }
</script>

@endsection
