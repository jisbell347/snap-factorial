<?php

function calculate() {
	$n = 6;
	$x = 1;
	try {
		for($i=1;$i<=$n-1;$i++) {
			$x*= ($i+1);
		}
	} catch(\RangeException $exception) {
		if($n < 0 || $n > 20) {
			throw (new \RangeException("Cannot be a negative number"));
		}
	}
	return("The factorial of $n = $x"."\n");
}

echo calculate();