<?php
$user=$_POST["uname"];
header('Content-Type: application/json');
$con = mysql_connect( "173.194.106.92","gameon","shani123@");
if(!$con){
die("could not connect".mysql_error());
}
mysql_select_db("GameOn",$con);
$result = mysql_query("SELECT Game.*, User.first_name, User.last_name, Field.field_name, Field.city FROM Game inner join User on Game.creator_id='".$user."' inner join Field on Field.field_id=Game.game_location

where ((Game.game_date>'".$_POST["date"]."') or (Game.game_date='".$_POST["date"]."' and Game.start_time>'".$_POST["time"]."')) and User.user_id=Game.creator_id

order by game_date");

$arr=array();
while($row = mysql_fetch_assoc($result)){
$arr[]=$row;
}
echo json_encode($arr);
mysql_close($con);

?>
