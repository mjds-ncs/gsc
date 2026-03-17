<?php
session_start();
require_once __DIR__ . "/../db.php";

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT * FROM users WHERE username=? AND password=?");
$stmt->bind_param("ss", $username, $password);
$stmt->execute();

$result = $stmt->get_result();

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