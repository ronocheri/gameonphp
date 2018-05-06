<?php

/* Getting file name */
$filename = $_FILES['file']['name'];

/* Location */
$location = "upload/".$filename;
$uploadOk = 1;
$imageFileType = pathinfo($location,PATHINFO_EXTENSION);

// Check image format
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
 && $imageFileType != "gif" ) {
 $uploadOk = 0;
}

if($uploadOk == 0){
 echo 0;
}else{
 /* Upload file */
 if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
 echo $location;
 }else{
 echo 0;
 }
}
