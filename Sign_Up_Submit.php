<?php
include("Database_Connection.php");

$target_dir="UserImages/";
$target_dir=$target_dir.basename($_FILES["fileToUpload"]["name"]);
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_dir);


$q="insert into registration values('".$_POST["nm"]."','".$_POST["gd"]."','".$_POST["cn"]."','".$_POST["em"]."','".$_POST["unm"]."','".$_POST["pwd"]."','".$target_dir."')";
$rw=mysql_query($q);
if($rw)
{
header("Location:index.html");
}
else
{
header("Location:Error.html");
}
?>