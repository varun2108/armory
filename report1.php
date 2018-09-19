
<html>
<head>
 <link rel="stylesheet" href="css/report1.css" type="text/css">

<title> DENIALMANGEMENT </title>
</head>
<body>
 <div class="logo">
 <h1>ARMORY DATABASE</h1>
 <h2>UPDATION OF DENIALLIST</h2>
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
</div>
<div class="logo1">
<li><a href='report1.php'>deniallist</a></li></br>
 <li><a href='service2.php'>loadbulet</a></li>

</div>
<div class="info1">
<form method="post" action="report1.php">
   <button type="submit" name="add" class="mainbtn">add</button>
   <button type="submit" name="release" class="mainbtn">relese</button>
   <form>
   </div>
<div class="info">
<?php
	if(isset($_POST['add'])){
 echo '<form method="post" action="report1.php">
    	<input type="text" name="userid" placeholder="useridid"  />
		<input type="text" name="desc" placeholder="description"  />
		 <button type="submit" name="submit1" class="btn btn-primary btn-block btn-large">submit</button>
    </form>';
	}
	if(isset($_POST['release'])){
 echo '<form method="post" action="report1.php">
    	<input type="text" name="userid" placeholder="useridid"  />
		 <button type="submit" name="submit2" class="btn btn-primary btn-block btn-large">submit</button>
    </form>';
	}
?>
	</div>
	</body>
</html>	
	

<?php
		include"connectingscript.php";
		if(isset($_POST['submit1'])){
				error_reporting(0);
			echo '<div class="db">';
			$userid=$_POST['userid'];
			$desc=$_POST['desc'];
			$query= "INSERT INTO denial_list (`emp_id`, `description`) VALUES ('$userid','$desc')";
			$res=mysqli_query($con,$query) or die("error user may not be exist or already in denial list");
			echo '<div class="green">user &nbsp &nbsp'.$userid.'</br>is sucessfully added to the denial list</div>';
		}
		else if(isset($_POST['submit2'])){
			echo '<div class="db">';
			$userid=$_POST['userid'];
			$query= "DELETE FROM `denial_list` WHERE emp_id='$userid'";
			$res=mysqli_query($con,$query) or die("error user may not be exist or already in denial list");
			echo '<div class="green">user  &nbsp &nbsp :'.$userid.'</br>is sucessfully deleted from the denial list</div>';
		}




?>