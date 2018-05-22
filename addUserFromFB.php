<?php

header('Content-Type: application/json');
$con = mysql_connect( "173.194.106.92","gameon","shani123@");
if(!$con){
die("could not connect".mysql_error());
}
mysql_select_db("GameOn",$con);


$bool=mysql_query("INSERT INTO `User` (`user_id`,`first_name`, `last_name`, `password`, `date_of_birth`, `email`, `city`, `profile_picture`, `foot`, `speed`, `shot`, `dribble`, `fairness`, `header`, `goals`, `assits`, `team`)
   VALUES
('$_POST[fbid]','$_POST[firstName]','$_POST[lastName]','$_POST[fbid]','$_POST[birthday]','$_POST[email]','$_POST[location]','$_POST[fbpic]' ,'R','0','0','0','0','0','0','0',NULL)");

echo ($bool);
mysql_close($con);


?>
