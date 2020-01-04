
<?php
session_start();

if(isset($_POST['submit']))
{
include 'db.php';
	  $user_id=$_POST['user'];
	  $pers=$_POST['pass'];

	$fetch_query=mysqli_query($con,"select * from ADMIN_INFO_LOGIN where USER_NAME='$user_id' and  USER_PASSWORD='$pers'");
	
	$user_info="";
	$pass="";
	$agn_id="";
	while($info=mysqli_fetch_array($fetch_query))
	{
		
		   $user_info=$info['USER_NAME'];
		 $pass=$info['USER_PASSWORD'];
	  $agn_id=$info['UNIQUEE_ID'];

	}

	if($user_info==$user_id  &&  $pass==$pers)
	{

	$_SESSION['agents_idd']=$agn_id;
	$_SESSION['last_login_timestamp'] = time();
	header('location:..\\index.php');
}
else
{
	
	echo "<link rel='stylesheet' href='./style.css'>";
 
	echo "<script>
	function load()
	{
		window.location.href='#popup123'
	}
	</script>";
	echo "<body onload='load()'>";
	
	
	echo "<div id='popup123' class='overlay'>
		<div class='popup'>
			<h2>Sorry</h2>
			<a class='close' href='#'>&times;</a>
			<div class='content'>
				Invalid UserName Or Password?
			</div>
		</div>
	</div>";
	echo "</body>";

}
}

?>

<!DOCTYPE html>

<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="./style.css">
<!--===============================================================================================-->
</head>
<body>
<body>
	
<div class="limiter">
		<div class="container-login100" style="background-image: url('images/100.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="index.php" method="POST">
					<span class="login100-form-title p-b-26">
						Welcome
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="user">
						<span class="focus-input100" data-placeholder="User ID"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit" name="submit">
								Login
							</button>
							
						</div>	
					</div>
					
						<div class="box"> 
	<center><a class="button" href="#popup1"><font color="black">Forget&nbsp;Password</font></a></center>
</div>


					<div id="popup1" class="overlay">
	<div class="popup">
		<h2>Reset Account</h2>
		<a class="close" href="#">&times;</a>
		<div class="content">
		<div class="modal-body">
                <p>Enter your e-mail address below to reset your password.</p>
                <input type="text" name="email" placeholder="UserID" autocomplete="off" class="form-control placeholder-no-fix">
              </div>
              <div class="modal-footer">
              
                <button class="button" type="button"><font color="black">Submit</font></button>
              </div>
	</div>
</div>
					<!---<div class="text-center p-t-115">
						<span class="txt1">
							Don’t have an account?
						</span>

						<a class="txt2" href="#">
							Sign Up
						</a>
					</div>--->
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>