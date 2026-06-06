<?php
include __DIR__ . "/../config/db.php";
$id = $_GET['id'];
$sql = mysqli_query($conn, "DELETE * FROM students WHERE id = $id");
  header("Location: ../dashboard.php");
    exit();
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/delete.css">
</head>
<body>

</body>
</html>