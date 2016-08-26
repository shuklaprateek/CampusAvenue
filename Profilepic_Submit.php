<?php
include("Database_Connection.php");
session_start();


$target_dir="UserImages/";
$target_dir= $target_dir.basename($_FILES["cpp"]["name"]);

move_uploaded_file($_FILES["cpp"]["tmp_name"],$target_dir);

$r="update registration set Photo='".$target_dir."' where Username='".$_SESSION["nm"]."'";
$t="update buysell set Image='".$target_dir."' where Username='".$_SESSION["nm"]."'";
$v="update learnteach set Image='".$target_dir."' where User_Name='".$_SESSION["nm"]."'";
mysql_query($r);
mysql_query($t);
mysql_query($v);
if($r)
header("Location:myaccount.php");
else
header("Location:contactus.html");
?>
