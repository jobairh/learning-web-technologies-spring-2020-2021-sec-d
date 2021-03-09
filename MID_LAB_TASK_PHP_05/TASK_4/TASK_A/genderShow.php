<?php

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
?>