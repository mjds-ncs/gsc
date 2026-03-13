<?php include '../includes/header.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Department</title>

    <!-- Tab Icon -->
    <link rel="icon" type="image/svg+xml" href="../icons/buildings.svg">
</head>
<style>
    .card-hover:hover{
transform: scale(1.05);
transition: 0.3s;
background:#f8f9fa;
}
</style>

 <a href="../admin/dashboard.php" class="btn btn-outline-dark rounded-3 mt-2 mb-3">
        ← Back
    </a>

<body>
    
<div class="card shadow p-4 mb-4">

<div class="container mt-4">
<h1 class="text-center mb-4">GOOD SAMARITAN COLLEGES ACADEMIC</h1>

<div class="row g-4">

<!-- JHS -->
<div class="col-md-4">
    <div class="card card-hover border border-dark shadow-sm rounded-4 d-flex align-items-center justify-content-center py-5 text-center text-dark"
        style="cursor:pointer;"
        data-bs-toggle="modal" data-bs-target="#jhsModal">
        <h5>JHS</h5>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="jhsModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header justify-content-center position-relative">
                <h5 class="modal-title">Choose Inventory</h5>
                <button type="button" class="btn-close position-absolute end-0"
                data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body text-center">
                <button class="btn btn-primary me-2"
                onclick="window.location.href='not_avail.php'">
                NOT AVAILABLE
                </button>

                <button class="btn btn-primary"
                onclick="window.location.href='not_avail.php'">
                NOT AVAILABLE
                </button>
        </div>
    </div>
</div>
</div>


<!-- SHS -->
<div class="col-md-4">
    <div class="card card-hover border border-dark shadow-sm rounded-4 d-flex align-items-center justify-content-center py-5 text-center text-dark"
        style="cursor:pointer;"
        data-bs-toggle="modal" data-bs-target="#shsModal">
        <h5>SHS</h5>
        </div>
        </div>

        <div class="modal fade" id="shsModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

        <div class="modal-header justify-content-center position-relative">
        <h5 class="modal-title">Choose Inventory</h5>
        <button type="button" class="btn-close position-absolute end-0"
        data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body text-center">
            <button class="btn btn-primary me-2"
            onclick="window.location.href='peregrin_2_ffe.php'">
            FFE INVENTORY
            </button>

            <button class="btn btn-primary"
            onclick="window.location.href='not_avail.php'">
            IT DEVICES INVENTORY
            </button>
        </div>

        </div>
    </div>
</div>


<!-- CAHP -->
<div class="col-md-4">
    <div class="card card-hover border border-dark shadow-sm rounded-4 d-flex align-items-center justify-content-center py-5 text-center text-dark"
    style="cursor:pointer;"
    data-bs-toggle="modal" data-bs-target="#peregrin3Modal">
    <h5>CAHP</h5>
    </div>
    </div>

    <div class="modal fade" id="peregrin3Modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

            <div class="modal-header justify-content-center position-relative">
            <h5 class="modal-title">Choose Inventory</h5>
            <button type="button" class="btn-close position-absolute end-0"
            data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body text-center">
            <button class="btn btn-primary me-2"
            onclick="window.location.href='peregrin_3_ffe.php'">
            FFE INVENTORY
            </button>

            <button class="btn btn-primary"
            onclick="window.location.href='not_avail.php'">
            IT DEVICES INVENTORY
            </button>
            </div>

        </div>
    </div>
</div>


<!-- CNAM -->
<div class="col-md-4">
    <div class="card card-hover border border-dark shadow-sm rounded-4 d-flex align-items-center justify-content-center py-5 text-center text-dark"
    style="cursor:pointer;"
    data-bs-toggle="modal" data-bs-target="#catalina1">
    <h5>CNAM</h5>
    </div>
    </div>

    <div class="modal fade" id="catalina1" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header justify-content-center position-relative">
            <h5 class="modal-title">Choose Inventory</h5>
            <button type="button" class="btn-close position-absolute end-0"
            data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body text-center">
            <button class="btn btn-primary me-2"
            onclick="window.location.href='catalina_1_ffe.php'">
            FFE INVENTORY
            </button>

            <button class="btn btn-primary"
            onclick="window.location.href='not_avail.php'">
            IT DEVICES INVENTORY
            </button>
            </div>

        </div>
    </div>
