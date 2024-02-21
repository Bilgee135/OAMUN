<?php
include 'dbConnect.php';
if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $school = $_POST['school'];
    $class = $_POST['class'];
    $reason = $_POST['reason'];

    $oruulah = "INSERT INTO `registration`(`id`, `firstname`, `lastname`, `email`, `school`, `class`, `reason`, `agree`) VALUES ('NULL','$firstname','$lastname','$email','$school','$class','$reason')";

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
    <title>Registration Form</title>
    <link rel="stylesheet" href="styles/registration.css">
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
</head>

<body>
    <?php
    include 'bootstrap.php';
    include 'navbar.php';
    ?>
    <div class="page">
        <div class="container rounded py-3 bg-white">
            <div class="forum-head rounded">
                <h1 class="text-white text-center py-2">OAMUN Registration Form</h1>
            </div>
            <form method="POST">
                <input name="firstname" type="text" placeholder="First name" class="form-control mt-3" required>
                <input name="lastname" type="text" placeholder="Last name" class="form-control mt-3" required>
                <input name="email" type="email" placeholder="Email address" class="form-control mt-3" required>
                <input name="school" type="text" placeholder="Current school" class="form-control mt-3" required>
                <input name="class" type="text" placeholder="Grade" class="form-control mt-3" required>
                <textarea name="reason" type="text" placeholder="Why do you want to participate?" class="form-control mt-3" required></textarea>
                <div class="form-check mt-3">
                    <input class="form-check-input" type="checkbox" value="checked" id="flexCheckDefault" required>
                    <label class="form-check-label" for="flexCheckDefault">
                        I acknowledge that I must complete a position paper for entry and that I certify that I understand basic rules and procedures* of a Model United Nations conference.
                    </label>
                </div>
                <p class="mt-3 text-secondary text-center fst-italic"><span class="fw-bold">*Basic rules and procedure:</span> You know how to place forward & support a motion, to speak in unmoderated and moderated caucuses and to write a resolution.</p>
                <button name="submit" class="btn btn-primary w-100 mt-3" type="submit" value="Register">Register</button>
            </form>
        </div>
    </div>

    </form>
    <!-- <?php
            include 'footer.php';
            ?> -->
</body>

</html>