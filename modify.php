<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css"
    href="styles.css" />
</head>
<body>
<div align-"center">
<?php
$link = mysqli_connect ("localhost", "root", "","grad_system");
//-- View Students Page
if(isset ($_POST["view"])){
$user_name = $_POST["username"];
include ("student.php");
viewStudent ($user_name, $link, False) ;
}
//-- View Modify Page
if (isset ($_POST ["modify"])){
$username = $_POST ["username"];
$student_name = $_POST ["student_name"];
$teacher_subject = $_POST ["subject"];
//-- select the subject
$subject = "";
if ($teacher_subject=="software") { $subject = "Software Design"; }
if ($teacher_subject=="control") { $subject = "Control systems";}
if ($teacher_subject=="network") {$subject ="Network";}
//-- extract grades from database
$sql = "SELECT * FROM $teacher_subject WHERE username='$username'";
$student = mysqli_query ($link, $sql);
$row = mysqli_fetch_assoc ($student);
$name = $row ["name"];
$mid1 = $row["mid1"];
$final1 = $row ["final1"];
$mid2 = $row["mid2"];
$final2 = $row["final2"];
//-- create table for modify student grades
echo "
<form method='post'>
<input type= 'hidden' name='username' value='$username' />
<input type='hidden' nanme='subject' value= $teacher_subject' >
<h2 id='title'>Add / Modify student grade</h2>
<table id='table'>
<tr>
<td>subject</td>
<td>student Name</td>
<td>Mid Term (course 1)</td>
<td>Final (course 1)</td>
<td>Mid Term (course 2)</td>
<td>Final (course 2)</td>
<tr>
<tr>
<td>$subject</td>
<td>$name</td>
<td><input type='text' name='midl' value='$mid1' /></td>
<td><input type='text' name='final1' value='$final1' /></td>
<td><input type='text' name='mid2' value='$mid2' /></td>
<td><input type='text' name='final2' value='$final2' /></td>
<tr>
<tr>
<td colspan='6' align='center'><input type='submit' name='save'>
</tr>
</table>
</form>
";
}
//-- Update and save grades
if (isset ($_POST ["save"])){
    $username = $_POST["username"];
    $teacher_subject = $_POST["teacher_subject"];
    if ($_POST ["mid1"]=="") { $mid1='NULL'; } else {$mid1 = $_POST ["mid1"];}
    if ($_POST ["final1"]=="") { $final1='NULL'; } else {$final1 = $_POST["final1"];}
    if ($_POST ["mid2"]=="") { $mid2-'NULL'; } else {$mid2 = $_POST ["mid2"];}
    if ($_POST ["final2"]=="") { $final2='NULL'; } else {$final2 = $_POST ["final2"];}
    $sql = "UPDATE $teacher_subject SET
    mid1=$mid1,
    final1=$final1,
    mid2=$mid2,
    final2=$final2
    WHERE username='$username'";
    if (mysąli_query ($link, $sql)){
    echo "Grades updated successfully.";
    } else {
     echo "ERROR: Could not able to execute $sql. " . mysqli_error ($link);
    }
}
?>
</body>
</html>