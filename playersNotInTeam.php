<?php
$team_name=$_POST["team_name"];
header('Content-Type: application/json');
$con = mysql_connect( "173.194.106.92","gameon","shani123@");
if(!$con){
die("could not connect".mysql_error());
}
mysql_select_db("GameOn",$con);
$result = mysql_query("SELECT * FROM User WHERE team<>'".$team_name."' or isNull(team) ");
$arr=array();
while($row = mysql_fetch_assoc($result)){
$arr[]=$row;
}
echo json_encode($arr);
mysql_close($con);

?>
