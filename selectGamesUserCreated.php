<?php
$user=$_POST["uname"];
header('Content-Type: application/json');
$con = mysql_connect( "173.194.106.92","gameon","shani123@");
if(!$con){
die("could not connect".mysql_error());
}
mysql_select_db("GameOn",$con);
$result = mysql_query("SELECT * FROM Game inner join User on Game.creator_id='".$user."'

where  (Game.game_date>'".$_POST["date"]."') or (Game.game_date='".$_POST["date"]."' and Game.start_time>'".$_POST["time"]."')

group by Game.game_id

order by game_date");

$arr=array();
while($row = mysql_fetch_assoc($result)){
$arr[]=$row;
}
echo json_encode($arr);
mysql_close($con);

?>
