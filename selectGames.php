<?php
//$date=new Date();
header('Content-Type: application/json');
$con = mysql_connect( "173.194.106.92","gameon","shani123@");
if(!$con){
die("could not connect".mysql_error());
}
mysql_select_db("GameOn",$con);
$result = mysql_query("SELECT * FROM Game left outer join Game_invitation on Game.game_id=Game_invitation.game_id
where  ((Game_invitation.user_id<>'".$_POST["uname"]."') or  isnull(Game_invitation.user_id) or (Game_invitation.user_id='".$_POST["uname"]."' and Game_invitation.approve='waiting'))
and Game.public_game='Yes' and ((Game.game_date>'".$_POST["date"]."') or (Game.game_date='".$_POST["date"]."' and Game.start_time>'".$_POST["time"]."'))
group by Game.game_id
order by game_date");
//SELECT * FROM Game where public_game='Yes' and ((game_date>'".$_POST["date"]."') or (game_date='".$_POST["date"]."' and start_time>'".$_POST["time"]."'))
$arr=array();
while($row = mysql_fetch_assoc($result)){
$arr[]=$row;
}
echo json_encode($arr);
mysql_close($con);

?>
