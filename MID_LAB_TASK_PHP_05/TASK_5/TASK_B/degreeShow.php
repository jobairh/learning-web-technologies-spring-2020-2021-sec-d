<?php

	if(isset($_POST['submit'])){
		$degree = $_POST['degree'];
		
		if(empty($degree)){
				echo "null submission...";
			}else{
				$f = count($degree);
				
				
				for($i = 0; $i < $f; $i++){
					echo $degree[$i]." ";
				}
			}
	}else{
		echo "invalid submission";
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Degree Input</title>
</head>
<body>
	<form method="post" action=" ">
		<fieldset>
			<legend>Degree</legend>

                        <input type="checkbox" name="degree[]" value="SSC">SSC
			<input type="checkbox" name="degree[]" value="HSC">HSC
			<input type="checkbox" name="degree[]" value="BSc"> BSc
			<input type="checkbox" name="degree[]" value="MSc"> MSc <hr>

			<input type="submit" name="submit" value="submit">
		</fieldset>
	</form>
	
</body>
</html>