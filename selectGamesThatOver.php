<?php
$user=$_POST["uname"];
$hourTime =$_POST["hourTime"];
$now =$_POST["today"];
header('Content-Type: application/json');
$con = mysql_connect( "173.194.106.92","gameon","shani123@");
if(!$con){
die("could not connect".mysql_error());
}
mysql_select_db("GameOn",$con);
$result = mysql_query("SELECT * FROM Game inner join User on Game.creator_id='".$user."'
where  (Game.end_date='".$now."' and Game.end_time>'".$hourTime."')
ORDER BY end_date  LIMIT 1");

$arr=array();
while($row = mysql_fetch_assoc($result)){
$arr[]=$row;
}
echo json_encode($arr);
mysql_close($con);

?>
