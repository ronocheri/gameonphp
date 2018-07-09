<?php

header('Content-Type: application/json');
$con = mysql_connect( "173.194.106.92","gameon","shani123@");
if(!$con){
die("could not connect".mysql_error());
}
mysql_select_db("GameOn",$con);
//mysql_select_db("GameOn",$con);
$bool=mysql_query("INSERT INTO `Notificaition` ( `to_user`, `from_user`, `text`,`game_id`, `readen`, `team_name`) VALUES
('$_POST[picked_Users]','$_POST[uname]','$_POST[notiType]','$_POST[g_id]','No','$_POST[t_id]')");
echo json_encode($bool);
mysql_close($con);

?>
