<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include("connect.php");

//if(isset($_POST['submit'])){

    $name   = $_POST['name'];
    $email  = $_POST['email'];
    $course = $_POST['course'];

    $sql = "INSERT INTO studentss (name, email, course)
            VALUES ('$name','$email','$course')";

    if(mysqli_query($conn, $sql)){
        echo "Registration Successful <br><br>";
        echo "<a href='student.html'>Go Back</a>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

?>