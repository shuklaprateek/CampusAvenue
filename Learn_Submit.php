<?php
include("Database_Connection.php");
session_start();
 $q="select Max(User_ID+1) from learnteach";
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
$t="Wants to Teach";
$u="For Details Contact:";
$dt=$_POST["str"];
$r="select Photo,Name,Contact_No,Email_ID from registration where Username='".$_SESSION["nm"]."'";
$a=mysql_query($r);
$ar=mysql_fetch_array($a);
$c="insert into learnteach values(".$id.",'".$ar[0]."','".$ar[1]."','".$t."','".$dt."','".$u."','".$ar[2]."','".$ar[3]."','".$_SESSION["nm"]."')";
$rw=mysql_query($c);
if($rw)
header("Location:Learn.php");
else
header("Location:Home.php");
?>