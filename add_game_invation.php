
<?php

header('Content-Type: application/json');
$con = mysql_connect( "173.194.106.92","gameon","shani123@");
if(!$con){
die("could not connect".mysql_error());
}
mysql_select_db("GameOn",$con);
//mysql_select_db("GameOn",$con);
$bool=mysql_query("INSERT INTO `Game_invitation` (`game_id`,`user_id`,`approve`)
   VALUES
('$_POST[game_id]','$_POST[u_id]','waiting')");
echo json_encode($bool);
mysql_close($con);

?>
