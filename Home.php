

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
<script src="Assets/js/jquery.js"></script>
</head>
<body>

<div id="header-wrapper">
	<div id="header">
		<div id="logo">
					<center><h1><a href="#"><font color="#F0FAFA">C</font><font color="#F0FAFA">ampus</font><font color="#F0FAFA">A</font><font color="#F0FAFA">venue</font></a></h1></center>

				</div>
	</div>
</div>

<div id="page">
	<div class="bgtop"></div>
	<div class="content-bg">
		<div id="content">
			<div class="post">
				<p class="date"><b></b></p>
                <table>
				<tr > <td width="00px"></td><td><h3><p>&diams;Do you wanna exchange, donate, buy or sell study material??</p></h3><br></td><td width="00px"></td></tr>
				<tr><td width="70px"></td><td><a href="buy.php" class="btn btn-primary btn-lg btn-block" role="button">Go</a></td></tr><br><br><br>
				<tr><td width="70px"></td><td><br><h3><p>&diams;Do you wanna Teach or Learn Something??</p></h3></td><td width="70px"></td></tr>
				<tr><td width="70px"></td><td><a href="learn.php" class="btn btn-primary btn-lg btn-block" role="button">Go</a></td></tr>
				<tr><td width="70px"></td><td><br><h3><p>&diams;What's in your Account??</p></h3></td><td width="70px"></td></tr>
				<tr><td width="70px"></td><td><a href="myaccount.php" class="btn btn-primary btn-lg btn-block" role="button">Take me to Account settings</a></td></tr>
</table>

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
<div><a href="Logout.php" class="btn btn-primary" role="button">Logout</a></div>
		</div>


</div>



	</body>
</html>
