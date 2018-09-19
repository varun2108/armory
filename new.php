
<html>
<head>
<title>HOME</title>
 <link rel="stylesheet" href="css/home.css" type="text/css">
 </head>
 <script language="javascript" type="text/javascript">
	
	var timerid = 0;
var images = new Array(	"http://localhost:81/dashboard/armary1/image/slide1.jpg",
			"http://localhost:81/dashboard/armary1/image/slide2.jpg",
			"http://localhost:81/dashboard/armary1/image/slide3.jpg");
var countimages = 0;
function startTime()
{
	if(timerid)
	{
		timerid = 0;
	}
	var tDate = new Date();
	
	if(countimages == images.length)
	{
		countimages = 0;
	}
	if(tDate.getSeconds() % 5 == 0)
	{
		document.getElementById("img1").src = images[countimages];
	}
	countimages++;
	
	timerid = setTimeout("startTime()", 1000);
}
</script>
	
	</script>
 <body onload="startTime();">
 <div class="logo">
 <h1>ARMORY DATABASE PORTEL</h1>
 
 </div>
<ul><?php
	session_start();
	if($_SESSION['user']=='null'){
		header('location: index.php');
	}
  echo "<li><a href='new.php'>HOME</a></li>";
  echo "<li><a href='grant.php'>GRANTWEAPON</a></li>";
 echo "<li><a href='reciecve.php'>RECIEVEWEAPON</a></li>";
 echo "<li><a href='report.php'>FORENSICREPORT</a></li>";
	echo "<li><a href='report1.php'>SERVIECE</a></li>";
   echo'<li><a href="index.php">user:'.$_SESSION["user"].'</a></li>';
   ?>
</ul>
<h3>DASHBOARD<h3>
	<img id="img1" src="http://localhost:81/dashboard/armary1/image/first.jpg" width="800" height="400" />
	<div class="video">
	 <video width="320" height="240" controls>
  <source src="http://localhost:81/dashboard/armary1/working.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video> 
	<video width="320" height="240" controls>
  <source src="http://localhost:81/dashboard/armary1/working2.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video>
	</div>
	<div class="foot">
<?php
include'connectingscript.php';
$userid=$_SESSION['userid'];
$sql ="SELECT * FROM `login` WHERE serno=(select (max(serno)-1) from `login` where emp_id='$userid')";
$res=mysqli_query($con,$sql) or die("error");
$res2=mysqli_fetch_assoc($res);
echo 'last_login:'.$res2['date'];
?>
</div>
 </body>
</html>
