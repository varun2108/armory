<html>
<head>
 <link rel="stylesheet" href="css/recieve.css" type="text/css">

<title>RECIEVEWEPON </title>
</head>
<body>
 <div class="logo">
 <h1>ARMORY DATABASE</h1>
 <h2>RECIEVE WEAPON</h2>
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
<div class="info">
<form method="post" action="reciecve.php">
<h4>WEAPON ID:</h4><input type="text" name="weaponid" placeholder="weapon id" required="required" /></br>
<h4>BULLET ID:</h4><input type="text" name="buletid" "placeholder="buletid" ></br>
<h4>BULLET USED DATE:</h4><input type="date" name="date" placeholder="date" >
<button type="submit" class="btn btn-primary btn-block btn-large" name="btn1">go</button>
<button type="submit" class="btn btn-primary btn-block btn-large" name="btn2">recieve weapon</button>
</form>

</div>
</body>
</html>
<?php
		error_reporting(0);
		include"connectingscript.php";
		echo '<div class="db">';
			$weponid=$_POST['weaponid'];
		if(isset($_POST['btn1'])){
				
			
			$buletid=$_POST['buletid'];
			$date=$_POST['date'];
			$sql = "SELECT * FROM `wepon_hold` WHERE wepon_id='$weponid'";
			$res1=mysqli_query($con,$sql) or die("error");
			$res2=mysqli_num_rows($res1);
			if($res2==1){
				$res3=mysqli_fetch_assoc($res1);
				$empid=$res3['emp_id'];
			
			$query="INSERT INTO `bulets_used` (`bulet_no`, `emp_id`, `date`, `wepon_id`) VALUES ('$buletid','$empid','$date','$weponid')";
			$res=mysqli_query($con,$query) or die("error");
			echo 'successfully updated bulets loaded list with empid:'.$empid.' and bulet_no:'.$buletid.'</div>';
		
			}
		}
		else if(isset($_POST['btn2'])){
			$sql = "delete  FROM `wepon_hold` WHERE wepon_id='$weponid'";
			$res1=mysqli_query($con,$sql) or die("error");
			echo "successfully recieved the wepon";
		}
echo '</div>';
?>