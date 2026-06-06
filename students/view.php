<?php
include __DIR__ . "/../config/db.php";
$result = mysqli_query($conn, "SELECT * FROM students");
$search = "";

if(isset($_GET['search'])){
    $search = $_GET['search'];
    $query = "SELECT * FROM students 
              WHERE name LIKE '%$search%' 
              OR email LIKE '%$search%' 
              OR phone LIKE '%$search%'";
} else {
    $query = "SELECT * FROM students";
}

$result = mysqli_query($conn, $query);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/view.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <a href="../dashboard.php">
        <button  class="dash" >Back  to Dashboard</button>
    </a>
    <form method="get">
        <button type="submit"  class="sea"> Search</button>
        <i class="fa-solid fa-magnifying-glass"></i>
        <input type="search" name="search" placeholder="Student Search ....">
    </form>
    <table>
        <tr>
            <th>ID</th>
            <th> image</th>
            <th>Name</th>
            <th> Email</th>
            <th> Course</th>
            <th> Fee </th>
            <th> Phone Number</th>
            <th>Action</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)) {  ?>
            <tr>
                <td><?php echo $row['id']?></td>
                <td> <img src="../uploads/<?php echo $row['image']; ?>"></td>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['course']?></td>
                <td><?php echo $row['course_fee']?></td>
                <td><?php echo $row['phone']?></td>
                <td>
                    <a href="edit.php?id=<?= $row['id'] ?>">✏️Edit</a>
                  <a href="delete.php?id=<?= $row['id'] ?>"> 🗑️Delete</a>
                </td>
            </tr>
            <?php }?>
    </table>
</body>
</html>