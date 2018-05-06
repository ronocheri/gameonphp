
<?php
//updates accesories partition regarding game


header('Content-Type: application/json');
$con = mysql_connect( "173.194.106.92","gameon","shani123@");
if(!$con){
die("could not connect".mysql_error());
}
mysql_select_db("GameOn",$con);

$bool=mysql_query("UPDATE `Game` SET `ball`='$_POST[ball]',`pump`='$_POST[pump]',`water`='$_POST[water]',`net`='$_POST[net]' WHERE game_id='$_POST[game_id]'");
echo json_encode($bool);
mysql_close($con);

?>
