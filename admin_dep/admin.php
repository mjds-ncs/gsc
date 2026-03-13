<?php 
include '../includes/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Department</title>
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
<h1 class="text-center mb-4">GOOD SAMARITAN COLLEGES ADMIN DEPARTMENT</h1>

<div class="row g-3">

<!-- OFFICE OF THE PRESIDENT -->
<div class="col-md-4">
    <div class="card text-center" style="height:5rem; cursor:pointer;"
        data-bs-toggle="modal" data-bs-target="#OPModal">
        <div class="card-body">
            <h5 class="card-text">OFFICE OF THE PRESIDENT</h5>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="OPModal" tabindex="-1">
<div class="modal-dialog modal-dialog-centered modal-lg">
<div class="modal-content">

<div class="modal-header justify-content-center position-relative">
    <h5 class="modal-title text-center">SELECT PROCESS</h5>
    <button type="button" class="btn-close position-absolute end-0"
    data-bs-dismiss="modal"></button>
        </div>
            <div class="modal-body text-center">
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">ACQUISITION</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">MEMORANDUM RECEIPT</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">ISSUANCE</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">INVENTORY</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">FORMS</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">REPORT</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">EMPLOYEES</button>
            </div>
        </div>
    </div>
</div>


<!-- FINANCE -->
<div class="col-md-4">
    <div class="card text-center" style="height:5rem; cursor:pointer;"
        data-bs-toggle="modal" data-bs-target="#financeModal">
        <div class="card-body">
            <h5 class="card-text">FINANCE</h5>
        </div>
    </div>
</div>

<!-- Finance Modal -->
<div class="modal fade" id="financeModal" tabindex="-1">
<div class="modal-dialog modal-dialog-centered modal-lg">
<div class="modal-content">

<div class="modal-header justify-content-center position-relative">
<h5 class="modal-title text-center">FINANCE UNIT</h5>
<button type="button" class="btn-close position-absolute end-0"
data-bs-dismiss="modal"></button>
</div>

        <div class="modal-body text-center">
            <button class="btn btn-primary m-2" data-bs-toggle="modal" data-bs-target="#cashModal">
            CASHIER - ASSESSMENT</button>
            <button class="btn btn-primary m-2" data-bs-toggle="modal" data-bs-target="#bookModal">
            BOOKSHOP</button>

            <button class="btn btn-primary m-2" data-bs-toggle="modal" data-bs-target="#accModal">
            ACCOUNTING</button>

            <button class="btn btn-primary m-2" data-bs-toggle="modal" data-bs-target="#propModal">
            PROPERTY MANAGEMENT & INVENTORY</button>
        </div>
     </div>
    </div>
</div>

<!-- CASHIER Modal -->
<div class="modal fade" id="cashModal" tabindex="-1">
<div class="modal-dialog modal-dialog-centered modal-lg">
<div class="modal-content">

<div class="modal-header justify-content-center position-relative">
    <h5 class="modal-title text-center">SELECT PROCESS</h5>
    <button type="button" class="btn-close position-absolute end-0"
    data-bs-dismiss="modal"></button>
        </div>
            <div class="modal-body text-center">
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">ACQUISITION</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">MEMORANDUM RECEIPT</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">ISSUANCE</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">INVENTORY</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">FORMS</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">REPORT</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">EMPLOYEES</button>
            </div>
        </div>
    </div>
</div>

<!-- BOOKSHOP Modal -->
<div class="modal fade" id="bookModal" tabindex="-1">
<div class="modal-dialog modal-dialog-centered modal-lg">
<div class="modal-content">

<div class="modal-header justify-content-center position-relative">
    <h5 class="modal-title text-center">SELECT PROCESS</h5>
    <button type="button" class="btn-close position-absolute end-0"
    data-bs-dismiss="modal"></button>
        </div>
            <div class="modal-body text-center">
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">ACQUISITION</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">MEMORANDUM RECEIPT</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">ISSUANCE</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">INVENTORY</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">FORMS</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">REPORT</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">EMPLOYEES</button>
            </div>
        </div>
    </div>
</div>

<!-- ACCOUNTING Modal -->
<div class="modal fade" id="accModal" tabindex="-1">
<div class="modal-dialog modal-dialog-centered modal-lg">
<div class="modal-content">

<div class="modal-header justify-content-center position-relative">
    <h5 class="modal-title text-center">SELECT PROCESS</h5>
    <button type="button" class="btn-close position-absolute end-0"
    data-bs-dismiss="modal"></button>
        </div>
            <div class="modal-body text-center">
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">ACQUISITION</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">MEMORANDUM RECEIPT</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">ISSUANCE</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">INVENTORY</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">FORMS</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">REPORT</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">EMPLOYEES</button>
            </div>
        </div>
    </div>
</div>

<!-- PROPERTY Modal -->
<div class="modal fade" id="propModal" tabindex="-1">
<div class="modal-dialog modal-dialog-centered modal-lg">
<div class="modal-content">

