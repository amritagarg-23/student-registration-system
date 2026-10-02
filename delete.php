<?php
include("connect.php");

$id = $_GET['id'];

$sql = "DELETE FROM studentss WHERE id='$id'";
mysqli_query($conn, $sql);

header("Location: show.php");
?>