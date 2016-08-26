
<?php
session_start();
if(!isset($_SESSION["nm"]))
{
header("Location:index.html");
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CampusAvenue</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet" type="text/css" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet"  href="Assets/css/jquery.dataTables.css">
<link href="Assets/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<script src="Assets/js/jquery.js"></script>
<script src="Assets/js/jquery.datatables.js"></script>
<script src="Assets/js/Mac.js"></script>


</head>
<body onload="Macc();">
<div id="header-wrapper">
	<div id="header">
		<div id="logo">
					<center><h1><a href="Home.php"><font color="#F0FAFA">C</font><font color="#F0FAFA">ampus</font><font color="#F0FAFA">A</font><font color="#F0FAFA">venue</font></a></h1></center>

				</div>
	</div>
</div>


				<center><h1>My Account</h1></center>

<div id="page">
	<div class="bgtop"></div>
	<div class="content-bg">
		<div id="content">
			<div class="post">
				<p class="date"><b></b></p>


<center><h1>Material</h1></center>
<table class="table table-striped">
<thead><tr><th></th><th>Item no.</th><th>Material Name</th><th>Details</th><th>I want to</th><th>Price</th><th>Image</th></tr></thead>
<?php
include("DataBase_Connection.php");

$q="select * from buysell where Username='".$_SESSION["nm"]."'";
$rs=mysql_query($q);
$a=100;
$b=100;
echo"<tbody>";
while($rw=mysql_fetch_array($rs))
{
echo "<tr><td><input type='button' id=".$rw[0]." value='Delete' class='ch' onclick='Lod();'></td><td>".$rw[0]."</td><td>".$rw[1]."</td><td>".$rw[2]."</td><td>".$rw[3]."</td><td>".$rw[4]."</td><td><img src=".$rw[5]." height=".$a." width=".$b."></td></tr>";
}

echo "</tbody></table>";

?>
<center><h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Services </h1></center>

<table class="table table-striped">
<thead></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th></tr></thead>
<?php
include("DataBase_Connection.php");

$f="select * from learnteach where User_Name='".$_SESSION["nm"]."'";
$v=mysql_query($f);
$a=100;
$b=100;
echo"<tbody>";
while($z=mysql_fetch_array($v))
{
echo "<tr><td><input type='button' id=".$z[0]."  value='Delete' class='chh' onclick='Lod();'></td><td>".$z[0]."</td><td><img src=".$z[1]." height=".$a." width=".$b."></td><td>".$z[2]."</td><td>".$z[3]."</td><td>".$z[4]."</td></tr>";
}

echo "</tbody></table>";

?>


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
<div><a href="Logout.php" class="btn btn-primary" role="button">Logout</a>
<a href="Home.php" class="btn btn-primary" role="button">Back to Home Page</a></div>
<center><h2>Account Info</h2></center>
<?php
$t="select * from registration where Username='".$_SESSION["nm"]."'";
$rp=mysql_query($t);
$rt=mysql_fetch_array($rp);
echo "<table class=table table-striped>";
echo "<tr><td>Name</td><td><input type=text value='".$rt[0]."' name='nme' id='nme' onkeyup='Namee();' ></td><span id='nmsge'></span></tr>";
echo "<tr><td>Contact no</td><td><input type=text value=".$rt[2]." name='cne' id='cne' onkeyup='Contacte();'></td><span id='cmsge'></span></tr>";
echo "<tr><td>current Password</td><td><input type=password placeholder='enter the current password' name='cpwde' id='cpwde' ></td></tr>";
echo "<tr><td>New Password</td><td><input type=password placeholder='enter the New password' name='npwde' id='npwde' onkeyup='Passe();'></td></tr>";
echo "<tr><td>confirm Password</td><td><input type=password placeholder='confirm new password' name='cnpwde' id='cnpwde'></td><span id='msge'></span></tr>";
echo "<tr><td><input type=button value='Edit Info' id='ei' onclick='Edt();'></td><td><input type=button value='Save Changes' id='sc' onclick='Lod();'></td></tr>";
echo "<tr><td></td><td></td></tr>";
echo "<tr><td></td><td></td></tr>";
echo "<form  action='Profilepic_Submit.php' name='my' method='post' enctype='multipart/form-data' >";
echo "<tr><td>Change Profile Picture</td><td><input type=file name='cpp' id='cpp' required></td></tr>";
echo "<tr><td></td><td><input type=submit class='btn btn-primary'  id='sbpp' name='sbpp' value='Save changes to IMAGE'></td></tr>";
echo "</form>";
echo "</table>";
?>

		</div>


</div>
<script>
$(function(){
$('#cpwde').keyup(function(){
var str=$('#cpwde').val();
$.ajax({
url:'Password_Match.php',
datatype:'json',
type:'POST',
data:{"dt":str},
success:function(dt){
if(dt=='true')
{
var npwde=document.getElementById("npwde").disabled=false;
var cnpwde=document.getElementById("cnpwde").disabled=false;
}
else
{
var npwde=document.getElementById("npwde").disabled=true;
var cnpwde=document.getElementById("cnpwde").disabled=true;
}
},
error:function(){
console.log("Something Wrong");
}
});
});
$('#cnpwde').change(function(){
if($('#npwde').val()!=$('#cnpwde').val())
{
document.getElementById("msge").innerHTML="";
document.getElementById("msge").innerHTML="<font color=red>password do not match</font>";
$('#npwde').keyup(function(){
document.getElementById("msge").innerHTML="";
});
$('#npwde').val('');
$('#cnpwde').val('');
document.getElementById("sc").disabled=true;
}

$('#cnpwde').keyup(function(){
if($('#npwde').val()==$('#cnpwde').val())
{
document.getElementById("msge").innerHTML="";
document.getElementById("sc").disabled=false;
}
});
});



$('#sc').click(function(){
if($('#npwde').val()=="")
{
var str=$('#nme').val()+"~"+$('#cne').val();
$.ajax({
url:'Update_Myacc.php',
datatype:'json',
type:'POST',
data:{"dt":str},
success:function(dt){
console.log("data Submitted");
alert("Your Profile has been updated ");
},
error:function(){
console.log("Something Wrong");
}
});
}
else
{
var str=$('#nme').val()+"~"+$('#cne').val()+"~"+$('#npwde').val();
$.ajax({
url:'Update_Myaccp.php',
datatype:'json',
type:'POST',
data:{"dt":str},
success:function(dt){
console.log("data Submitted");
alert("Your Profile has been updated ");
},
error:function(){
console.log("Something Wrong");
}
});
}
});



$('.ch').click(function(){
str=(this.id);
$.ajax({
url:'Material_delete.php',
datatype:'json',
type:'POST',
data:{"str":str},
success:function(dt){
console.log("Submitted");
console.log(str);
},
error:function(){
console.log("Something Wrong");
}
});
});


$('.chh').click(function(){
str=(this.id);
$.ajax({
url:'Service_delete.php',
datatype:'json',
type:'POST',
data:{"str":str},
success:function(dt){
console.log("Submitted");
},
error:function(){
console.log("Something Wrong");
}
});
});

});
</script>



	</body>
</html>
