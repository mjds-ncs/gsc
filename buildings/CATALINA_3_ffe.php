<?php
require_once '../db.php';
include '../includes/header.php';

/* =========================
   INSERT MULTIPLE ITEMS
========================= */
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['save'])) {

    $room = $_POST['room'];
    $categories = $_POST['category'];
    $types = $_POST['type'];
    $codes = $_POST['code'];
    $descriptions = $_POST['description'];
    $quantities = $_POST['quantity'];
    $conditions = $_POST['condition'];

    $stmt = $conn->prepare("INSERT INTO catalina_3
        (room, category, type, code, description, quantity, `condition`) 
        VALUES (?, ?, ?, ?, ?, ?, ?)");

    for ($i = 0; $i < count($categories); $i++) {
        $stmt->bind_param(
            "sssssis",
            $room,
            $categories[$i],
            $types[$i],
            $codes[$i],
            $descriptions[$i],
            $quantities[$i],
            $conditions[$i]
        );
        $stmt->execute();
    }

    $stmt->close();
    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
}

/* =========================
   DELETE
========================= */
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $stmt = $conn->prepare("DELETE FROM catalina_3 WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
}

/* =========================
   UPDATE
========================= */
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {

    $stmt = $conn->prepare("UPDATE catalina_3 SET 
        room=?, category=?, type=?, code=?, description=?, quantity=?, `condition`=? 
        WHERE building=?");

    $stmt->bind_param(
        "sssssisi",
        $_POST['room'],
        $_POST['category'],
        $_POST['type'],
        $_POST['code'],
        $_POST['description'],
        $_POST['quantity'],
        $_POST['condition'],
        $_POST['id']
    );

    $stmt->execute();
    $stmt->close();
    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Catalina 3 Inventory</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
/* Print Styles */
@media print {
    body * { visibility: hidden; }
    #printSummary, #printSummary * { visibility: visible; }
    #printSummary { position: absolute; left:0; top:0; width:100%; }
    .print-header { text-align: center; margin-bottom: 20px; }
    .print-footer { text-align: center; margin-top: 20px; }
}
</style>
</head>
<a href="buildings.php" class="btn btn-outline-primary d-flex align-items-center" style="width: fit-content;">
  <!-- Left arrow SVG icon -->
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16" style="margin-right: 6px;">
    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 1-.5.5H2.707l4.147 4.146a.5.5 0 0 1-.708.708l-5-5a.5.5 0 0 1 0-.708l5-5a.5.5 0 1 1 .708.708L2.707 7.5H14.5A.5.5 0 0 1 15 8z"/>
  </svg>
  Back to Buildings
</a>
<body class="bg-light">

<div class="container mt-5">

<h2 class="mb-4 text-center">Catalina 3 <span class="text-danger">FFE</span> INVENTORY</h2>

<!-- Buttons -->
<button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addModal">
    Add Inventory
</button>
<button class="btn btn-secondary mb-3" id="printBtn">
    Print Summary
</button>

<!-- Inventory Table -->
<table class="table table-bordered table-striped table-hover bg-white" id="inventoryTable">
<thead class="table-primary">
<tr>
<th>ID</th>
<th>Room</th>
<th>Category</th>
<th>Type</th>
<th>Code</th>
<th>Description</th>
<th>Quantity</th>
<th>Condition</th>
<th>Actions</th>
</tr>
<tr>
<?php for($i=0;$i<8;$i++): ?>
<th><input class="form-control form-control-sm filter-input" data-col="<?= $i ?>"></th>
<?php endfor; ?>
<th></th>
</tr>
</thead>
<tbody>
<?php
$result = $conn->query("SELECT * FROM catalina_3 ORDER BY building DESC");
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>{$row['building']}</td>
        <td>{$row['room']}</td>
        <td>{$row['category']}</td>
        <td>{$row['type']}</td>
        <td>{$row['code']}</td>
        <td>{$row['description']}</td>
        <td>{$row['quantity']}</td>
        <td>{$row['condition']}</td>
        <td>
            <button class='btn btn-sm btn-success editBtn'
                data-id='{$row['building']}'
                data-room='{$row['room']}'
                data-category='{$row['category']}'
                data-type='{$row['type']}'
                data-code='{$row['code']}'
                data-description='{$row['description']}'
                data-quantity='{$row['quantity']}'
                data-condition='{$row['condition']}'
                data-bs-toggle='modal'
                data-bs-target='#editModal'>
                Update
            </button>
            <a href='?delete={$row['id']}'
               class='btn btn-sm btn-danger'
               onclick=\"return confirm('Delete this item?')\">Delete</a>
        </td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='9' class='text-center'>No records found</td></tr>";
}
?>
</tbody>
</table>
</div>
    
<!-- PRINT SUMMARY (HIDDEN) -->
<div id="printSummary" style="display:none;">
    <div class="print-header">
        <h2>CATALINA 3 INVENTORY SUMMARY</h2>
        <p>Date: <?= date('d M Y') ?></p>
        <hr>
    </div>

    <table border="1" cellpadding="5" cellspacing="0" style="width:100%; border-collapse: collapse;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Room</th>
                <th>Category</th>
                <th>Type</th>
                <th>Code</th>
                <th>Description</th>
                <th>Quantity</th>
                <th>Condition</th>
            </tr>
        </thead>
        <tbody id="printTableBody"></tbody>
    </table>

    <div class="print-footer">
        <hr>
        <p>Company Confidential</p>
    </div>
</div>

<!-- ADD MODAL -->
<div class="modal fade" id="addModal">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<form method="POST">
<div class="modal-header">
<h5>Add Inventory (Multiple Items)</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
</div>
<div class="modal-body">
<select name="room" class="form-select mb-3" required>
    <option value="">Select Room</option>
    <optgroup label="Computer Laboratories">
        <?php for($i=1;$i<=6;$i++) echo "<option>Computer Laboratory $i</option>"; ?>
    </optgroup>
    <optgroup label="Interactive Laboratories">
        <?php for($i=1;$i<=2;$i++) echo "<option>Interactive Laboratory $i</option>"; ?>
    </optgroup>
    <optgroup label="Wireless Laboratories">
        <?php for($i=1;$i<=4;$i++) echo "<option>Wireless Laboratory $i</option>"; ?>
    </optgroup>
</select>

<div id="itemsContainer">
    <div class="item-group border p-3 mb-3">
        <select name="category[]" class="form-select mb-2" required>
            <option value="">Select Category</option>
            <option>Electronics</option>
            <option>Furniture</option>
            <option>Office Supplies</option>
        </select>
        <select name="type[]" class="form-select mb-2" required>
            <option value="">Select Type</option>
            <option>Projector</option>
            <option>Computer</option>
            <option>Desk</option>
            <option>Chair</option>
        </select>
        <input type="text" name="code[]" class="form-control mb-2" placeholder="Code" required>
        <textarea name="description[]" class="form-control mb-2" placeholder="Description"></textarea>
        <input type="number" name="quantity[]" class="form-control mb-2" placeholder="Quantity" required>
        <select name="condition[]" class="form-select mb-2" required>
            <option value="">Select Condition</option>
            <option>Good</option>
            <option>Fair</option>
            <option>Needs Repair</option>
        </select>
    </div>
</div>

<button type="button" class="btn btn-secondary" onclick="addItem()">+ Add Another Item</button>
</div>
<div class="modal-footer">
<button type="submit" name="save" class="btn btn-primary">Save All</button>
</div>
</form>
</div>
</div>
</div>

<!-- EDIT MODAL -->
<div class="modal fade" id="editModal">
<div class="modal-dialog">
<div class="modal-content">
<form method="POST">
<div class="modal-header">
<h5>Update Inventory</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
</div>
<div class="modal-body">

<input type="hidden" name="id" id="edit_id">

<select name="room" id="edit_room" class="form-select mb-2" required>
    <option value="">Select Room</option>
    <optgroup label="Computer Laboratories">
        <?php for($i=1;$i<=6;$i++) echo "<option>Computer Laboratory $i</option>"; ?>
    </optgroup>
    <optgroup label="Interactive Laboratories">
        <?php for($i=1;$i<=2;$i++) echo "<option>Interactive Laboratory $i</option>"; ?>
    </optgroup>
    <optgroup label="Wireless Laboratories">
        <?php for($i=1;$i<=4;$i++) echo "<option>Wireless Laboratory $i</option>"; ?>
    </optgroup>
</select>

<select name="category" id="edit_category" class="form-select mb-2" required>
    <option value="">Select Category</option>
    <option>Electronics</option>
    <option>Furniture</option>
    <option>Office Supplies</option>
</select>

<select name="type" id="edit_type" class="form-select mb-2" required>
    <option value="">Select Type</option>
    <option>Projector</option>
    <option>Computer</option>
    <option>Desk</option>
    <option>Chair</option>
</select>

<input type="text" name="code" id="edit_code" class="form-control mb-2" required>
<textarea name="description" id="edit_description" class="form-control mb-2"></textarea>
<input type="number" name="quantity" id="edit_quantity" class="form-control mb-2" required>

<select name="condition" id="edit_condition" class="form-select mb-2" required>
    <option value="">Select Condition</option>
    <option>Good</option>
    <option>Fair</option>
    <option>Needs Repair</option>
</select>

</div>
<div class="modal-footer">
<button type="submit" name="update" class="btn btn-success">Update</button>
</div>
</form>
</div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
// Add new item
function addItem() {
    const container = document.getElementById('itemsContainer');
    const item = container.firstElementChild.cloneNode(true);
    item.querySelectorAll('input, textarea').forEach(input => input.value = '');
    container.appendChild(item);
}

// Auto-fill edit modal
document.querySelectorAll('.editBtn').forEach(button => {
    button.addEventListener('click', function() {
        edit_id.value = this.dataset.id;
        edit_room.value = this.dataset.room;
        edit_category.value = this.dataset.category;
        edit_type.value = this.dataset.type;
        edit_code.value = this.dataset.code;
        edit_description.value = this.dataset.description;
        edit_quantity.value = this.dataset.quantity;
        edit_condition.value = this.dataset.condition;
    });
});

// Live filter
const filters = document.querySelectorAll('.filter-input');
const rows = document.querySelector("#inventoryTable tbody");
filters.forEach(input => {
    input.addEventListener("input", () => {
        const values = Array.from(filters).map(f => f.value.toLowerCase());
        Array.from(rows.rows).forEach(row => {
            let show = true;
            Array.from(row.cells).forEach((cell, i) => {
                if (i < 8 && values[i] && !cell.textContent.toLowerCase().includes(values[i])) {
                    show = false;
                }
            });
            row.style.display = show ? "" : "none";
        });
    });
});

// Print Summary
document.getElementById('printBtn').addEventListener('click', () => {
    const printBody = document.getElementById('printTableBody');
    const tableRows = document.querySelectorAll("#inventoryTable tbody tr");

    printBody.innerHTML = '';

    tableRows.forEach(row => {
        if (row.style.display !== 'none') {
            const clonedRow = row.cloneNode(true);
            clonedRow.removeChild(clonedRow.lastElementChild); // Remove actions
            printBody.appendChild(clonedRow);
        }
    });

    const printDiv = document.getElementById('printSummary');
    printDiv.style.display = 'block';
    window.print();
    printDiv.style.display = 'none';
});
</script>

</body>
</html>