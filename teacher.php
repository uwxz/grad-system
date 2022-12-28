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
function viewteacherpage($username , $name, $subject, $link){
    echo "<h2 id='title'>welcome $name</h2>";
    echo "<a href='addnew.php'>add new student</a>";
    //-- extract student name
    $sql = "SELECT * FROM software";
    $student = mysqli_query($link, $sql);
    //--put stdent names in table
    echo "
    <br />
    <caption>student name</caption>
<table id='table'>
    ";
    $count = 0;
    while($row = mysqli_fetch_assoc($student)){
        $count +=1;
        $student_name = $row['name'];
        $username = $row['username'];
        echo"
        <tr>
        <form action='modify.php' method='post'>
        <input type='hidden' name='subject' value='$subject' />
        <input type='hidden' name='username' value='$username' />
        <input type='hidden' name='student_name' value='$student_name' />

        <td>$count</td>
        <td>$student_name</td>
        <td><input type='submit' name='view' value='view' /></td>
        <td><input type='submit' name='modify'  value='add/modify' /></td>
        </from>
        <tr>
        ";

    }
    echo "</table>";
} 
?>