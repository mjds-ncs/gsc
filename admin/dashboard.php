<?php
session_start();
include '../includes/header.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Hover effect using Bootstrap utilities */
        .card-hover:hover {
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.3);
            transform: translateY(-5px);
            transition: all 0.3s ease;
        }
        .card-hover{
        transition: 0.3s;
        }

        .card-hover:hover{
        background-color: #44ACFF;
        color: white;
        }
    </style>
</head>

<body class="bg-light">

<div class="card shadow p-4 mb-4">
  

    <div class="container mt-4">
        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-md-4">
                <a href="../buildings/buildings.php" class="text-decoration-none">
                    <div class="card card-hover border border-dark shadow-sm rounded-4 d-flex align-items-center justify-content-center py-5 text-center text-dark">
                        <h5>Buildings</h5>
                    </div>
                </a>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4">
                <a href="../academic_dep/academic.php" class="text-decoration-none">
                    <div class="card card-hover border border-dark shadow-sm rounded-4 d-flex align-items-center justify-content-center py-5 text-center text-dark">
                        <h5>Academic Department</h5>
                    </div>
                </a>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4">
                <a href="../admin_dep/admin.php" class="text-decoration-none">
                    <div class="card card-hover border border-dark shadow-sm rounded-4 d-flex align-items-center justify-content-center py-5 text-center text-dark">
                        <h5>Admin Department</h5>
                    </div>
                </a>
            </div>

            <!-- Card 4 -->
            <div class="col-md-4">
                <a href="../buildings/buildings.php" class="text-decoration-none">
                    <div class="card card-hover border border-dark shadow-sm rounded-4 d-flex align-items-center justify-content-center py-5 text-center text-dark">
                        <h5>Add Building</h5>
                    </div>
                </a>
            </div>

            <!-- Card 5 -->
            <div class="col-md-4">
                <a href="../buildings/buildings.php" class="text-decoration-none">
                    <div class="card card-hover border border-dark shadow-sm rounded-4 d-flex align-items-center justify-content-center py-5 text-center text-dark">
                        <h5>Add Academic Department</h5>
                    </div>
                </a>
            </div>

            <!-- Card 6 -->
            <div class="col-md-4">
                <a href="../buildings/buildings.php" class="text-decoration-none">
                    <div class="card card-hover border border-dark shadow-sm rounded-4 d-flex align-items-center justify-content-center py-5 text-center text-dark">
                        <h5>Add Admin Department</h5>
                    </div>
                </a>
            </div>

            

        </div>
    </div>  
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>