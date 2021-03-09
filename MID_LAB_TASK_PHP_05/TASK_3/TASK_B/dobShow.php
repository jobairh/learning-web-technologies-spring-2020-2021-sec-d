<?php

	//print_r($_GET['myname']);
	//print_r($_POST);
	
	if(isset($_POST['submit'])){

		$date 	= $_POST['dd'];
		$month 	= $_POST['mm'];
		$year 	= $_POST['yyyy'];

		if($date == "" || $month == "" || $year == ""){
			echo "null submission...";
		}else{
			echo $date."/".$month."/".$year;
		}

	}else{
		echo "invalid request...";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Date Of Birth Input</title>
</head>
<body>
	<form method="post" action="">
		<fieldset>
			<legend>Date Of Birth</legend>
&emsp;&emsp;&emsp;&emsp;&emsp; dd &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; mm &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; yyyy  <br>
                        <input type="number" name="dd" value="">/
			<input type="number" name="mm" value="">/  
			<input type="number" name="yyyy" value=""> <br>

			<input type="submit" name="submit" value="submit">
		</fieldset>
	</form>
	
</body>
</html>