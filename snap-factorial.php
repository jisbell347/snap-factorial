<?php

function calculate($n) {
	$x = 1;
	if($n < 0 || $n > 20) {
		throw (new \RangeException("Cannot be a negative number or be greater than 20"));
	}
	for($i=1 ;$i<=$n; $i++) {
		$x*= $i;
	}
	return("The factorial of $n = $x"."\n");
}

echo calculate(5);