</div>


<!--  CEAS -->
<div class="col-md-4">
    <div class="card card-hover border border-dark shadow-sm rounded-4 d-flex align-items-center justify-content-center py-5 text-center text-dark"
    style="cursor:pointer;"
    data-bs-toggle="modal" data-bs-target="#catalina2">
    <h5>CEAS</h5>
    </div>
    </div>

    <div class="modal fade" id="catalina2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

        <div class="modal-header justify-content-center position-relative">
            <h5 class="modal-title">Choose Inventory</h5>
            <button type="button" class="btn-close position-absolute end-0"
            data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body text-center">
            <button class="btn btn-primary me-2"
            onclick="window.location.href='catalina_2_ffe.php'">
            FFE INVENTORY
            </button>

        <button class="btn btn-primary"
        onclick="window.location.href='not_avail.php'">
        IT DEVICES INVENTORY
        </button>
    </div>

    </div>
    </div>
</div>


<!--  OSA  -->
<div class="col-md-4">
    <div class="card card-hover border border-dark shadow-sm rounded-4 d-flex align-items-center justify-content-center py-5 text-center text-dark"
    style="cursor:pointer;"
    data-bs-toggle="modal" data-bs-target="#catalina3">
    <h5>OSA</h5>
    </div>
    </div>

    <div class="modal fade" id="catalina3" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

        <div class="modal-header justify-content-center position-relative">
            <h5 class="modal-title">Choose Inventory</h5>
            <button type="button" class="btn-close position-absolute end-0"
            data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body text-center">
            <button class="btn btn-primary me-2"
            onclick="window.location.href='catalina_3_ffe.php'">
            FFE INVENTORY
            </button>

            <button class="btn btn-primary"
            onclick="window.location.href='not_avail.php'">
            IT DEVICES INVENTORY
            </button>
        </div>

        </div>
    </div>
</div>
<!--  CLINIC OSA  -->
<div class="col-md-4">
    <div class="card card-hover border border-dark shadow-sm rounded-4 d-flex align-items-center justify-content-center py-5 text-center text-dark"
    style="cursor:pointer;"
    data-bs-toggle="modal" data-bs-target="#catalina3">
    <h5>CLINIC OSA</h5>
    </div>
    </div>

    <div class="modal fade" id="catalina3" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

        <div class="modal-header justify-content-center position-relative">
            <h5 class="modal-title">Choose Inventory</h5>
            <button type="button" class="btn-close position-absolute end-0"
            data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body text-center">
            <button class="btn btn-primary me-2"
            onclick="window.location.href='catalina_3_ffe.php'">
            FFE INVENTORY
            </button>

            <button class="btn btn-primary"
            onclick="window.location.href='not_avail.php'">
            IT DEVICES INVENTORY
            </button>
        </div>

        </div>
    </div>
</div>

<!--  GRADUATE SCHOOL  -->
<div class="col-md-4">
    <div class="card card-hover border border-dark shadow-sm rounded-4 d-flex align-items-center justify-content-center py-5 text-center text-dark"
    style="cursor:pointer;"
    data-bs-toggle="modal" data-bs-target="#catalina3">
    <h5>GRADUATE SCHOOL</h5>
    </div>
    </div>

    <div class="modal fade" id="catalina3" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

        <div class="modal-header justify-content-center position-relative">
            <h5 class="modal-title">Choose Inventory</h5>
            <button type="button" class="btn-close position-absolute end-0"
            data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body text-center">
            <button class="btn btn-primary me-2"
            onclick="window.location.href='catalina_3_ffe.php'">
            FFE INVENTORY
            </button>

            <button class="btn btn-primary"
            onclick="window.location.href='not_avail.php'">
            IT DEVICES INVENTORY
            </button>
        </div>

        </div>
    </div>
