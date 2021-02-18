<?php

echo " 6) ";

$array = [ "asim" , "anik" , "rudro" , "piash" , "khan"  ] ;

$find = "piash" ;
$count = 0 ;

for ($i = 0; $i < count($array); $i++ )
     { 
     if( $array [ $i ] === $find )
        {
        echo $find. " is in " .$i. " number index";
	  $count = $count + 1 ;
	}
      }
      if($count === 0) 
      {
	echo "Couldn't find any match";
      }
?>


