<?php include '../includes/header.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Buildings</title>

    <!-- Tab Icon -->
    <link rel="icon" type="image/svg+xml" href="../icons/buildings.svg">
</head>
<style>
    .card:hover{
transform: scale(1.03);
transition: 0.2s;
box-shadow:0 4px 10px rgba(0,0,0,0.2);
}
</style>

 <a href="../admin/dashboard.php" class="btn btn-outline-dark rounded-3 mt-2 mb-3">
        ← Back
    </a>
<body>
<div class="container mt-5">
    <h1 class="text-center mb-4">GOOD SAMARITAN COLLEGES BUILDINGS</h1>

    <div class="row g-3">

       
      <!-- Card for PEREGRIN 1 -->
    <div class="col-md-4">
        <div class="card text-center" style="height: 5rem; cursor: pointer;" 
            data-bs-toggle="modal" data-bs-target="#peregrinModal">
            <div class="card-body">
                <h4 class="card-text">PEREGRIN 1</h4>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="peregrinModal" tabindex="-1" aria-labelledby="peregrinModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header justify-content-center position-relative">
            <h5 class="modal-title text-center" id="peregrinModalLabel">Choose Inventory</h5>
            <button type="button" class="btn-close position-absolute end-0" 
            data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                        <button type="button" class="btn btn-primary me-2" 
                        onclick="window.location.href='not_avail.php'">NOT AVAILABLE</button>
                        <button type="button" class="btn btn-primary" 
                        onclick="window.location.href='not_avail.php'">NOT AVAILABLE</button>
                    </div>
        </div>
    </div>
    </div>


    <!-- Card for PEREGRIN 2 -->
    <div class="col-md-4">
        <div class="card text-center" style="height: 5rem; cursor: pointer;" 
            data-bs-toggle="modal" data-bs-target="#peregrinModal2">
            <div class="card-body">
                <h4 class="card-text">PEREGRIN 2</h4>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="peregrinModal2" tabindex="-1" aria-labelledby="peregrinModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header justify-content-center position-relative">
            <h5 class="modal-title text-center" id="peregrinModalLabel">Choose Inventory</h5>
            <button type="button" class="btn-close position-absolute end-0" 
            data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                        <button type="button" class="btn btn-primary me-2" 
                        onclick="window.location.href='peregrin_2_ffe.php'">FFE INVENTORY</button>
                        <button type="button" class="btn btn-primary" 
                        onclick="window.location.href='not_avail.php'">IT DEVICES INVENTORY</button>
                </div>
        </div>
    </div>
    </div>

    <!-- Card for PEREGRIN 3 -->

    <div class="col-md-4">
        <div class="card text-center" style="height: 5rem; cursor: pointer;" 
            data-bs-toggle="modal" data-bs-target="#peregrinModal3">
            <div class="card-body">
                <h4 class="card-text">PEREGRIN 3</h4>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="peregrinModal3" tabindex="-1" aria-labelledby="peregrinModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header justify-content-center position-relative">
            <h5 class="modal-title text-center" id="peregrinModalLabel">Choose Inventory</h5>
            <button type="button" class="btn-close position-absolute end-0" 
            data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                        <button type="button" class="btn btn-primary me-2" 
                        onclick="window.location.href='peregrin_3_ffe.php'">FFE INVENTORY</button>
                        <button type="button" class="btn btn-primary" 
                        onclick="window.location.href='not_avail.php'">IT DEVICES INVENTORY</button>
                </div>
        </div>
    </div>
    </div>

            <!-- Row 2 -->
    <div class="col-md-4">
        <div class="card text-center" style="height: 5rem; cursor: pointer;" 
            data-bs-toggle="modal" data-bs-target="#catalina1">
            <div class="card-body">
                <h4 class="card-text">CATALINA 1</h4>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="catalina1" tabindex="-1" aria-labelledby="peregrinModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header justify-content-center position-relative">
            <h5 class="modal-title text-center" id="peregrinModalLabel">Choose Inventory</h5>
            <button type="button" class="btn-close position-absolute end-0" 
            data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                        <button type="button" class="btn btn-primary me-2" 
                        onclick="window.location.href='catalina_1_ffe.php'">FFE INVENTORY</button>
                        <button type="button" class="btn btn-primary" 
                        onclick="window.location.href='not_avail.php'">IT DEVICES INVENTORY</button>
                </div>
        </div>
    </div>
    </div>


    <div class="col-md-4">
        <div class="card text-center" style="height: 5rem; cursor: pointer;" 
            data-bs-toggle="modal" data-bs-target="#catalina2">
            <div class="card-body">
                <h4 class="card-text">CATALINA 2</h4>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="catalina2" tabindex="-1" aria-labelledby="peregrinModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header justify-content-center position-relative">
            <h5 class="modal-title text-center" id="peregrinModalLabel">Choose Inventory</h5>
            <button type="button" class="btn-close position-absolute end-0" 
            data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                        <button type="button" class="btn btn-primary me-2" 
                        onclick="window.location.href='catalina_2_ffe.php'">FFE INVENTORY</button>
                        <button type="button" class="btn btn-primary" 
                        onclick="window.location.href='not_avail.php'">IT DEVICES INVENTORY</button>
                </div>
        </div>
    </div>
    </div>

    <div class="col-md-4">
        <div class="card text-center" style="height: 5rem; cursor: pointer;" 
            data-bs-toggle="modal" data-bs-target="#catalina3">
            <div class="card-body">
                <h4 class="card-text">CATALINA 3</h4>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="catalina3" tabindex="-1" aria-labelledby="peregrinModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header justify-content-center position-relative">
            <h5 class="modal-title text-center" id="peregrinModalLabel">Choose Inventory</h5>
            <button type="button" class="btn-close position-absolute end-0" 
            data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                        <button type="button" class="btn btn-primary me-2" 
                        onclick="window.location.href='catalina_3_ffe.php'">FFE INVENTORY</button>
                        <button type="button" class="btn btn-primary" 
                        onclick="window.location.href='not_avail.php'">IT DEVICES INVENTORY</button>
                </div>
        </div>
    </div>
    </div>
        </div>
</div>

</body>
</html>