<?php
include("connect.php");

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$course = $_POST['course'];

$sql = "UPDATE studentss 
        SET name='$name', email='$email', course='$course' 
        WHERE id='$id'";

mysqli_query($conn, $sql);

header("Location: show.php");
?>