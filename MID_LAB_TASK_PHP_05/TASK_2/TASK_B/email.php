<?php

	
	
	if(isset($_POST['submit'])){

		$email 	= $_POST['email'];
		

		if($email == ""){
			echo "null submission...";
		}else{
			echo $email;
		}

	}
else {
echo "invalid request..";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Email Input</title>
</head>
<body>
	<form method="post" action="#">
		<fieldset>
			<legend>Email</legend>
			Email: <input type="mail" name="email" value=""> <br>
			
			<input type="submit" name="submit" value="submit">
		</fieldset>
	</form>
	
</body>
</html>