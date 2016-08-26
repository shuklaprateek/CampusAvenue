

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


<link href="Assets/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<script src="Assets/js/Price.js"></script>
<script src="Assets/js/jquery.js"></script>
</head>
<body onload='pp();'>
<div id="wrapper-gradiant">
<div id="wrapper-bgshadow">
		<div id="wrapper">
<div id="header-wrapper">
	<div id="header">
		<div id="logo">
					<center><h1><a href="Home.php"><font color="#F0FAFA">C</font><font color="#F0FAFA">ampus</font><font color="#F0FAFA">A</font><font color="#F0FAFA">venue</font></a></h1></center>center><h1><a href="#"><font color="blue">C</font><font color="yellow">a</font><font color="red">m</font><font color="violet">p</font><font color="white">u</font><font color="orange">s</font><span><font color="yellow">A</font>venue</span></a></h1></center>

				</div>
	</div>
</div>

</div>
<div id="page">
	<div class="bgtop"></div>
	<div class="content-bg">
		<div id="content">
			<div class="post">
				<p class="date"><b></b></p>
				<h2 class="title">Upload Material</h2>

<div class="entry">
<form  action="Sell_Submit.php" name="my" method="post" enctype="multipart/form-data" >
 <table class=table-bordered >
	 <tr><td>Material Name</td><td><input type=text name="mn" id="mn" required></td></tr>

	 <tr><td>Material Details</td><td><textarea name="md" id="md" required></textarea></td></tr>




	 <tr><td>Material Image</td><td><input type=file name="mi" id="mi"></td></tr>

	<tr><td>Choose</td>
	<td><select name="esd" id="esd" onchange="Pric();">
	<option value="-SELECT-">-SELECT-</option>
	<option value="Exchange">Exchange</option>
	<option value="Sell">Sell</option>
	<option value="Donate">Donate</option>
</select></td></tr>

 <tr><td>Price</td><td><input type="text" name="pr" id="pr" required><span id="prmsg"</span></td></tr>




	 <tr><td></td><td><input type=submit name="smt" id="smt" value="submit"></td></tr>

</table>
</form>

				</div>
			</div>
		</div>
<div id="sidebar">
			<div>
<?php
include("DataBase_Connection.php");
$q="select Photo,Name from registration where Username='".$_SESSION["nm"]."'";
$rs=mysql_query($q);
$rw=mysql_fetch_array($rs);
$a=100;
$b=100;
echo "<h3 class=title>".$rw[1]."</h3>";
echo "<img src='".$rw[0]."' height=".$a." width=".$b." class=img-circle>";

?>
<div><a href="Logout.php" class="btn btn-primary" role="button">Logout</a> <a href="Home.php" class="btn btn-primary" role="button">Back to Home Page</a></div>
		</div>

</div></div>

	</body>
</html>
