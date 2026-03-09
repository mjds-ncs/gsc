<?php
session_start();

if (!isset($_SESSION['role']) || $_SESSION['role'] != 'clerk') {
    header("Location: ../landing_page/login.php");
    exit();
    
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>

</head>
<body>

    <h2>Welcome Admin</h2>
    <p>Hello, <?php echo $_SESSION['username']; ?>!</p>

    <h3>Admin Features</h3>
    <ul>
        <li>Manage Inventory</li>
        <li>Manage Users</li>
        <li>View Reports</li>
    </ul>

    <br>

    <!-- Logout Button -->
    <form action="../landing_page/logout.php" method="POST">
        <button type="submit">Logout</button>
    </form>

</body>
</html>