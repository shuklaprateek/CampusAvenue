<?php
$cn=mysql_Connect("localhost","root","");
if(!$cn)
{
echo "Fail To Connect";
}
mysql_select_db("booksell",$cn);

?>