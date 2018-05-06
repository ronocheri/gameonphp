<?php

header('Content-Type: application/json');
$con = mysql_connect( "173.194.106.92","gameon","shani123@");
if(!$con){
die("could not connect".mysql_error());
}
mysql_select_db("GameOn",$con);
//mysql_select_db("GameOn",$con);
$bool=mysql_query("INSERT INTO `League` (`team_id`,`ranking`)
   VALUES
('$_POST[team_name]','$_POST[rank]')");
echo json_encode($bool);
mysql_close($con);

?>
