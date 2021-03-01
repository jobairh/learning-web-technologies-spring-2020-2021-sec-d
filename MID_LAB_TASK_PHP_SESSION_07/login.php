  
<?php
	session_start();
	
	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		
		if($username == "" || $password == ""){
			echo "Null submission";
			
		}else{
			
			$user = $_SESSION['user'];

			if($username == $user['username'] && $password == $user['password']){
				
				$_SESSION['status'] = true;
				header('location: home.php');

			}else{
				echo "invalid user...";
			}
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>

	<table border="1" align="center" width="80%">
 		<tr height="100px">
			<td >
				<img src="logo.png" width="100%" height="100%">
			</td>
			<td colspan="2" align="right">
				<a href="public_home1.html">Home</a> | 
				<a href="login.html">Login</a> |
				<a href="registration.html">Registration</a>  &nbsp;
			</td>
			
		</tr>
<tr height="200px">
<td colspan="2" align="center" >
	<form method="post" action="loginCheck.php" > 
		<fieldset width="300px">
			<legend >Login</legend>
			<table >
				<tr>
					<td>Username</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>

				<tr>
					<td colspan="2">
					
					<input type="checkbox" name="remember_me" value="YES">Remember Me
					</td>
				</tr>

				<tr>
					<td colspan="2">
						<input type="submit" name="submit" value="Submit">
						<a href="forget_password.html"> Forgot Password?</a>
					</td>
				</tr>
			</table>
		</fieldset>
	  
	</form>

</td>
</tr>

<tr height="50px">
			<td colspan="3" align="center">
				copyright@2017
			</td>
		</tr>
</table>
</body>
</html>