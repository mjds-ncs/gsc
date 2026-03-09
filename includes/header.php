<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>

    <!--  Tab Icon -->
    <link rel="icon" type="image/jpeg" href="../icons/logo.jpeg">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="bootstrap.css">

    <style>
        /* hide path dito dapat */
    </style>
</head>

<body class="bg-light">
<div class="container mt-5">

<ul class="nav nav-pills nav-fill">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="../admin/dashboard.php">Home</a>
  </li>

  <!--  Logout button -->
  <li class="nav-item">
    <form action="../landing_page/logout.php" method="POST" class="d-inline">
        <button type="submit" class="nav-link btn btn-link text-danger" style="display:inline; padding:0; border:none;">
            Logout
        </button>
    </form>
  </li>

</ul>

</div>
</body>
</html>

<script>
    document.addEventListener('keydown', function(e) {
  if (
    e.key === "F12" ||
    (e.ctrlKey && e.shiftKey && e.key === "I") ||
    (e.ctrlKey && e.key === "U")
  ) {
    e.preventDefault();
  }
});
</script>

