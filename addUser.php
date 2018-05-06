<?php
$date1 = date_create($_POST['birthdate']);



header('Content-Type: application/json');
$con = mysql_connect( "173.194.106.92","gameon","shani123@");
if(!$con){
die("could not connect".mysql_error());
}
mysql_select_db("GameOn",$con);

// Get image name
//$image = $_FILES['image']['name'];

// image file directory
//$target = "images/".basename($image);

//mysql_select_db("GameOn",$con);
$bool=mysql_query("INSERT INTO `User` (`user_id`,`first_name`, `last_name`, `password`, `date_of_birth`, `email`, `city`, `profile_picture`, `foot`, `speed`, `shot`, `dribble`, `fairness`, `header`, `goals`, `assits`, `team`)
   VALUES
('$_POST[uname]','$_POST[firstname]','$_POST[lastname]','$_POST[pass]','$_POST[birthdate]','$_POST[email]','$_POST[city]','$_POST[imageAddress]' ,'$_POST[foot]','0','0','0','0','0','0','0',NULL)");

echo ($bool);
mysql_close($con);


?>
