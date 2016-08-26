
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



				<center><h1>Time to teach or learn Something right?</h1></center>
				<br><br><br>

				<form>
				<div class="form-group">

				    <input type="text" class="form-control" id="tech" name="tech" placeholder="What do you wanna teach">
  </div>
  <input type="button" id="tbtn" name="tbtn" class="btn btn-primary btn-lg btn-block" value="Submit">
  </form>
<br><br><div><a href="Home.php" class="btn btn-primary" role="button" style="float: left;">Home</a><div>
<div><a href="Logout.php" class="btn btn-primary" role="button" style="float: right;">Logout</a><div>
<table id="tb">
<thead><tr><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th></tr></thead>
<?php
include("DataBase_Connection.php");

$q="select * from learnteach";
$rs=mysql_query($q);
$a=100;
$b=100;
echo"<tbody>";
while($rw=mysql_fetch_array($rs))
{
echo "<tr><td>".$rw[0]."</td><td><img src=".$rw[1]." height=".$a." width=".$b."></td><td>".$rw[2]."</td><td>".$rw[3]."</td><td><b>".$rw[4]."</b></td><td>".$rw[5]."</td><td>".$rw[6]."</td><td>".$rw[7]."</td></tr>";
}

echo "</tbody></table>";

?>
<script>
$(function(){
$('#tbtn').click(function(){
if($('#tech').val()=="")
{
alert("Please enter what do you want to teach");
}
else
{
var str=$('#tech').val();
$.ajax({
url:'Learn_Submit.php',
datatype:'json',
type:'POST',
data:{"str":str},
success:function(){
console.log("submitted");
alert("data submitted Successfully");
},
error:function(){
console.log("Fail To Data submit");
}
});
}
});
})

</script>



	</body>
</html>
