<?php
$link = mysqli_connect("localhost","root","");
$sql = "CREATE DATABASE IF NOT EXISTS db2";
if(mysqli_query($link,$sql)){
    echo "Database Created Successfully"."<br>";
}
else {
    echo "ERROR";
}
$link = mysqli_connect("localhost","root","","db2");
$sql2 = "CREATE TABLE IF NOT EXISTS students (
    studentNumber INT(30) NOT NULL UNIQUE,
    firstName VARCHAR(30) NOT NULL,
    lastName VARCHAR(30) NOT NULL 
)";
if (mysqli_query($link,$sql2)){
    echo "Table Created Successfully";
}
else {
    echo "ERROR";
}
?>