</div>

<!--  OSA  -->
<div class="col-md-4">
    <div class="card card-hover border border-dark shadow-sm rounded-4 d-flex align-items-center justify-content-center py-5 text-center text-dark"
    style="cursor:pointer;"
    data-bs-toggle="modal" data-bs-target="#catalina3">
    <h5>OVPAAA</h5>
    </div>
    </div>

    <div class="modal fade" id="catalina3" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

        <div class="modal-header justify-content-center position-relative">
            <h5 class="modal-title">Choose Inventory</h5>
            <button type="button" class="btn-close position-absolute end-0"
            data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body text-center">
            <button class="btn btn-primary me-2"
            onclick="window.location.href='catalina_3_ffe.php'">
            FFE INVENTORY
            </button>

            <button class="btn btn-primary"
            onclick="window.location.href='not_avail.php'">
            IT DEVICES INVENTORY
            </button>
        </div>

        </div>
    </div>
</div>

<!--  OSA  -->
<div class="col-md-4">
    <div class="card card-hover border border-dark shadow-sm rounded-4 d-flex align-items-center justify-content-center py-5 text-center text-dark"
    style="cursor:pointer;"
    data-bs-toggle="modal" data-bs-target="#catalina3">
    <h5>OVPPAA</h5>
    </div>
    </div>

    <div class="modal fade" id="catalina3" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

        <div class="modal-header justify-content-center position-relative">
            <h5 class="modal-title">Choose Inventory</h5>
            <button type="button" class="btn-close position-absolute end-0"
            data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body text-center">
            <button class="btn btn-primary me-2"
            onclick="window.location.href='catalina_3_ffe.php'">
            FFE INVENTORY
            </button>

            <button class="btn btn-primary"
            onclick="window.location.href='not_avail.php'">
            IT DEVICES INVENTORY
            </button>
        </div>

        </div>
    </div>
</div>

<!--  ACADEMIC AFFAIRS  -->
<div class="col-md-4">
    <div class="card card-hover border border-dark shadow-sm rounded-4 d-flex align-items-center justify-content-center py-5 text-center text-dark"
    style="cursor:pointer;"
    data-bs-toggle="modal" data-bs-target="#catalina3">
    <h5>ACADEMIC AFFAIRS CONSULTANT</h5>
    </div>
    </div>

    <div class="modal fade" id="catalina3" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

        <div class="modal-header justify-content-center position-relative">
            <h5 class="modal-title">Choose Inventory</h5>
            <button type="button" class="btn-close position-absolute end-0"
            data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body text-center">
            <button class="btn btn-primary me-2"
            onclick="window.location.href='catalina_3_ffe.php'">
            FFE INVENTORY
            </button>

            <button class="btn btn-primary"
            onclick="window.location.href='not_avail.php'">
            IT DEVICES INVENTORY
            </button>
        </div>

        </div>
    </div>
</div>


<!--  VPAA AFFAIRS  -->
<div class="col-md-4">
    <div class="card card-hover border border-dark shadow-sm rounded-4 d-flex align-items-center justify-content-center py-5 text-center text-dark"
    style="cursor:pointer;"
    data-bs-toggle="modal" data-bs-target="#catalina3">
    <h5>VICE PRESIDENT</h5>
    </div>
    </div>

    <div class="modal fade" id="catalina3" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

        <div class="modal-header justify-content-center position-relative">
            <h5 class="modal-title">Choose Inventory</h5>
            <button type="button" class="btn-close position-absolute end-0"
            data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body text-center">
            <button class="btn btn-primary me-2"
            onclick="window.location.href='catalina_3_ffe.php'">
            FFE INVENTORY
            </button>

            <button class="btn btn-primary"
            onclick="window.location.href='not_avail.php'">
            IT DEVICES INVENTORY
            </button>
        </div>

        </div>
    </div>
