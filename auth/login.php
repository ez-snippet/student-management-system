<?php

include __DIR__ . "/../config/db.php";
session_start();

if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email === "admin@system.com" && $password === "Admin@2026") {

        header("Location: ../dashboard.php");
        exit();

    } 
    else {
        echo "Invalid email or password";
        exit();
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- Login Form -->
     <div class="container">
        <h2>Admin Form</h2>
        <form method="post">
             <i class="fa-solid fa-envelope"></i>
            <input  id="email" type="email" name="email" placeholder="Enter the email">
            <br>
             <i class="fa-solid fa-lock"></i>  
            <input id="password" type="password" name="password" placeholder="Enter the password">
            <br>
            <button type="submit" name="submit">Login</button>
        </form>
    </div>
     <script src="/assets/js/login.js"></script>
</body>
</html>