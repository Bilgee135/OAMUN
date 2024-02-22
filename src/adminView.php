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
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.0/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.print.min.js"></script>
    <link href="https://cdn.datatables.net/2.0.0/css/dataTables.dataTables.css" rel="stylesheet">
    <link href="styles/dataButtons.css" rel="stylesheet">

</head>
<body>
    <?php
    include 'adminNavbar.php';
    ?>
    <div class="container">
    <table class="table mt-5 table-striped-columns table-hover display" id="participants">
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
    <script>new DataTable('#participants', {
        layout: {
            topStart: {
                buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
            }
        }
    });
    </script>
    </div>
    
</body>
</html>