<?php

	if(isset($_POST['submit'])){
		$bg = $_POST['bloodgroup'];
		
		echo $bg;
		
	}else{
		echo "invalid request";
	}

?>