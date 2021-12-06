<?php
session_start();

$target_dir = "uploads/";
$newfilename = $target_dir.$_SESSION["id"] . '.png';
$handle=fopen($newfilename,'rb+');
$res=fread($handle,filesize(newfilename));
fclose($handle);
if (file_exists($newfilename)==False) {
    echo "Sorry, lease agreement does exists.";

}else{
    echo $res;
}