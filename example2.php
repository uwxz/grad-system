<?php
$studentNumber = $_POST["studentNumber"];
$link = mysqli_connect("localhost","root","","db2");
$sql = "SELECT * FROM students WHERE studentNumber = $studentNumber";
$result = mysqli_query($link,$sql);
if (mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);
    echo "$row[studentNumber]"." "."$row[firstName]"." "."$row[lastName]"."<br>";

}
else {
    echo "Student Does Not Exist";
}
$sql2 = "SELECT * FROM materials WHERE studentNumber = $studentNumber";
$result2 = mysqli_query($link,$sql2);
if (mysqli_num_rows($result2) > 0){
$row = mysqli_fetch_assoc($result2);
echo "Control: $row[control]"." "."Software: $row[software]"." "."Ethics: $row[ethics]";
}
else {
    echo "Failed";
}
?>