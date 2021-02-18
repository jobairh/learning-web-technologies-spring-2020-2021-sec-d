<?php

echo " 7) ";

echo "\n \n";

$star = "*" ;
for ( $row = 0 ; $row < 3 ; $row ++ ) { 
	for ($column = 0 ; $column <= $row  ; $column ++ ) {
         echo $star;
	}
	echo "\n";
}
echo "___________";

echo "\n";
$digit= 1;
for ( $row = 3 ; $row != 0 ; $row -- ) { 
	for ($column = 0 ; $column < $row  ; $column ++ ) {
        
         echo $digit ;
         $digit++ ;
	}
	$digit = 1 ;
	echo "\n" ;
}
echo "___________";
echo "\n";

$array = [ "A" , "B" , "C" ];
for ( $row = 0 ; $row < 3 ; $row ++ ) { 
	for ($column = 0 ; $column <= $row  ; $column ++ ) {
        echo $array[$column] ; 
	}
	echo "\n";
}
echo "\n";
echo "___________";

?>


