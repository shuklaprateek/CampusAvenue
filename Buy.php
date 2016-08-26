
<?php
session_start();
if(!isset($_SESSION["nm"]))
{
header("Location:index.html");
}
?>
<html>
<head>

<title>CampusAvenue</title>

<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet"  href="Assets/css/jquery.dataTables.css">
<link href="Assets/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<script src="Assets/js/jquery.js"></script>
<script src="Assets/js/jquery.datatables.js"></script>

<script>
$(function(){
$('#tb').dataTable({});
});
</script>
</head>
<body>
<div id="header-wrapper">
	<div id="header">
		<div id="logo">
					<center><h1><a href="Home.php"><font color="#F0FAFA">C</font><font color="#F0FAFA">ampus</font><font color="#F0FAFA">A</font><font color="#F0FAFA">venue</font></a></h1></center>

				</div>
	</div>
</div>


				<center><h1>It's all about books and stuff!!!</h1></center>
				<br><br><br>
				<a href="Sell.php" class="btn btn-primary btn-lg btn-block" role="button">Do you wanna sell, donate, exchange?? - Upload here</a>
<br><br><div><a href="Home.php" class="btn btn-primary" role="button" style="float: left;">Home</a><div>
<div><a href="Logout.php" class="btn btn-primary" role="button" style="float: right;">Logout</a><div>
<table id="tb">
<thead><tr><th>Item no.</th><th>Image</th><th>Material Name</th><th>Material Details</th><th>I want to</th><th>Price</th><th>Seller Name</th><th>Contact no.</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email</th><th>User image</th></tr></thead>
<?php
include("DataBase_Connection.php");

$q="select * from buysell";
$rs=mysql_query($q);
$a=100;
$b=100;
echo"<tbody>";
while($rw=mysql_fetch_array($rs))
{
echo "<tr><td>".$rw[0]."</td><td><img src=".$rw[5]." height=".$a." width=".$b."></td><td>".$rw[1]."</td><td>".$rw[2]."</td><td>".$rw[3]."</td><td>".$rw[4]."</td><td>".$rw[7]."</td><td>".$rw[8]."</td><td>".$rw[9]."</td><td><img src=".$rw[10]." height=".$a." width=".$b."></td></tr>";
}

echo "</tbody></table>";

?>



	</body>
</html>
