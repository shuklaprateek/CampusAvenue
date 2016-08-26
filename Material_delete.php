<?php
session_start();
if(!isset($_SESSION["nm"]))
{
header("Location:index.html");
}
include("Database_Connection.php");
$data=$_POST["str"];

$r="delete from buysell where Material_Id=".$data." and Username='".$_SESSION["nm"]."'";

mysql_query($r);



?>