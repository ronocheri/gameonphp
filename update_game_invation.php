
<?php
//updates user chioce regarding game's invitation

header('Content-Type: application/json');
$con = mysql_connect( "173.194.106.92","gameon","shani123@");
if(!$con){
die("could not connect".mysql_error());
}
mysql_select_db("GameOn",$con);
//mysql_select_db("GameOn",$con);


$bool=mysql_query("UPDATE `Game_invitation` SET `approve`='$_POST[user_choice]'
 WHERE game_id='$_POST[game_id]' and user_id='$_POST[user_id]'");
echo json_encode($bool);
mysql_close($con);

?>
