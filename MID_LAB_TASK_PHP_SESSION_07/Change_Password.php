<?php
	session_start();

	if(isset($_POST['submit'])){
		
		$currentPass	= $_POST['currentPass'];
		$newPass		= $_POST['newPass'];
		$rePass			= $_POST['rePass'];
		
		if($currentPass == "" || $newPass == "" || $rePass == ""){
			
			echo "invalid information...please try again!";
			
		}else{
				if($currentPass != $newPass && $newPass === $rePass){
					
					$user = $_SESSION['user'];
					$user['password'] = $newPass;
					$_SESSION['user'] = $user;
					
					header('location: login.php');
					
				}else{
					echo "Passwords do not match, Please Try Again";
				}
			}
		}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
</head>
<body>

	<table border="1" align="center" width="80%">
 		<tr height="100px">
			<td >
				<img src="logo.png" width="100%" height="100%">
			</td>
			<td colspan="2" align="right">
				<txt>Logged in as</txt>
				<a href="logged_in_Dashboard.html">Bob</a> | 
				<a href="login.html">Logout</a>  &nbsp;
				
			</td>
			
		</tr>
<tr height="250px">
		
			<td>
<h3>&nbsp; &nbsp; &nbsp; Account</h3>
<hr width="90%">
				<ul>
					<li><a href="">Dashboard</a></li>
					<li><a href="">View Profile</a></li>
					<li><a href="">Edit Profile</a></li>
					<li><a href="">Change Profile Picture</a></li>
					<li><a href="">Change Password</a></li>
					<li><a href="">Log Out</a></li>
				</ul
        </td>
    <td colspan="3" width="70%">
 <fieldset >

<legend ><h2>Change Password</h2></legend>

	
		
Current Password &nbsp; &nbsp; &nbsp; &nbsp;:<input type="password" name="password" value="">
	
<hr>

<h4 style="color: green;">New Password &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :<input type="password" name="confirm-pass" value=""> </h4><hr>

<h4 style="color: red;">Retype New Password &nbsp;:<input type="password" name="confirm-pass" value=""></h4>
				
<hr>
<input type="submit" name="button" value="submit">
			
</fieldset>
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