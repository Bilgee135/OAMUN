<?php

session_start();

include 'bootstrap.php';
include 'dbConnect.php';

if (!isset($_SESSION['admin'])) {
    // Redirect to index.php
    header("Location: index.php");
    exit();
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Admin!</title>
    <link rel="stylesheet" href="styles/adminView.css">
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
</head>
<body>
    <?php
    include 'adminNavbar.php';
    ?>
    <div class="container">
    <table class="table mt-5 table-striped-columns table-hover">
    <thead class="table-dark">
        <tr>
        <th scope="col">#</th>
        <th scope="col">Firstname</th>
        <th scope="col">Lastname</th>
        <th scope="col">School</th>
        <th scope="col">Grade</th>
        <th scope="col">Reason</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $select = "SELECT * FROM `registration`";
        $result = mysqli_query($conn, $select);
        while($print = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
            <th scope="row"><?php echo $print['id'] ?></th>
            <td><?php echo $print['firstname'] ?></td>
            <td><?php echo $print['lastname'] ?></td>
            <td><?php echo $print['school'] ?></td>
            <td><?php echo $print['class'] ?></td>
            <td><?php echo $print['reason'] ?></td>
            </tr>
            <?php
        }
        ?>
        
        
    </tbody>
    </table>
    </div>
    
</body>
</html>