<div class="modal-header justify-content-center position-relative">
    <h5 class="modal-title text-center">SELECT PROCESS</h5>
    <button type="button" class="btn-close position-absolute end-0"
    data-bs-dismiss="modal"></button>
        </div>
            <div class="modal-body text-center">
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">ACQUISITION</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">MEMORANDUM RECEIPT</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">ISSUANCE</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">INVENTORY</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">FORMS</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">REPORT</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">EMPLOYEES</button>
            </div>
        </div>
    </div>
</div>

<!-- REGISTRAR -->
<div class="col-md-4">
    <div class="card text-center" style="height:5rem; cursor:pointer;"
        data-bs-toggle="modal" data-bs-target="#RegistrarModal">
        <div class="card-body">
            <h5 class="card-text">REGISTRAR</h5>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="RegistrarModal" tabindex="-1">
<div class="modal-dialog modal-dialog-centered modal-lg">
<div class="modal-content">

<div class="modal-header justify-content-center position-relative">
    <h5 class="modal-title text-center">SELECT PROCESS</h5>
    <button type="button" class="btn-close position-absolute end-0"
    data-bs-dismiss="modal"></button>
        </div>
            <div class="modal-body text-center">
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">ACQUISITION</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">MEMORANDUM RECEIPT</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">ISSUANCE</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">INVENTORY</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">FORMS</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">REPORT</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">EMPLOYEES</button>
            </div>
        </div>
    </div>
</div>

<!-- OPERATIONS DEVELOPMENT -->
<div class="col-md-4">
    <div class="card text-center" style="height:5rem; cursor:pointer;"
        data-bs-toggle="modal" data-bs-target="#ODModal">
        <div class="card-body">
            <h5 class="card-text">OPERATIONS DEVELOPMENT</h5>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="ODModal" tabindex="-1">
<div class="modal-dialog modal-dialog-centered modal-lg">
<div class="modal-content">

<div class="modal-header justify-content-center position-relative">
    <h5 class="modal-title text-center">SELECT PROCESS</h5>
    <button type="button" class="btn-close position-absolute end-0"
    data-bs-dismiss="modal"></button>
        </div>
            <div class="modal-body text-center">
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">ACQUISITION</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">MEMORANDUM RECEIPT</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">ISSUANCE</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">INVENTORY</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">FORMS</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">REPORT</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">EMPLOYEES</button>
            </div>
        </div>
    </div>
</div>

<!-- MARKETING -->
<div class="col-md-4">
    <div class="card text-center" style="height:5rem; cursor:pointer;"
        data-bs-toggle="modal" data-bs-target="#marketingModal">
        <div class="card-body">
            <h5 class="card-text">MARKETING & ADMISSIONS</h5>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="marketingModal" tabindex="-1">
<div class="modal-dialog modal-dialog-centered modal-lg">
<div class="modal-content">

<div class="modal-header justify-content-center position-relative">
    <h5 class="modal-title text-center">SELECT PROCESS</h5>
    <button type="button" class="btn-close position-absolute end-0"
    data-bs-dismiss="modal"></button>
        </div>
            <div class="modal-body text-center">
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">ACQUISITION</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">MEMORANDUM RECEIPT</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">ISSUANCE</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">INVENTORY</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">FORMS</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">REPORT</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">EMPLOYEES</button>
            </div>
        </div>
    </div>
</div>

<!-- GSO -->
<div class="col-md-4">
    <div class="card text-center" style="height:5rem; cursor:pointer;"
        data-bs-toggle="modal" data-bs-target="#gsoModal">
        <div class="card-body">
            <h5 class="card-text">GENERAL SERVICE OFFICE</h5>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="gsoModal" tabindex="-1">
<div class="modal-dialog modal-dialog-centered modal-lg">
<div class="modal-content">

<div class="modal-header justify-content-center position-relative">
    <h5 class="modal-title text-center">SELECT PROCESS</h5>
    <button type="button" class="btn-close position-absolute end-0"
    data-bs-dismiss="modal"></button>
        </div>
            <div class="modal-body text-center">
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">ACQUISITION</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">MEMORANDUM RECEIPT</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">ISSUANCE</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">INVENTORY</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">FORMS</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">REPORT</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">EMPLOYEES</button>
            </div>
        </div>
    </div>
</div>

<!-- FMO -->
<div class="col-md-4">
    <div class="card text-center" style="height:5rem; cursor:pointer;"
        data-bs-toggle="modal" data-bs-target="#fmoModal">
        <div class="card-body">
            <h5 class="card-text">FACILITIES MANAGEMENT OFFICE</h5>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="fmoModal" tabindex="-1">
<div class="modal-dialog modal-dialog-centered modal-lg">
<div class="modal-content">

<div class="modal-header justify-content-center position-relative">
    <h5 class="modal-title text-center">SELECT PROCESS</h5>
    <button type="button" class="btn-close position-absolute end-0"
    data-bs-dismiss="modal"></button>
        </div>
            <div class="modal-body text-center">
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">ACQUISITION</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">MEMORANDUM RECEIPT</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">ISSUANCE</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">INVENTORY</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">FORMS</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">REPORT</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">EMPLOYEES</button>
            </div>
        </div>
    </div>
