<?php
session_start();
include 'dbConnect.php';
include 'bootstrap.php';

if(isset($_POST['access'])) {
    
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/control.css">
    <title>Control</title>
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
</head>
<body class="container">
    <form class="form-control mt-5 px-5 py-2">
        <h1 class="fs-2 text-dark my-2">Control Board Access</h1>
        <input class="form-control mt-2" placeholder="Username" name="username" type="text">
        <input class="form-control mt-3" placeholder="Password" name="password" type="password">
        <input class="form-control mt-3" placeholder="Re-enter password" name="repassword" type="password">
        <button class="btn btn-primary w-100 my-3" name="access" type="submit">Access</button>
    </form>
</body>
</html>