<?php
include("Database_Connection.php");
session_start();
 $q="select Max(Material_Id+1) from buysell";
$rs=mysql_query($q);
$rw=mysql_fetch_array($rs);
if($rw[0]>0)
{
$id=$rw[0];
}
else
{
$id=1;
}

$target_dir="UserImages/";
$target_dir= $target_dir.basename($_FILES["mi"]["name"]);

move_uploaded_file($_FILES["mi"]["tmp_name"],$target_dir);

$r="select Name,Contact_No,Email_ID,Photo from registration where Username='".$_SESSION["nm"]."'";
$a=mysql_query($r);
$ar=mysql_fetch_array($a);
$c="insert into buysell values(".$id.",'".$_POST["mn"]."','".$_POST["md"]."','".$_POST["esd"]."','".$_POST["pr"]."','".$target_dir."','".$_SESSION["nm"]."','".$ar[0]."','".$ar[1]."','".$ar[2]."','".$ar[3]."')";
$rw=mysql_query($c);
if($rw)
header("Location:Buy.php");
else
header("Location:Sell.php");
?>