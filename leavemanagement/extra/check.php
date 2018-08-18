<?php
/* 
You should make changes in if else loops according to your needs here */
 
if(isset($_COOKIE['username']))
{
echo "You were already logged in ".$_COOKIE['username'].".";
/* " $_COOKIE['username'] " will fetch the username from cookie stored on browser if user is already looged on */
 
//include("template_file_address");
//or you can redirect it to another page....
}
else
{
header("location: index.php");
}
?>