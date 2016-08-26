<?php
session_start();
if(!isset($_SESSION["nm"]))
{
header("Location:index.html");
}
include("Database_Connection.php");
$data=$_POST["str"];
$t="delete from learnteach where User_ID=".$data;
mysql_query($t);


?>