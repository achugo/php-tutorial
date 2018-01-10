<?php

$food = array('healthy' =>
				array('salad', 'pasta', 'vegetable') ,
			 'unhealthy' => 
			 	array('pizza', 'ice cream', 'juke box'));
echo $food['unhealthy'][0];

foreach ($food as $key => $value) {
	echo $key. "<br>";
	foreach ($value as $thing) {
		echo $thing. "<br>";
	}
}

?>