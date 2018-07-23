<?php

function calculate($n) {
	$x = 4;
	try {
		for($i=1;$i<=$x-1;$i++) {
			$n*= ($i+1);
		}
	} catch(\RangeException $exception) {
		if($n < 0 || $n > 20) {
			throw (new \RangeException("Cannot be a negative number"));
		}
	}
	return($n);
}

echo calculate(7);