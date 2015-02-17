<?php

$i=1;

while($i<100) {
	if(is_int($i/3) && is_int($i/5)) {
		echo 'FizzBuzz' . '<br>';
		$i++;
	}
	if(is_int($i/3))
	{
		echo 'Fizz' . '<br>';
		$i++;
	}
	if(is_int($i/5)){
		echo 'Buzz' . '<br>';
		$i++;
	}
	else{
		echo $i . '<br>';
		$i++;
	}
}
?>
