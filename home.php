<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div align-"center">
<?php
$user = $_POST["user"];
$pass = $_POST["pass"];

// Connect to the database
$link = mysqli_connect ("localhost", "root", "", "grad_system");
$sql = "SELECT * FROM student WHERE username='$user' AND password='$pass'";
$student = mysqli_query ($link, $sql);
$sql = "SELECT * FROM teacher WHERE username='$user' AND password='$pass'";
$teacher = mysqli_query ($link, $sql);
if (mysqli_num_rows ($student) > 0) {
include ("student.php");
$row = mysqli_fetch_assoc ($student);
$username = $row [ "username"];
viewStudent ($username, $link, True);
//-- View Students Page
} else if (mysqli_num_rows ($teacher) > 0) {
include ("teacher.php");
$row = mysqli_fetch_assoc ($teacher);
$username = $row ["username"];
$name = $row["name"];
$subject = $row["subject"];
viewTeacherPage ($username, $name, $subject, $link);
} else {
    echo "incorrect username or password";
}
?>
</body>
</html>