<?php
include("connect.php");

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM studentss WHERE id='$id'");
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Student</title>
</head>
<body>

<h2>Update Student</h2>

<form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

    Name: <input type="text" name="name" value="<?php echo $row['name']; ?>"><br><br>
    Email: <input type="email" name="email" value="<?php echo $row['email']; ?>"><br><br>
    Course: <input type="text" name="course" value="<?php echo $row['course']; ?>"><br><br>

    <input type="submit" value="Update">
</form>

</body>
</html>