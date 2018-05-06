<?php
$user=$_POST["uname"];
header('Content-Type: application/json');
$con = mysql_connect( "173.194.106.92","gameon","shani123@");
if(!$con){
die("could not connect".mysql_error());
}
mysql_select_db("GameOn",$con);
$result = mysql_query("select Game.game_id,Game.game_date, Game.start_time, Game.game_location , Game_invitation.approve, User.first_name, User.last_name,Field.city,Field.field_name
from Game inner join Game_invitation on Game.game_id=Game_invitation.game_id inner join User on User.user_id=Game.creator_id inner join Field on Field.field_id=Game.game_location
where Game_invitation.user_id='".$user."' and ((Game.game_date>'".$_POST["date"]."') or (Game.game_date='".$_POST["date"]."' and Game.start_time>'".$_POST["time"]."')) order by game_date");
$arr=array();
while($row = mysql_fetch_assoc($result)){
$arr[]=$row;
}
echo json_encode($arr);
mysql_close($con);

?>
