<?php
$user=$_POST["uname"];
$pass=$_POST["pass"];
header('Content-Type: application/json');
$con = mysql_connect( "173.194.106.92","gameon","shani123@");
if(!$con){
die("could not connect".mysql_error());
}
mysql_select_db("GameOn",$con);

$result = mysql_query("SELECT * FROM User WHERE user_id='".$user."' and password='".$pass."'");
$arr=array();

while($row = mysql_fetch_assoc($result)){
$arr[]=$row;
}
echo json_encode($arr);
mysql_close($con);

?>
