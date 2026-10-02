<?php
include("connect.php");

$result = mysqli_query($conn, "SELECT * FROM studentss");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
</head>
<body>

<h2>Registered Students</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Course</th>
        <th>action</th>
    </tr>

<?php
while($row = mysqli_fetch_assoc($result)){
?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['course']; ?></td>
<td>
    <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a> |
    <a href="edit.php?id=<?php echo $row['id']; ?>">Update</a>
</td>

    </tr>
<?php
}
?>

</table>

<br>
<a href="student.html">Go Back</a>

</body>
</html>