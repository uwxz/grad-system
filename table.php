<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "grad_system");
// Check connection
if($link === false){
die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Attempt create table query execution
$sql = "CREATE TABLE student(
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
password VARCHAR(30) NOT NULL,
username VARCHAR(70) NOT NULL UNIQUE
)";
if(mysqli_query($link, $sql)){
echo "Table created successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
$sql = "CREATE TABLE teacher(
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL,
subject VARCHAR(30) NOT NULL,
username VARCHAR(70) NOT NULL UNIQUE
)";
if(mysqli_query($link, $sql)){
echo "Table created successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
$sql = "CREATE TABLE control(
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL,
username VARCHAR(70) NOT NULL UNIQUE,
mid1 INT(20),
final1 INT(20),
mid2 INT(20),
final2 INT(20)
)";
if(mysqli_query($link, $sql)){
echo "Table created successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
$sql = "CREATE TABLE software(
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL,
username VARCHAR(70) NOT NULL UNIQUE,
mid1 INT(20),
final1 INT(20),
mid2 INT(20),
final2 INT(20)
)";
if(mysqli_query($link, $sql)){
echo "Table created successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
$sql = "CREATE TABLE network(
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL,
username VARCHAR(70) NOT NULL UNIQUE,
mid1 INT(20),
final1 INT(20),
mid2 INT(20),
final2 INT(20)
)";
if(mysqli_query($link, $sql)){
echo "Table created successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>