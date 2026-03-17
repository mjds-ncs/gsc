<?php
session_start();
require_once __DIR__ . "/../db.php";

if (!isset($_SESSION['username'])) {
    header("Location: ../login.php");
    exit();
}

$username = $_SESSION['username'];

$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);
$user = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>User Profile</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background:#f4f6f9;
}

.profile-card{
    border:none;
    border-radius:15px;
    box-shadow:0 10px 25px rgba(0,0,0,0.1);
}

.profile-header{
    height:120px;
    background:linear-gradient(135deg,#4e73df,#36b9cc);
    border-radius:15px 15px 0 0;
}

.profile-img{
    width:120px;
    height:120px;
    border-radius:50%;
    object-fit:cover;
    border:5px solid white;
    margin-top:-60px;
    background:white;
}

.label{
    font-weight:600;
    color:#6c757d;
}

.logout-btn{
    background-color:#dc3545;
    border:none;
    color:white;
    padding:8px 20px;
    border-radius:25px;
    font-weight:500;
    transition:all 0.3s ease;
    box-shadow:0 4px 10px rgba(0,0,0,0.15);
}

.logout-btn:hover{
    background-color:#bb2d3b;
    color:white;
    transform:translateY(-2px);
    box-shadow:0 6px 14px rgba(0,0,0,0.25);
}

</style>

</head>
 <a href="../admin/dashboard.php" class="btn btn-outline-dark rounded-3 mt-2 mb-3">
        ← Back
    </a>
<body>

<div class="container py-5">
<div class="row justify-content-center">
<div class="col-md-6">

<div class="card profile-card text-center">

<div class="profile-header"></div>

<div class="card-body">

<!-- Default Empty Profile Image -->
<img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" class="profile-img mb-3">

<h4 class="fw-bold"><?php echo $user['username']; ?></h4>
<p class="text-muted mb-4"><?php echo $user['role']; ?></p>

<div class="text-start px-4">

<p><span class="label">Username:</span> <?php echo $user['username']; ?></p>
<p><span class="label">Role:</span> <?php echo $user['role']; ?></p>

</div>

<div class="mt-4">
    <a href="../landing_page/logout.php" class="btn logout-btn">Logout</a>
</div>

</div>

</div>

</div>
</div>
</div>

</body>
</html>