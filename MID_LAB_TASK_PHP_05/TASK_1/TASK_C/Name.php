<?php

	//print_r($_GET['myname']);
	//print_r($_POST);
	
	if(isset($_POST['submit'])){

		$name 	= $_POST['myname'];
		

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
			Name: <input type="text" name="myname" value="<?php echo $name; ?>"> 
			<input type="submit" name="submit" value="submit">
		</fieldset>
	</form>
	
</body>
</html>