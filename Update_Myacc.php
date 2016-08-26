<?php
session_start();
if(!isset($_SESSION["nm"]))
{
header("Location:index.html");
}
include("Database_Connection.php");
$data=$_POST["dt"];
$ar=explode("~",$data);
$q="update registration set Name='".$ar[0]."' , Contact_No='".$ar[1]."' where Username='".$_SESSION["nm"]."'";
$r="update buysell set Name='".$ar[0]."' , Contact_No='".$ar[1]."'  where Username='".$_SESSION["nm"]."'";
$t="update learnteach set Name='".$ar[0]."' , Contact_No='".$ar[1]."' where User_Name='".$_SESSION["nm"]."'";
mysql_query($q);
mysql_query($r);
mysql_query($t);


?>