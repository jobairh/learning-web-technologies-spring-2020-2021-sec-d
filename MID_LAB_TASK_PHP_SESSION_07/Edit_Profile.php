<?php
	session_start();

	if(isset($_POST['submit'])){
		
		$name 			= $_POST['name'];
		$email 			= $_POST['email'];
		$gender 		= $_POST['gender'];
		$day 			= $_POST['dd'];
		$month 			= $_POST['mm'];
		$year 			= $_POST['yyyy'];

		if($name == "" || $email == "" || $gender == "" 
		|| $day == "" || $month == "" || $year == ""){
			
			echo "invalid information...please try again!";
			
		}else{
				//store user information
				$user = [
							'name'		=>$name, 
							'email'		=>$email, 
							'gender'	=>$gender,
							'day'		=>$day,
							'month'		=>$month,
							'year'		=>$year
						];

				$_SESSION['user'] = $user;

				header('location: view_profile.php');
				
			}
		}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Profile</title>
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
<h4>&nbsp; &nbsp; Account</h4>
<hr width="90%">
				<ul>
					<li><a href="logged_in_Dashboard">Dashboard</a></li>
					<li><a href="view_profile.html">View Profile</a></li>
					<li><a href="Edit_Profile.html">Edit Profile</a></li>
					<li><a href="profile_picture.html">Change Profile Picture</a></li>
					<li><a href="Change_Password.html">Change Password</a></li>
					<li><a href="login.html">Log Out</a></li>
				</ul>
			</td>
			<td colspan="3" width="70%">
<fieldset>

<legend><h2>Edit Profile</h2></legend>

Name &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:<input type="text" name="username" value=""><hr>
Email &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:<input type="mail" name="mail" value=""><hr>
Gender &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:<input type="radio" name="Gender" value="male">Male
<input type="radio" name="Gender" value="Female">Female
<input type="radio" name="Gender" value="other">Other
<hr>
Date Of Birth:<input type="text" name="DOF" value=""><br>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
<i>(dd/mm/yyyy)</i>

<hr>
<input type="submit" name="submit" value="submit">
			
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