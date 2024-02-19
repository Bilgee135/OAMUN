<?php
include 'dbConnect.php';
if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $school = $_POST['school'];
    $class = $_POST['class'];
    $reason = $_POST['reason'];
    $oruulah = "INSERT INTO `registration`(`id`, `firstname`, `lastname`, `email`, `school`, `class`, `reason`) VALUES ('NULL','$firstname','$lastname','$email','$school','$class','$reason')";

    $result = mysqli_query($conn, $oruulah);
    if ($result) {
        header("Location:index.php");
    } else {
        echo "aldaa garla" . mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Forum</title>
    <link rel="stylesheet" href="styles/registration.css">
</head>

<body>
    <?php
    include 'bootstrap.php';
    include 'navbar.php';
    ?>
    <div class="page">
        <div class="forum h-auto rounded bg-white">
            <div class="forum-head rounded">
                <h1 class="text-white text-center">OAMUN Registration Forum</h1>
            </div>
            <form method="POST">
                <input name="firstname" type="text" placeholder="First name" class="form-control mt-3" required>
                <input name="lastname" type="text" placeholder="Last name" class="form-control mt-3" required>
                <input name="email" type="email" placeholder="Email address" class="form-control mt-3" required>
                <input name="school" type="text" placeholder="Current school" class="form-control mt-3" required>
                <input name="class" type="text" placeholder="Grade" class="form-control mt-3" required>
                <textarea name="reason" type="text" placeholder="Why do you want to participate?" class="form-control mt-3" required></textarea>
                <button name="submit" class="btn btn-primary w-100 mt-3" type="submit" value="Register">Register</button>
            </form>
        </div>
    </div>

    </form>
</body>

</html>