</div>

<!-- ITS -->
<div class="col-md-4">
    <div class="card text-center" style="height:5rem; cursor:pointer;"
        data-bs-toggle="modal" data-bs-target="#itsModal">
        <div class="card-body">
            <h5 class="card-text">INFO TECH SERVICES</h5>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="itsModal" tabindex="-1">
<div class="modal-dialog modal-dialog-centered modal-lg">
<div class="modal-content">

<div class="modal-header justify-content-center position-relative">
    <h5 class="modal-title text-center">SELECT PROCESS</h5>
    <button type="button" class="btn-close position-absolute end-0"
    data-bs-dismiss="modal"></button>
        </div>
            <div class="modal-body text-center">
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">ACQUISITION</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">MEMORANDUM RECEIPT</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">ISSUANCE</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">INVENTORY</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">FORMS</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">REPORT</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">EMPLOYEES</button>
            </div>
        </div>
    </div>
</div>

<!-- LEGAL -->
<div class="col-md-4">
    <div class="card text-center" style="height:5rem; cursor:pointer;"
        data-bs-toggle="modal" data-bs-target="#laModal">
        <div class="card-body">
            <h5 class="card-text">LEGAL AFFAIRS</h5>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="laModal" tabindex="-1">
<div class="modal-dialog modal-dialog-centered modal-lg">
<div class="modal-content">

<div class="modal-header justify-content-center position-relative">
    <h5 class="modal-title text-center">SELECT PROCESS</h5>
    <button type="button" class="btn-close position-absolute end-0"
    data-bs-dismiss="modal"></button>
        </div>
            <div class="modal-body text-center">
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">ACQUISITION</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">MEMORANDUM RECEIPT</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">ISSUANCE</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">INVENTORY</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">FORMS</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">REPORT</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">EMPLOYEES</button>
            </div>
        </div>
    </div>
</div>

<!-- HR -->
<div class="col-md-4">
    <div class="card text-center" style="height:5rem; cursor:pointer;"
        data-bs-toggle="modal" data-bs-target="#hrModal">
        <div class="card-body">
            <h5 class="card-text">HUMAN RESOURCES</h5>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="hrModal" tabindex="-1">
<div class="modal-dialog modal-dialog-centered modal-lg">
<div class="modal-content">

<div class="modal-header justify-content-center position-relative">
    <h5 class="modal-title text-center">SELECT PROCESS</h5>
    <button type="button" class="btn-close position-absolute end-0"
    data-bs-dismiss="modal"></button>
        </div>
            <div class="modal-body text-center">
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">ACQUISITION</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">MEMORANDUM RECEIPT</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">ISSUANCE</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">INVENTORY</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">FORMS</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">REPORT</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">EMPLOYEES</button>
            </div>
        </div>
    </div>
</div>

<!-- CORPORATE -->
<div class="col-md-4">
    <div class="card text-center" style="height:5rem; cursor:pointer;"
        data-bs-toggle="modal" data-bs-target="#caModal">
        <div class="card-body">
            <h5 class="card-text">CORPORATE AFFAIRS</h5>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="caModal" tabindex="-1">
<div class="modal-dialog modal-dialog-centered modal-lg">
<div class="modal-content">

<div class="modal-header justify-content-center position-relative">
    <h5 class="modal-title text-center">SELECT PROCESS</h5>
    <button type="button" class="btn-close position-absolute end-0"
    data-bs-dismiss="modal"></button>
        </div>
            <div class="modal-body text-center">
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">ACQUISITION</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">MEMORANDUM RECEIPT</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">ISSUANCE</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">INVENTORY</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">FORMS</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">REPORT</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">EMPLOYEES</button>
            </div>
        </div>
    </div>
</div>

<!-- FEU -->
<div class="col-md-4">
    <div class="card text-center" style="height:5rem; cursor:pointer;"
        data-bs-toggle="modal" data-bs-target="#feuModal">
        <div class="card-body">
            <h5 class="card-text">FEU</h5>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="feuModal" tabindex="-1">
<div class="modal-dialog modal-dialog-centered modal-lg">
<div class="modal-content">

<div class="modal-header justify-content-center position-relative">
    <h5 class="modal-title text-center">SELECT PROCESS</h5>
    <button type="button" class="btn-close position-absolute end-0"
    data-bs-dismiss="modal"></button>
        </div>
            <div class="modal-body text-center">
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">ACQUISITION</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">MEMORANDUM RECEIPT</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">ISSUANCE</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">INVENTORY</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">FORMS</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">REPORT</button>
                <button class="btn btn-primary m-1" onclick="window.location.href='not_avail.php'">EMPLOYEES</button>
            </div>
        </div>
    </div>
</div>
</div>
</div>

</body>
</html>