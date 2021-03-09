<?php

	if(isset($_POST['submit'])){
		$bg = $_POST['bloodgroup'];
		
		echo $bg;
		
	}else{
		echo "invalid request";
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Blood Group Input</title>
</head>
<body>
	<form method="post" action="#">
		<fieldset>
			<legend>Blood Group</legend>
				<select name="bloodgroup">										<option value="A+">A+</option>
					<option value="B+">B+</option>
					<option value="O+" selected>O+</option>
				</select>
			<hr>

			<input type="submit" name="submit" value="submit">
		</fieldset>
	</form>
	
</body>
</html>