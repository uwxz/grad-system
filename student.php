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


<?php
function viewStudent ($username , $link, $teacher){
    $sql = "SELECT * FROM network WHERE username='$username'";
    $student = mysqli_query($link , $sql);
    $row = mysqli_fetch_assoc($student);
    $name = $row["name"];
    $net_mid1 = $row["mid1"];
    $net_final1 = $row["final1"];
    $net_mid2 = $row["mid2"];
    $net_final2 = $row["final2"];

    //-- extract grades from 'software' table
    $sql = "SELECT * FROM software WHERE username='$username'";
    $student = mysqli_query($link , $sql);
    $row = mysqli_fetch_assoc($student);
    $soft_mid1 = $row["mid1"];
    $soft_final1 = $row["final1"];
    $soft_mid2 = $row["mid2"];
    $soft_final2 = $row["final2"];

       //-- extract grades from 'software' table
        
       $sql = "SELECT * FROM software WHERE username='$username'";
    $student = mysqli_query($link , $sql);
    $row = mysqli_fetch_assoc($student);

    $con_mid1 = $row["mid1"];
    $con_final1 = $row["final1"];
    $con_mid2 = $row["mid2"];
    $con_final2 = $row["final2"];

    //-- welcome
$welcome = "";
if ($teacher) { $welcome = "Welcome"; }
echo "<h2 id='title'>$welcome $name</h2>";

echo " 
<table id='table'>
<tr>
    <td>subject</td>
    <td>Mid Term (course 1)</td>
    <td>final (course 1)</td>
    <td>Mid Term (course 2)</td>
    <td>Final (course 2)</td>
<tr>
<tr>
    <td>Software Design</td>
    <td>$soft_mid1</td>
    <td>$soft_final1</td>
    <td>$soft_mid2</td>
    <td>$soft_final2</td>
<tr>
<tr>
<td>Control systems</td>
<td>$con_mid1</td>
<td>$con_final1</td>
<td>$con_mid2</td>
<td>$con_final2</td>
<tr>
<tr>
<td>Networks</td>
<td>$net_mid1</td>
<td>$net_final1</td>
<td>$net_mid2</td>
<td>$net_final2</td>
<tr>
</table>
";
}
?>