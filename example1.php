<?php
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$studentNumber = $_POST["studentNumber"];
$control = $_POST["control"];
$software = $_POST["software"];
$ethics = $_POST["ethics"];
$link = mysqli_connect("localhost","root","","db2");
$sql = "INSERT INTO students (studentNumber,firstName,lastName) 
        VALUES ('$studentNumber','$firstName','$lastName')";
        if (mysqli_query($link,$sql)){
            echo "Record added successfully"."<br>";
        }
        else {
            echo "ERROR";
        }
        $sql2 = "INSERT INTO materials (studentNumber,control,software,ethics)
                 VALUES('$studentNumber','$control','$software','$ethics')";
                 if (mysqli_query($link,$sql2)){
                    echo "Grades Added Successfully";
                 }
                 else {
                    echo "ERROR";
                 }
?>