
<?php
//updates user chioce regarding game's invitation

header('Content-Type: application/json');
$con = mysql_connect( "173.194.106.92","gameon","shani123@");
if(!$con){
die("could not connect".mysql_error());
}
mysql_select_db("GameOn",$con);
//mysql_select_db("GameOn",$con);


$bool=mysql_query("UPDATE `User` SET `goals`='$_POST[goals]',`assits`='$_POST[assits]',`speed`='$_POST[speed]',`header`='$_POST[header]', `fairness`='$_POST[fairness]',`dribble`='$_POST[dribble]', `shot`='$_POST[shot]' WHERE  user_id='$_POST[playerId]'");
echo json_encode($bool);
mysql_close($con);

?>
