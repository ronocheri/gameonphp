<?php
//header('Content-Type: application/json');

$conn = mysqli_connect("173.194.106.92","gameon","shani123@","GameOn");


$regid = $_POST['regid'];
$name = $_POST['name'];
$email =$_POST['email'];
echo "Submitted";

$sql = "INSERT INTO gcm (regid, name, email) VALUES ("."'".$regid."'".","."'".$name."'".","."'".$email."'".")";

mysqli_query($conn, $sql);
mysqli_close($conn);
?>
