<?php
/*
	//print_r($_GET['myname']);
	//print_r($_POST);
	
	if(isset($_POST['submit'])){

		$gender	= $_POST['gender'];
		

		if($gender == "" ){
			echo "null submission...";
		}else{
			echo $gender;
		}

	}else{
		echo "invalid request...";
	}
*/
?>

<!DOCTYPE html>
<html>
<head>
	<title>Gender Input</title>
</head>
<body>
	<form method="post" action="#">
		<fieldset>
			<legend>Gender</legend>

                        <input type="radio" name="gender" value="male"
<?php
	if(isset($_POST['submit'])){


		if($_POST['gender'] == "male" ){
			echo "checked";
		
		}

	} 
?>
>male
			<input type="radio" name="gender" value="female"
<?php
	if(isset($_POST['submit'])){


		if($_POST['gender'] == "female" ){
			echo "checked";
		
		}

	} 
?>
>female 
			<input type="radio" name="gender" value="others"
<?php
	if(isset($_POST['submit'])){


		if($_POST['gender'] == "others" ){
			echo "checked";
		
		}

	} 
?>
> others <hr>

			<input type="submit" name="submit" value="submit">
		</fieldset>
	</form>
	
</body>
</html>

