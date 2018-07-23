<?php

function calculate() {
	$n = 6;
	$x = 1;
	for($i=1;$i<=$n-1;$i++) {
		$x*= ($i+1);
		if($n < 0) {
			throw (new \InvalidArgumentException("Cannot be a negative number"));
		}
		if($n > 20) {
			throw (new \RangeException("Initial number cannot exceed 20"));
		}
	}
	return("The factorial of $n = $x"."\n");
}

echo calculate();