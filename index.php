
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  
  <link rel="stylesheet" href="css/style.css" type="text/css">

</head>

<body><div class="can">
<center><h1>ARMORY DATABASE PORTAL</h1></center>
</div>
<div class="cot">
  <div class="login">
	
	<h1>Login</h1>
    <form method="post" action="index.php">
    	<input type="text" name="u" placeholder="Username" required="required" />
        <input type="password" name="p" placeholder="Password" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large">Let me in.</button>
    </form>

</div>
  
   
  <?php  
	session_start();
	error_reporting(0);
	include'connectingscript.php';
    $user=$_POST['u'];
    $pass=$_POST['p'];
    $quary="SELECT emp_id FROM password 
	WHERE username='$user' and password='$pass'";
	$res=mysqli_query($con,$quary) or die("error");
	$count=mysqli_num_rows($res);
	if($count==1){
		echo "login sucessfull"; 
			$_SESSION['user']=$user;
	$_SESSION['pass']=$pass;
	$res2=mysqli_fetch_assoc($res);
		$user_id=$res2['emp_id'];
		$_SESSION['userid']=$user_id;
	
	header('Location: new.php'); 
		
	}
	else{
		$_SESSION['user']='null';
		echo'<div calss="fail">';
		echo '<b> LOGIN FAILED </b>';
		echo'</div>';
	}
	?>
	<div class="footer">&copy all rights of this project are reserved with</br>mr.varun,mr.siddesh,miss.triveni and miss.shriraksha</div>
	

	
	</script>
	</div>
</body>
</html>