<?php
include("Database_Connection.php");
$data=$_POST["str"];
$ar=explode("~",$data);
$q="select Username from registration where Username='".$ar[0]."' and Password='".$ar[1]."'";
$rs=mysql_query($q);
$rw=mysql_fetch_array($rs);
if($rw[0])
{
echo 'true';
session_start();
$_SESSION["nm"]=$ar[0];
}
?>