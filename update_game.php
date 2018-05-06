
<?php
//updates user chioce regarding game's invitation

header('Content-Type: application/json');
$con = mysql_connect( "173.194.106.92","gameon","shani123@");
if(!$con){
die("could not connect".mysql_error());
}
mysql_select_db("GameOn",$con);
//mysql_select_db("GameOn",$con);


$bool=mysql_query("UPDATE `Game` SET `game_date`='$_POST[game_date]', `game_location`='$_POST[game_location]',
  `start_time`='$_POST[start_time]', `end_time`='$_POST[end_time]', `max_players`='$_POST[max_players]'
  , `permanent`='$_POST[permanent]', `public_game`='$_POST[public_game]',`end_date`='$_POST[end_date]'
 WHERE game_id='$_POST[game_id]'");
echo json_encode($bool);
mysql_close($con);

?>
