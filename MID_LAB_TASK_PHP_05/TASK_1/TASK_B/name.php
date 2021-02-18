<?php

	//print_r($_GET['myname']);
	//print_r($_POST);
	
	if(isset($_POST['submit'])){

		$name 		= $_POST['myname'];
		

		if($name == ""){
			echo "null submission...";
		}else{
			echo $name;

		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Name Input</title>
</head>
<body>
	<form method="post" action="#">
		<fieldset>
			<legend>Name</legend>
			Name: <input type="text" name="myname" value="">
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
	
</body>
</html>