</div>

<!--  LIBRARY  -->
<div class="col-md-4">
    <div class="card card-hover border border-dark shadow-sm rounded-4 d-flex align-items-center justify-content-center py-5 text-center text-dark"
    style="cursor:pointer;"
    data-bs-toggle="modal" data-bs-target="#catalina3">
    <h5>LIBRARY</h5>
    </div>
    </div>

    <div class="modal fade" id="catalina3" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

        <div class="modal-header justify-content-center position-relative">
            <h5 class="modal-title">Choose Inventory</h5>
            <button type="button" class="btn-close position-absolute end-0"
            data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body text-center">
            <button class="btn btn-primary me-2"
            onclick="window.location.href='catalina_3_ffe.php'">
            FFE INVENTORY
            </button>

            <button class="btn btn-primary"
            onclick="window.location.href='not_avail.php'">
            IT DEVICES INVENTORY
            </button>
        </div>

        </div>
    </div>
</div>

<!--  IABF  -->
<div class="col-md-4">
    <div class="card card-hover border border-dark shadow-sm rounded-4 d-flex align-items-center justify-content-center py-5 text-center text-dark"
    style="cursor:pointer;"
    data-bs-toggle="modal" data-bs-target="#catalina3">
    <h5>IABF</h5>
    </div>
    </div>

    <div class="modal fade" id="catalina3" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

        <div class="modal-header justify-content-center position-relative">
            <h5 class="modal-title">Choose Inventory</h5>
            <button type="button" class="btn-close position-absolute end-0"
            data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body text-center">
            <button class="btn btn-primary me-2"
            onclick="window.location.href='catalina_3_ffe.php'">
            FFE INVENTORY
            </button>

            <button class="btn btn-primary"
            onclick="window.location.href='not_avail.php'">
            IT DEVICES INVENTORY
            </button>
        </div>

        </div>
    </div>
</div>

<!--  NAL  -->
<div class="col-md-4">
    <div class="card card-hover border border-dark shadow-sm rounded-4 d-flex align-items-center justify-content-center py-5 text-center text-dark"
    style="cursor:pointer;"
    data-bs-toggle="modal" data-bs-target="#catalina3">
    <h5>NAL-CNAM</h5>
    </div>
    </div>

    <div class="modal fade" id="catalina3" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

        <div class="modal-header justify-content-center position-relative">
            <h5 class="modal-title">Choose Inventory</h5>
            <button type="button" class="btn-close position-absolute end-0"
            data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body text-center">
            <button class="btn btn-primary me-2"
            onclick="window.location.href='catalina_3_ffe.php'">
            FFE INVENTORY
            </button>

            <button class="btn btn-primary"
            onclick="window.location.href='not_avail.php'">
            IT DEVICES INVENTORY
            </button>
        </div>

        </div>
    </div>
</div>

<!--  LAB CUSTODIAN  -->
<div class="col-md-4 mx-auto">
    <div class="card card-hover border border-dark shadow-sm rounded-4 d-flex align-items-center justify-content-center py-5 text-center text-dark"
    style="cursor:pointer;"
    data-bs-toggle="modal" data-bs-target="#catalina3">
    <h5>LABORATORY CUSTODIAN</h5>
    </div>
    </div>

    <div class="modal fade" id="catalina3" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

        <div class="modal-header justify-content-center position-relative">
            <h5 class="modal-title">Choose Inventory</h5>
            <button type="button" class="btn-close position-absolute end-0"
            data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body text-center">
            <button class="btn btn-primary me-2"
            onclick="window.location.href='catalina_3_ffe.php'">
            FFE INVENTORY
            </button>

            <button class="btn btn-primary"
            onclick="window.location.href='not_avail.php'">
            IT DEVICES INVENTORY
            </button>
        </div>

        </div>
    </div>
</div>




</div>
</div>
</div>

</body>
</html>