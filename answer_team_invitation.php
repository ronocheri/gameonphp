<?php

$team_name=$_POST["team_name"];
$user_id=$_POST["user_id"];
$user_choice=$_POST["user_choice"];

header('Content-Type: application/json');
$con = mysql_connect( "173.194.106.92","gameon","shani123@");
if(!$con){
die("could not connect".mysql_error());
}
mysql_select_db("GameOn",$con);
$result = mysql_query("UPDATE `Team_invitation` SET `approve`='".$user_choice."'
 WHERE team_name='".$team_name."' and user_id='".$user_id."'");

$arr=array();
while($row = mysql_fetch_assoc($result)){
$arr[]=$row;
}
echo json_encode($arr);
mysql_close($con);

?>
