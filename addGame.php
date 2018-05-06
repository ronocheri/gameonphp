<?php

header('Content-Type: application/json');
$con = mysql_connect( "173.194.106.92","gameon","shani123@");
if(!$con){
die("could not connect".mysql_error());
}
mysql_select_db("GameOn",$con);
//mysql_select_db("GameOn",$con);
$bool=mysql_query("INSERT INTO `Game` (`game_date`,`game_location`, `start_time`, `end_time`, `min_players`,
   `max_players`, `permanent`, `ball`, `pump`, `water`, `net`,`public_game`,`creator_id`,`end_date`,`sent`)
   VALUES
('$_POST[game_date]','$_POST[game_location]','$_POST[start_time]','$_POST[end_time]','$_POST[min_players]',
  '$_POST[max_players]','$_POST[permanent]','$_POST[ball]','$_POST[pump]','$_POST[water]','$_POST[net]',
  '$_POST[public_game]','$_POST[uname]','$_POST[end_date]','$_POST[sent]')");

echo ($bool);
mysql_close($con);


?>
