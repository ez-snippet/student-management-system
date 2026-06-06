<?php
include "config/db.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/dashboard.css">
    <link rel="icon" href="/image.jpg.png" type="image/x-icon">
    <link rel="stylesheet" href="/assets/bootstrap-5.3.8-dist/css/bootstrap.min.css">
    <script src="/assets/bootstrap-5.3.8-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <nav
        class="navbar navbar-expand-lg navbar-light bg-primary"
    >
        <div class="container">
            <a href="/uploads/logo.jpg"></a>
            <button
                class="navbar-toggler d-lg-none"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId"
                aria-controls="collapsibleNavId"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link  text-white" href=""> <i class="fa-solid fa-circle-user mt-2"></i> Welcome Admin 👋</a>
                    </li>
            </div>
        </div>
    </nav>
    <div class="main">
   <div class="sidebar">

    <div class="logo">
        <i class="fa-solid fa-graduation-cap"></i>
        <span>SMS Admin</span>
    </div>

    <ul class="menu">

        <li class="active">
            <a href="dashboard.php">
                <i class="fa-solid fa-gauge"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li>
            <a href="students\add.php">
                <i class="fa-solid fa-user-plus"></i>
                <span>Add Student</span>
            </a>
        </li>

        <li>
            <a href="students\view.php">
                <i class="fa-solid fa-users"></i>
                <span>View Students</span>
            </a>
        </li>

        <li>
            <a href="students\edit.php">
                <i class="fa-solid fa-pen-to-square"></i>
                <span>Edit Student</span>
            </a>
        </li>

        <li>
            <a href="students\delete.php">
                <i class="fa-solid fa-trash"></i>
                <span>Delete Student</span>
            </a>
        </li>
        <div class="nn">
        <li class="logout">
            <a href="auth\logout.php">
                <i class="fa-solid fa-right-from-bracket text-danger"></i>
                <span class="text-danger">Logout</span>
            </a>
        </li>
        </div>

    </ul>

</div>
<div class="container mt-4">

  <div class="row">

    <!-- 👨‍🎓 Total Students -->
    <div class="col-md-4 ms-5">
      <div class="card shadow">
        <div class="card-body">
          <h5>👨‍🎓 Total Students</h5>
          <h2>
            <?php
              $query = mysqli_query($conn, "SELECT COUNT(*) as total FROM students");
              $data = mysqli_fetch_assoc($query);
              echo $data['total'];
            ?>
          </h2>
        </div>
      </div>
    </div>

    <!-- 📚 Total Courses -->
    <div class="col-md-4 ms-5">
      <div class="card shadow">
        <div class="card-body">
          <h5>📚 Total Courses</h5>
          <h2>
            <?php
              $query = mysqli_query($conn, "SELECT COUNT(DISTINCT course) as total FROM students");
              $data = mysqli_fetch_assoc($query);
              echo $data['total'];
            ?>
          </h2>
        </div>
      </div>
    </div>

  </div>

</div>
    </div>
</body>
</html>