<?php
include '../includes/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>
<div class="container mt-5">
    <h1 class="text-center mb-4">GOOD SAMARITAN COLLEGES ADMIN DEPARTMENT</h1>

    <div class="container mt-5">
        <div class="row g-3">
            
            <!-- Row 1 -->
            <div class="col-3"><button class="btn btn-success w-100" 
            data-bs-toggle="modal" data-bs-target="#OPModal">OFFICE OF THE PRESIDENT</button></div>
                    <div class="modal fade" id="OPModal" tabindex="-1" aria-labelledby="OPModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content" style="min-height: 20vh;">
                        <div class="modal-header justify-content-center position-relative">
                            <h5 class="modal-title text-center" id="unitModalLabel">SELECT PROCESS</h5>
                            <button type="button" class="btn-close position-absolute end-0" 
                            data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="d-flex flex-wrap justify-content-center gap-2">
                                        <button type="button" class="btn btn-primary me-2" 
                                        onclick="window.location.href='not_avail.php'">ACQUISITION</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">MEMORANDUM RECEIPT</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">ISSUANCE</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">INVENTORY</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">FORMS</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">REPORT</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">EMPLOYEES</button>
                                    </div>
                        </div>
                    </div>
                    </div> 


            <div class="col-3"><button class="btn btn-success w-100" 
            data-bs-toggle="modal" data-bs-target="#financeModal">FINANCE</button></div>


                <!--FINANCE UNIT Modal-->
               <div class="modal fade" id="financeModal" tabindex="-1" aria-labelledby="peregrinModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">


                        <div class="modal-content">
                        <div class="modal-header justify-content-center position-relative">
                            <h5 class="modal-title text-center" id="peregrinModalLabel">FINANCE UNIT</h5>
                            <button type="button" class="btn-close position-absolute end-0"
                            data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body text-center">
                            <button type="button" class="btn btn-primary m-2"
                            data-bs-toggle="modal" data-bs-target="#unit1Modal">CASHIER-ASSESSMENT</button>

                            <button type="button" class="btn btn-primary m-2"
                            data-bs-toggle="modal" data-bs-target="#unit2Modal">BOOKSHOP</button>

                            <button type="button" class="btn btn-primary m-2"
                            data-bs-toggle="modal" data-bs-target="#unit3Modal">ACCOUNTING</button>

                            <button type="button" class="btn btn-primary m-2"
                            data-bs-toggle="modal" data-bs-target="#unit4Modal">PROPERTY MANAGEMENT & INVENTORY</button>
                        </div>
                        </div>
                        </div>
                    </div>


                    <!-- CASHIER Modal -->
                    <div class="modal fade" id="unit1Modal" tabindex="-1" aria-labelledby="unit1ModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content" style="min-height: 20vh;">
                        <div class="modal-header justify-content-center position-relative">
                            <h5 class="modal-title text-center" id="unitModalLabel">SELECT PROCESS</h5>
                            <button type="button" class="btn-close position-absolute end-0" 
                            data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="d-flex flex-wrap justify-content-center gap-2">
                                        <button type="button" class="btn btn-primary me-2" 
                                        onclick="window.location.href='not_avail.php'">ACQUISITION</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">MEMORANDUM RECEIPT</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">ISSUANCE</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">INVENTORY</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">FORMS</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">REPORT</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">EMPLOYEES</button>
                                    </div>
                        </div>
                    </div>
                    </div>


                    <!-- BOOKSHOP Modal -->
                    <div class="modal fade" id="unit2Modal" tabindex="-1" aria-labelledby="unit2ModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content" style="min-height: 20vh;">
                        <div class="modal-header justify-content-center position-relative">
                            <h5 class="modal-title text-center" id="unitModalLabel">SELECT PROCESS</h5>
                            <button type="button" class="btn-close position-absolute end-0" 
                            data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="d-flex flex-wrap justify-content-center gap-2">
                                        <button type="button" class="btn btn-primary me-2" 
                                        onclick="window.location.href='not_avail.php'">ACQUISITION</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">MEMORANDUM RECEIPT</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">ISSUANCE</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">INVENTORY</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">FORMS</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">REPORT</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">EMPLOYEES</button>
                                    </div>
                        </div>
                    </div>
                    </div>
                    
                    <!-- ACCOUNTING Modal -->
                    <div class="modal fade" id="unit3Modal" tabindex="-1" aria-labelledby="unit3ModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content" style="min-height: 20vh;">
                        <div class="modal-header justify-content-center position-relative">
                            <h5 class="modal-title text-center" id="unitModalLabel">SELECT PROCESS</h5>
                            <button type="button" class="btn-close position-absolute end-0" 
                            data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="d-flex flex-wrap justify-content-center gap-2">
                                        <button type="button" class="btn btn-primary me-2" 
                                        onclick="window.location.href='not_avail.php'">ACQUISITION</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">MEMORANDUM RECEIPT</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">ISSUANCE</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">INVENTORY</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">FORMS</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">REPORT</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">EMPLOYEES</button>
                                    </div>
                        </div>
                    </div>
                    </div> 
                    
                    <!-- BOOKSHOP Modal -->
                    <div class="modal fade" id="unit3Modal" tabindex="-1" aria-labelledby="unit3ModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content" style="min-height: 20vh;">
                        <div class="modal-header justify-content-center position-relative">
                            <h5 class="modal-title text-center" id="unitModalLabel">SELECT PROCESS</h5>
                            <button type="button" class="btn-close position-absolute end-0" 
                            data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="d-flex flex-wrap justify-content-center gap-2">
                                        <button type="button" class="btn btn-primary me-2" 
                                        onclick="window.location.href='not_avail.php'">ACQUISITION</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">MEMORANDUM RECEIPT</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">ISSUANCE</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">INVENTORY</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">FORMS</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">REPORT</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">EMPLOYEES</button>
                                    </div>
                        </div>
                    </div>
                    </div>         
                    
                    <!-- PMI Modal -->
                    <div class="modal fade" id="unit4Modal" tabindex="-1" aria-labelledby="unit4ModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content" style="min-height: 20vh;">
                        <div class="modal-header justify-content-center position-relative">
                            <h5 class="modal-title text-center" id="unitModalLabel">SELECT PROCESS</h5>
                            <button type="button" class="btn-close position-absolute end-0" 
                            data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="d-flex flex-wrap justify-content-center gap-2">
                                        <button type="button" class="btn btn-primary me-2" 
                                        onclick="window.location.href='not_avail.php'">ACQUISITION</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">MEMORANDUM RECEIPT</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">ISSUANCE</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">INVENTORY</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">FORMS</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">REPORT</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">EMPLOYEES</button>
                                    </div>
                        </div>
                    </div>
                    </div>                  

                <div class="col-3"><button class="btn btn-success w-100" 
                    data-bs-toggle="modal" data-bs-target="#RegistrarModal">REGISTRAR</button></div>

                    <!-- REGISTRAR Modal -->
                    <div class="modal fade" id="RegistrarModal" tabindex="-1" aria-labelledby="RegistrarModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content" style="min-height: 20vh;">
                        <div class="modal-header justify-content-center position-relative">
                            <h5 class="modal-title text-center" id="unitModalLabel">SELECT PROCESS</h5>
                            <button type="button" class="btn-close position-absolute end-0" 
                            data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="d-flex flex-wrap justify-content-center gap-2">
                                        <button type="button" class="btn btn-primary me-2" 
                                        onclick="window.location.href='not_avail.php'">ACQUISITION</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">MEMORANDUM RECEIPT</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">ISSUANCE</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">INVENTORY</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">FORMS</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">REPORT</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">EMPLOYEES</button>
                                    </div>
                        </div>
                    </div>
                    </div>

                <div class="col-3"><button class="btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#ODModal">
                OPERATIONS DEVELOPMENT</button></div>

                 <!-- REGISTRAR Modal -->
                    <div class="modal fade" id="ODModal" tabindex="-1" aria-labelledby="ODModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content" style="min-height: 20vh;">
                        <div class="modal-header justify-content-center position-relative">
                            <h5 class="modal-title text-center" id="unitModalLabel">SELECT PROCESS</h5>
                            <button type="button" class="btn-close position-absolute end-0" 
                            data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="d-flex flex-wrap justify-content-center gap-2">
                                        <button type="button" class="btn btn-primary me-2" 
                                        onclick="window.location.href='not_avail.php'">ACQUISITION</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">MEMORANDUM RECEIPT</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">ISSUANCE</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">INVENTORY</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">FORMS</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">REPORT</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">EMPLOYEES</button>
                                    </div>
                        </div>
                    </div>
                    </div>

            <!-- Row 2 -->
            <div class="col-3"><button class="btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#marketingModal">
            MARKETING AND ADMISSIONS</button></div>
                 <!-- MARKETING Modal -->
                    <div class="modal fade" id="marketingModal" tabindex="-1" aria-labelledby="marketingModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content" style="min-height: 20vh;">
                        <div class="modal-header justify-content-center position-relative">
                            <h5 class="modal-title text-center" id="unitModalLabel">SELECT PROCESS</h5>
                            <button type="button" class="btn-close position-absolute end-0" 
                            data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="d-flex flex-wrap justify-content-center gap-2">
                                        <button type="button" class="btn btn-primary me-2" 
                                        onclick="window.location.href='not_avail.php'">ACQUISITION</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">MEMORANDUM RECEIPT</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">ISSUANCE</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">INVENTORY</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">FORMS</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">REPORT</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">EMPLOYEES</button>
                                    </div>
                        </div>
                    </div>
                    </div>


            <div class="col-3"><button class="btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#gsoModal">GENERAL SERVICE OFFICE</button></div>
                 <!-- GSO Modal -->
                    <div class="modal fade" id="gsoModal" tabindex="-1" aria-labelledby="gsoModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content" style="min-height: 20vh;">
                        <div class="modal-header justify-content-center position-relative">
                            <h5 class="modal-title text-center" id="unitModalLabel">SELECT PROCESS</h5>
                            <button type="button" class="btn-close position-absolute end-0" 
                            data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="d-flex flex-wrap justify-content-center gap-2">
                                        <button type="button" class="btn btn-primary me-2" 
                                        onclick="window.location.href='not_avail.php'">ACQUISITION</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">MEMORANDUM RECEIPT</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">ISSUANCE</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">INVENTORY</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">FORMS</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">REPORT</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">EMPLOYEES</button>
                                    </div>
                        </div>
                    </div>
                    </div>


            <div class="col-3"><button class="btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#fmoModal">
                FACILITIES MANAGEMENT OFFICE</button></div>
                 <!-- MARKETING Modal -->
                    <div class="modal fade" id="fmoModal" tabindex="-1" aria-labelledby="fmoModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content" style="min-height: 20vh;">
                        <div class="modal-header justify-content-center position-relative">
                            <h5 class="modal-title text-center" id="unitModalLabel">SELECT PROCESS</h5>
                            <button type="button" class="btn-close position-absolute end-0" 
                            data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="d-flex flex-wrap justify-content-center gap-2">
                                        <button type="button" class="btn btn-primary me-2" 
                                        onclick="window.location.href='not_avail.php'">ACQUISITION</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">MEMORANDUM RECEIPT</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">ISSUANCE</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">INVENTORY</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">FORMS</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">REPORT</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">EMPLOYEES</button>
                                    </div>
                        </div>
                    </div>
                    </div>


            <div class="col-3"><button class="btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#itsModal">
            INFO TECH SERVICES</button></div>

                 <!-- ITS Modal -->
                    <div class="modal fade" id="itsModal" tabindex="-1" aria-labelledby="itsModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content" style="min-height: 20vh;">
                        <div class="modal-header justify-content-center position-relative">
                            <h5 class="modal-title text-center" id="unitModalLabel">SELECT PROCESS</h5>
                            <button type="button" class="btn-close position-absolute end-0" 
                            data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="d-flex flex-wrap justify-content-center gap-2">
                                        <button type="button" class="btn btn-primary me-2" 
                                        onclick="window.location.href='not_avail.php'">ACQUISITION</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">MEMORANDUM RECEIPT</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">ISSUANCE</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">INVENTORY</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">FORMS</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">REPORT</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">EMPLOYEES</button>
                                    </div>
                        </div>
                    </div>
                    </div>


            <!-- Row 3 -->
            <div class="col-3"><button class="btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#laModal">LEGAL AFFAIRS</button></div>

                 <!-- ITS Modal -->
                    <div class="modal fade" id="laModal" tabindex="-1" aria-labelledby="laModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content" style="min-height: 20vh;">
                        <div class="modal-header justify-content-center position-relative">
                            <h5 class="modal-title text-center" id="unitModalLabel">SELECT PROCESS</h5>
                            <button type="button" class="btn-close position-absolute end-0" 
                            data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="d-flex flex-wrap justify-content-center gap-2">
                                        <button type="button" class="btn btn-primary me-2" 
                                        onclick="window.location.href='not_avail.php'">ACQUISITION</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">MEMORANDUM RECEIPT</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">ISSUANCE</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">INVENTORY</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">FORMS</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">REPORT</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">EMPLOYEES</button>
                                    </div>
                        </div>
                    </div>
                    </div>

            <div class="col-3"><button class="btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#hrModal">HUMAN RESOURCES</button></div>

                 <!-- ITS Modal -->
                    <div class="modal fade" id="hrModal" tabindex="-1" aria-labelledby="hrModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content" style="min-height: 20vh;">
                        <div class="modal-header justify-content-center position-relative">
                            <h5 class="modal-title text-center" id="unitModalLabel">SELECT PROCESS</h5>
                            <button type="button" class="btn-close position-absolute end-0" 
                            data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="d-flex flex-wrap justify-content-center gap-2">
                                        <button type="button" class="btn btn-primary me-2" 
                                        onclick="window.location.href='not_avail.php'">ACQUISITION</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">MEMORANDUM RECEIPT</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">ISSUANCE</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">INVENTORY</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">FORMS</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">REPORT</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">EMPLOYEES</button>
                                    </div>
                        </div>
                    </div>
                    </div>

            <div class="col-3"><button class="btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#caModal">CORPORATE AFFAIRS</button></div>

                 <!-- ITS Modal -->
                    <div class="modal fade" id="caModal" tabindex="-1" aria-labelledby="caModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content" style="min-height: 20vh;">
                        <div class="modal-header justify-content-center position-relative">
                            <h5 class="modal-title text-center" id="unitModalLabel">SELECT PROCESS</h5>
                            <button type="button" class="btn-close position-absolute end-0" 
                            data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="d-flex flex-wrap justify-content-center gap-2">
                                        <button type="button" class="btn btn-primary me-2" 
                                        onclick="window.location.href='not_avail.php'">ACQUISITION</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">MEMORANDUM RECEIPT</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">ISSUANCE</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">INVENTORY</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">FORMS</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">REPORT</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">EMPLOYEES</button>
                                    </div>
                        </div>
                    </div>
                    </div>

            <div class="col-3"><button class="btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#feuModal">FEU</button></div>

                 <!-- ITS Modal -->
                    <div class="modal fade" id="feuModal" tabindex="-1" aria-labelledby="feuModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content" style="min-height: 20vh;">
                        <div class="modal-header justify-content-center position-relative">
                            <h5 class="modal-title text-center" id="unitModalLabel">SELECT PROCESS</h5>
                            <button type="button" class="btn-close position-absolute end-0" 
                            data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="d-flex flex-wrap justify-content-center gap-2">
                                        <button type="button" class="btn btn-primary me-2" 
                                        onclick="window.location.href='not_avail.php'">ACQUISITION</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">MEMORANDUM RECEIPT</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">ISSUANCE</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">INVENTORY</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">FORMS</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">REPORT</button>
                                        <button type="button" class="btn btn-primary" 
                                        onclick="window.location.href='not_avail.php'">EMPLOYEES</button>
                                    </div>
                        </div>
                    </div>
                    </div>


        </div>
    </div>

</div>

</body>
</html>