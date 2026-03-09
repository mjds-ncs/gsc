<?php
session_start();
require_once __DIR__ . "/../db.php";  // safest way

if (!isset($conn)) {
    die("Database connection not found.");
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();

    $_SESSION['username'] = $row['username'];
    $_SESSION['role'] = $row['role'];

    if ($row['role'] == 'admin') {
        header("Location: ../admin/dashboard.php");
    } else {
        header("Location: ../clerk/dashboard.php");
    }
} else {
    echo "Invalid login credentials!";
}
?>