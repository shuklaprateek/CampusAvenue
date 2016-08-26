<?php
session_start();
if(!isset($_SESSION["nm"]))
{
header("Location:index.html");
}
include("Database_Connection.php");
$data=$_POST["dt"];
$ar=explode(",",$data);
$q="select Email_ID from registration where Password='".$ar[0]."' && Username='".$_SESSION["nm"]."'";
$rs=mysql_query($q);
$rw=mysql_fetch_array($rs);
if($rw[0])
{
echo 'true';
}
else
{
echo 'Ok';
}

?>