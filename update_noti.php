
<?php

$noti_id=$_POST["noti_id"];

header('Content-Type: application/json');
$con = mysql_connect( "173.194.106.92","gameon","shani123@");
if(!$con){
die("could not connect".mysql_error());
}
mysql_select_db("GameOn",$con);
//mysql_select_db("GameOn",$con);


$bool=mysql_query("UPDATE `Notificaition` SET `readen`='Yes' WHERE noti_id='".$noti_id."'");
echo json_encode($bool);
mysql_close($con);

?>
