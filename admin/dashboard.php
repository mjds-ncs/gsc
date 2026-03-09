<?php
session_start();


include '../includes/log.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

 <div class="card shadow p-4">
        <h2 class="text-primary">ADMIN DASHBOARD</h2>
        <p>Hello, Admin</p>

        
        <a href="../buildings/buildings.php" class="btn btn-primary mb-2">Buildings</a>
        <a href="../academic_dep/academic.php" class="btn btn-primary mb-2">Academic Department</a>
        <a href="../admin_dep/admin.php" class="btn btn-primary mb-2">Admin Department</a>
        <a href="../buildings/buildings.php" class="btn btn-primary mb-2">Add Building</a>
        <a href="../buildings/buildings.php" class="btn btn-primary mb-2">Add Academic Department</a>
        <a href="../buildings/buildings.php" class="btn btn-primary mb-2">Add Admin Department</a>

        
    </div>
</body>
</html>