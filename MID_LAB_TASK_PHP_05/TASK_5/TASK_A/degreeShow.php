
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