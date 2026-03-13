<!DOCTYPE html>
<html>
<head>
<title>Admin Panel</title>

<!-- Tab Icon -->
<link rel="icon" type="image/jpeg" href="../icons/logo.jpeg">

<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<link rel="stylesheet" href="bootstrap.css">

<style>

body{
    background:#f8f9fa;
}

/* Blue gradient header */
.custom-header{
    background: linear-gradient(90deg,#0d6efd,#4dabf7);
    box-shadow:0 3px 10px rgba(0,0,0,0.2);
}

/* nav links */
.navbar-nav .nav-link{
    color:white !important;
    font-weight:500;
}

.navbar-nav .nav-link:hover{
    color:#e3f2fd !important;
}

/* profile icon */
.profile-icon{
    width:35px;
    height:35px;
    border-radius:50%;
    background:white;
    display:flex;
    align-items:center;
    justify-content:center;
    font-weight:bold;
    color:#0d6efd;
}

.logout-btn{
    color:#ffdddd !important;
}

.logout-btn:hover{
    color:white !important;
}

</style>
</head>


<body>

<!-- HEADER -->
<nav class="navbar navbar-expand-lg custom-header navbar-dark">

<div class="container">

<!-- Logo / Title -->
<a class="navbar-brand fw-bold text-white" href="../admin/dashboard.php">
Admin Dashboard
</a>

<!-- Mobile Toggle -->
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarContent">

<ul class="navbar-nav ms-auto align-items-center">

<!-- Home -->
<li class="nav-item">
<a class="nav-link" href="../admin/dashboard.php">
🏠 Home
</a>
</li>

<!-- Profile -->
<li class="nav-item mx-3">
<a class="nav-link d-flex align-items-center" href="../admin/profile.php">
<div class="profile-icon">
👤
</div>
</a>
</li>

<!-- Logout -->
<li class="nav-item">

<form action="../landing_page/logout.php" method="POST" class="d-inline">

<button type="submit" class="btn btn-sm btn-outline-light logout-btn">
Logout
</button>

</form>

</li>

</ul>

</div>

</div>
</nav>



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