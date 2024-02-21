<?php
session_start();
include 'dbConnect.php';
include 'bootstrap.php';

if(isset($_POST['access'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    // $re_password = $_POST['repassword'];
}

function AdminCredentials($username, $password) {
    return ($username == "Yale" && $password == "OAMUN");
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
    <form class="form-control mt-5 mb-3 px-5 py-2" method="POST" action="">
        <h1 class="fs-2 text-dark my-2">Control Board Access</h1>
        <input class="form-control mt-3" placeholder="Username" name="username" type="text">
        <input class="form-control mt-3" placeholder="Password" name="password" type="password">
        <!-- <input class="form-control mt-3" placeholder="Re-enter password" name="repassword" type="password"> -->
        <input type="submit" class="btn btn-primary w-100 my-3" name="access" value="Access">
    </form>
    <div>
        <?php
            if(AdminCredentials($username, $password)) {
                
                $_SESSION['admin'] = true;
        
                // Redirect to adminView.php
                header("Location: adminView.php");
                exit();
            } else {
                $_SESSION['admin'] = false;
                unset($_SESSION['admin']);
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        Invalid username or password!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>';
            }
        ?>
    </div>
</body>
</html>