

<!DOCTYPE html>
<html>
<head>
	<title>Blood Group Input</title>
</head>
<body>
	<form method="post" action="#">
		<fieldset>
			<legend>Blood Group</legend>
				<select name="bloodgroup">										<option value="A+" 
<?php
	if(isset($_POST['submit'])){
		if($_POST['bloodgroup']=="A+"){
		
		echo "selected";
		}
	}
?>
>A+</option>
					<option value="B+" 
<?php
	if(isset($_POST['submit'])){
		if($_POST['bloodgroup']=="B+"){
		
		echo "selected";
		}
	}
?>
>B+</option>
					<option value="O+" 
<?php
	if(isset($_POST['submit'])){
		if($_POST['bloodgroup']=="O+"){
		
		echo "selected";
		}
	}
?>
>O+</option>
				</select>
			<hr>

			<input type="submit" name="submit" value="submit">
		</fieldset>
	</form>
	
</body>
</html>