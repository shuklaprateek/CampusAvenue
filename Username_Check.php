<?php
include("Database_Connection.php");
$data=$_POST["dt"];
$ar=explode(",",$data);
$q="select Email_ID from registration where Username='".$ar[0]."'";
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