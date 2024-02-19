<?php
include 'dbConnect.php';
if(isset($_POST['submit'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $school=$_POST['school'];
    $class=$_POST['class'];
    $reason=$_POST['reason'];
    $oruulah = "INSERT INTO `registration`(`id`, `firstname`, `lastname`, `email`, `school`, `class`, `reason`) VALUES ('NULL','$firstname','$lastname','$email','$school','$class','$reason')";

    $result=mysqli_query($conn, $oruulah);
    if($result){
        header("Location:index.php");
    }
    else{
        echo "aldaa garla" .mysqli_error($conn);
    }
}

?>


<form method="POST">
<label>First Name:</label>
<input name="firstname" type="text" required>
<label>Last Name:</label>
<input name="lastname" type="text" required>
<label>Email Address:</label>
<input name="email" type="email" required>
<label>Current School:</label>
<input name="school" type="text" required>
<label>Grade:</label>
<input name="class" type="text" required>
<label>Why are u interested? (in 3 words):</label>
<input name="reason" type="text" required>
<button name="submit" type="submit" value="Submit">Оруулах</button>
</form>