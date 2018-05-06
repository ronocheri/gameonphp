<?php

$game=$_POST["game_id"];
$choice=$_POST["user_choice"];

header('Content-Type: application/json');
$con = mysql_connect( "173.194.106.92","gameon","shani123@");
if(!$con){
die("could not connect".mysql_error());
}
mysql_select_db("GameOn",$con);
$result = mysql_query("SELECT User.user_id, first_name, last_name

FROM  User  inner join Game_invitation on Game_invitation.user_id= User.user_id

WHERE  Game_invitation.approve='".$choice."' and Game_invitation.game_id='".$game."'");

$arr=array();
while($row = mysql_fetch_assoc($result)){
$arr[]=$row;
}
echo json_encode($arr);
mysql_close($con);

?>
