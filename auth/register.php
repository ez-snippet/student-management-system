<?php
include __DIR__ . "/../config/db.php";
// form backend
session_start();
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "INSERT INTO  USERS(name, email , password)values('$name' , '$email', '$password')";
    mysqli_query($conn, $sql);
    header("Location:login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- form structure  -->
    <div class="container">
        <h2>Registration Form</h2>
        <form method="post" id="form">
             <i class="fa-solid fa-user"></i>  
            <input id="name" type="text" name="name" placeholder="Enter the Name">
            <span id="e1"></span>
            <br>
             <i class="fa-solid fa-envelope"></i>
            <input  id="email" type="email" name="email" placeholder="Enter the email">
             <span id="e2"></span> 
            <br>
             <i class="fa-solid fa-lock"></i>  
            <input id="password" type="password" name="password" placeholder="Enter the password">
             <span id="e3"></span>
            <br>
            <button type="submit" name="submit"> Register</button>
        </form>
    </div>
    <script src="/assets/js/register.js"></script>
</body>
</html>