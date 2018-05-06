<?php

$game=$_POST["game_id"];
header('Content-Type: application/json');
$con = mysql_connect( "173.194.106.92","gameon","shani123@");
if(!$con){
die("could not connect".mysql_error());
}
mysql_select_db("GameOn",$con);
$result = mysql_query("SELECT game_id,Field.field_id,Field.field_name,game_date,game_location,start_time,end_time,first_name,last_name,max_players,min_players,permanent,public_game
FROM Game inner join Field on Game.game_location=Field.field_id inner join User on user_id=creator_id  WHERE game_id='".$game."' order by game_date");
$arr=array();
while($row = mysql_fetch_assoc($result)){
$arr[]=$row;
}
echo json_encode($arr);
mysql_close($con);

?>
