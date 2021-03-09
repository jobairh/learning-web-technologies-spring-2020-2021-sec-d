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