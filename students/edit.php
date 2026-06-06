<?php
include __DIR__ . "/../config/db.php";
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * from students WHERE id = $id");
$query = mysqli_fetch_assoc($result);
if (isset($_POST['submit'])) {
    $image = $_FILES['image']['name'];
    $tmp   = $_FILES['image']['tmp_name'];
     move_uploaded_file($tmp ,  "uploades/" . $image);
    $name   = $_POST['name'] ;
    $email  = $_POST['email'];
    $course = $_POST['select'];
    $fee    = $_POST['fee'];
    $phone  = $_POST['number'];
    $sql = "UPDATE students SET image = '$image', name= '$name', email  = '$email', course = '$course', course_fee = '$fee', phone =  '$phone'  WHERE id = $id";
    mysqli_query($conn, $sql);

    header("Location: ../dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/add.css">
</head>
<body>
    <div class="container">
    <h2>Edit Student Form</h2>

    <form method="post" id="form" enctype="multipart/form-data">

        <i class="fa-solid fa-user"></i>
        <input id="image" type="file" name="image">
        <span id="e1"></span>
        <br>

        <i class="fa-solid fa-user"></i>
        <input id="name" type="text" name="name" placeholder="Enter the student name">
        <span id="e2"></span>
        <br>

        <i class="fa-solid fa-envelope"></i>
        <input id="email" type="email" name="email" placeholder="Enter student email">
        <span id="e3"></span>
        <br>

        <select name="select" id="hi">
            <option value="">Select the course</option>
            <option value="Web Development">Web Development</option>
            <option value="Graphic Designing">Graphic Designing</option>
            <option value="Programming">Programming</option>
            <option value="App Development">App Development</option>
            <option value="Full Stack Development">Full Stack Development</option>
            <option value="MS Office">MS Office</option>
            <option value="UI UX Designing">UI UX Designing</option>
        </select>
        <span id="e4"></span>
        <br>

        <input id="fee" type="number" name="fee" placeholder="Enter the course fee">
        <span id="e5"></span>
        <br>

        <input id="number" type="text" name="number" placeholder="Enter the student mobile number">
        <span id="e6"></span>
        <br>

        <button type="submit" name="submit">update Student </button>

    </form>
</div>
    <script src="/assets/js/add.js"></script>
</body>
</html>