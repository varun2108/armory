
<html>
<head>
 <link rel="stylesheet" href="css/report.css" type="text/css">

<title> FORENSICREPORT </title>
</head>
<body>
 <div class="logo">
 <h1>ARMORY DATABASE</h1>
 <h2>REPORT GENERATION</h2>
 </div>
 <div id="cssmenu">
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
<div class="info">
 <form method="post" action="report.php">
    	<input type="text" name="buletid" placeholder="Bulet id" required="required" />
		 <button type="submit" name="submit" class="btn btn-primary btn-block btn-large">submit</button>
    </form>
	</div>
	</body>
</html>	
	

<?php
		error_reporting(0);
		include"connectingscript.php";
		if(isset($_POST['submit'])){
			echo '<div class="db">';
			$buletID=$_POST['buletid'];
			$query = "SELECT * FROM `bulets_used` WHERE bulet_no='$buletID'";
			$res=mysqli_query($con,$query) or die("error");
			$count=mysqli_num_rows($res);
			if($count==1){
				$res1=mysqli_fetch_assoc($res);
				$emp_id=$res1['emp_id'];
				$sql = "SELECT * FROM `employee` WHERE emp_id='$emp_id'";
				$res2=mysqli_query($con,$sql) or die("error");
				$res3=mysqli_fetch_assoc($res2);
				echo 'this is to certify that mr.'.$res3['name'].'has used the bulet with bulet id:'.$buletID.'</br>
						on the date:'.$res1['date'];
			}
			else{
				$sql = "SELECT * FROM `bulets_loaded` WHERE bulet_no='$buletID'";
					$res=mysqli_query($con,$query) or die("error");
					$count=mysqli_num_rows($res);
					if($count==1){
						$res1=mysqli_fetch_assoc($res);
						$wepon_id=$res1['wepon_id'];
						$sql = "SELECT * FROM `employee` WHERE emp_id=(SELECT emp_id FROM `wepon_hold` WHERE wepon_id='$wepon_id')";
						$res2=mysqli_query($con,$sql) or die("error");
						$res3=mysqli_fetch_assoc($res2);
						echo 'this is to certify that mr.'.$res3['name'].'posseses the bulet with bulet id:'.$buletID.'</br>
						with wepon_ID:'.$wepon_id;
					}
					else
						echo "   &nbspthere is no match found for thye bulet _id  :  ".$buletID;
				}
			echo "</div>";	
echo '<button class="button" onClick="window.print()">Print this page</button>';	
		}



?>