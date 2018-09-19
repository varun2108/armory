<html>
<head>
 <link rel="stylesheet" href="css/grant.css" type="text/css">

<title> WEAPON GRANT </title>
</head>
<body>
 <div class="logo">
 <h1>ARMORY DATABASE</h1>
 <h2>GRANTWEPON<h2>
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
<form method="post" action="grant.php">
 weapon name:<input type="text" name="weapon" placeholder="weapon name" required="required" /></br>
 soldier id:<input type="text" name="user_id" placeholder="user id" required="required" /></br>
<button type="submit" class="btn btn-primary btn-block btn-large" name="submitbtn">check.</button>
</form>
</div>
<div class="db">
<?php
if(isset($_POST['submitbtn'])){
include_once'connectingscript.php';
error_reporting(0);
ob_start();
$weaponname=$_POST['weapon'];
$user_id=$_POST['user_id'];
session_start();
//checking for availability of wepons
$cmd1="SELECT * FROM wepon WHERE wepon_name = '$weaponname' AND available_no > 1";
$res1=mysqli_query($con,$cmd1) or die('Error: ' . mysqli_error());
$rows_returned = mysqli_num_rows($res1);
if($rows_returned > 0)
{	
	//wepon available checking wether requester trained or not 
	$quary1="SELECT * FROM training WHERE emp_id = '$user_id' AND weponname = '$weaponname' ";
	$res2=mysqli_query($con,$quary1) or die('Error: ' . mysqli_error());
	$rows_returned2 =mysqli_num_rows($res2);
	if($rows_returned2 > 0)
	{
		//wepon awailable, user trained and checking wether user is in denial list
		$quary2="SELECT * FROM denial_list WHERE emp_id = '$user_id' ";
		$res3=mysqli_query($con,$quary2) or die('Error: ' . mysqli_error());
			$rows_returned3 =mysqli_num_rows($res3);
			if($rows_returned3 > 0){
				//user in denial list
				$res4=mysqli_fetch_assoc($res3);
				$msg="</br>denial report for:".$user_id."</br>".$res4['description'];
			}
			else{
				//user not in denial list
				$sql = "SELECT * FROM wepon_identity WHERE wepon_name = '$weaponname'";
				$res5=mysqli_query($con,$sql) or die('Error: ' . mysqli_error());
				$res6=mysqli_fetch_assoc($res5);
				$weponid=$res6['wepon_id'];
				$sql = "INSERT INTO `wepon_hold`(`emp_id`, `wepon_id`,`wepon_name`) VALUES ('$user_id','$weponid','$weaponname')";
				$res7=mysqli_query($con,$sql) or die('Error: ' . mysqli_error());
				$sql = "DELETE FROM `wepon_identity` WHERE wepon_id='$weponid'";
				$res8=mysqli_query($con,$sql) or die('Error: ' .mysqli_error());
				echo "<h3>the wepon with id:".$weponid."</br>is given to:".$user_id."</h3>";
				
			}
			
	}
	else{
		//user not trained
		$msg="</br>wepon found but not trained";
	}
}
else{
	//wepon not found
	$msg="</br>wepon not found";
}

echo $msg;
 $_POST['submitbtn']='null';
}
else{
	ob_flush();
}


?>
</div>
</body>
</html>