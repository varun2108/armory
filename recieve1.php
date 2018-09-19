

<html>
<head>
 <link rel="stylesheet" href="css/recieve.css" type="text/css">

<title> WEAPON GRANT </title>
</head>
<body>
 <div class="logo">
 <h1>ARMARY DATABASE</h1>
 <h2>RECIEVE WEOPN</h2>
 </div>
 <ul><?php
	session_start();
	if($_SESSION['user']=='null'){
		header('location: index.php');
	}
  echo "<li><a href='grant.php'>GRANTWEPON</a></li>";
 echo "<li><a href='reciecve.php'>RECIEVEWEPON</a></li>";
 echo "<li><a href='report.php'>FORENSICREPORT</a></li>";
	echo "<li><a href=>SERVIECE</a></li>";
  echo "<li>user:".$_SESSION['user']."</li>";
   echo"<li><a href='index.php'>LOGOUT</a></li>";
   ?>
</ul>
<div class="info">
<?php
if(isset($_POST['btn'])){
if($_POST['bulletno']!="none"){
	$count=1;
	while($count<=$_POST['bulletno']){
		echo '<form method="post" action="recieve1.php">
		<h4>'.$count.'  BULET ID:</h4>
	<input type="text" name="bulet'.$count.'" " placeholder="buletid'.$count.'" required="required" />
	<h4>$count BULLET USED DATE:</h4>
	<input type="date" name="date'.$count.'" " placeholder="date" required="required">';
	$count++;
	
	}
		echo '<button type="submit" class="btn btn-primary btn-block btn-large" name="bltid">submit</button>
		 </form>';
		$i=1;
		while($i<=$_POST['bulletno']){
		echo $_POST['date1'];
		echo $_POST['date$i'];
		$i++;
		}
}
}

?>
</div>
</body>
</html>
