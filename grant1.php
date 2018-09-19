<html>
<head>
 <link rel="stylesheet" href="css/recieve1.css" type="text/css">

<title> WEAPON GRANT </title>
</head>
<body>
 <div class="logo">
 <h1>ARMARY DATABASE</h1>
 <h2>RECIEVE WEOPN</h2>
 </div>
 <ul><?php
	session_start();
  echo "<li><a href='grant.php'>GRANTWEPON</a></li>";
 echo "<li><a href='reciecve.php'>RECIEVEWEPON</a></li>";
 echo "<li><a href=>FORENSICREPORT</a></li>";
	echo "<li><a href=>SERVIECE</a></li>";
  echo "<li>user:".$_SESSION['user']."</li>";
   echo"<li><a href='index.php'>LOGOUT</a></li>";
   ?>
</ul>
</body>
</html>
<?php
include"connectingscript.php";
$weponid=$_POST['weapon'];

?>