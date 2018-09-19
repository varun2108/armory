
<html>
<head>
 <link rel="stylesheet" href="css/report1.css" type="text/css">

<title> BULETS LOADED </title>
</head>
<body>
 <div class="logo">
 <h1>ARMORY DATABASE</h1>
 <h2>LOADBULET</h2>
 </div>
 <div class="cssmenu">
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
</div>

<div class="logo1">
<li><a href='report1.php'>deniallist</a></li></br>
 <li><a href='service2.php'>loadbulet</a></li>

</div>
<div class="info">
	<form method="post" action="service2.php">
    	<input type="text" name="weponid" placeholder="weponid" />
		<input type="text" name="buletid" placeholder="buletid"  />
		 <button type="submit" name="submit1" class="btn btn-primary btn-block btn-large">submit</button>
    </form>
</div>
	</body>
</html>	
	

<?php
		include"connectingscript.php";
		if(isset($_POST['submit1'])){
				error_reporting(0);
			echo '<div class="db">';
			$weponid=$_POST['weponid'];
			$buletid=$_POST['buletid'];
			$query= "INSERT INTO `bulets_loaded` (`wepon_id`, `bulet_no`) VALUES ('$weponid','$buletid')";
			$res=mysqli_query($con,$query) or die("error");
			echo '<div class="green">wepon &nbsp &nbsp'.$weponid.'</br>is sucessfully loaded with bulet:'.$buletid.'</div>';
		echo '</div>';
		}


?>