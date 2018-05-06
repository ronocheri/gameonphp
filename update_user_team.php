
<?php
//updates user chioce regarding game's invitation

header('Content-Type: application/json');
$con = mysql_connect( "173.194.106.92","gameon","shani123@");
if(!$con){
die("could not connect".mysql_error());
}
mysql_select_db("GameOn",$con);
//mysql_select_db("GameOn",$con);


$bool=mysql_query("UPDATE `User` SET `team`='$_POST[team_name]'
 WHERE  user_id='$_POST[uname]'");
echo json_encode($bool);
mysql_close($con);

?>
