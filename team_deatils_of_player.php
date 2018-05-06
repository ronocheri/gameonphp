<?php

$user_id=$_POST["uname"];
header('Content-Type: application/json');
$con = mysql_connect( "173.194.106.92","gameon","shani123@");
if(!$con){
die("could not connect".mysql_error());
}
mysql_select_db("GameOn",$con);
$result = mysql_query("SELECT User.user_id, Team.captain_id, Team.costume, Team.team_name, Team.draws, Team.losses, Team.wins, Team.symbol, Team.trophies

FROM Team inner join User on User.team=Team.team_name

WHERE User.user_id='".$user_id."'");
$arr=array();
while($row = mysql_fetch_assoc($result)){
$arr[]=$row;
}
echo json_encode($arr);
mysql_close($con);

?>
