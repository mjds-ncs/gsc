<?php
session_start();

if(!isset($_SESSION['user'])){
    header("Location: index.php");
    exit();
}

$user = $_SESSION['user'];
$role = $_SESSION['role'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body{
            font-family: Arial;
            background: #f4f4f4;
            text-align: center;
            margin-top: 100px;
        }
        .box{
            background: white;
            padding: 30px;
            display: inline-block;
            box-shadow: 0 0 10px gray;
        }
        a{
            display: block;
            margin-top: 15px;
            color: red;
            text-decoration: none;
        }
    </style>
</head>
<body>

<div class="box">
    <h1>Dashboard</h1>
    <p>Welcome, <b><?php echo $user; ?></b></p>
    <p>Role: <b><?php echo ucfirst($role); ?></b></p>

    <?php if($role == "admin"){ ?>
        <h3>Admin Dashboard</h3>
        <p>You have full access to the system.</p>
    <?php } else { ?>
        <h3>Clerk Dashboard</h3>
        <p>You have limited access.</p>
    <?php } ?>

    <a href="logout.php">Logout</a>
</div>

</body>
</html>