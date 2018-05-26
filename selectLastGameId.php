<?php
header('Content-Type: application/json');
$con = mysql_connect( "173.194.106.92","gameon","shani123@");
if(!$con){
die("could not connect".mysql_error());
}
mysql_select_db("GameOn",$con);
$result = mysql_query("SELECT game_id FROM Game WHERE Game.creator_id='".$_POST["uname"]."' ORDER BY game_id DESC LIMIT 1");
$arr=array();
while($row = mysql_fetch_assoc($result)){
$arr[]=$row;
}
echo json_encode($arr);
mysql_close($con);

?>
