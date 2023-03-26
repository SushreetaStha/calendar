<?php
	function add($num1)
	{
		return $num1++;

	}
	function addR(&$num1)
	{
		return $num1++;

	}
	$data=8;
	add($data);
	echo $data;
	echo "<br>";
	addR($data);
	echo $data;

//dynamic function call

	function area($l,$b)
	{
		return $l*$b;
	}
		$book="area";
		$copy="area";
	echo $book(10,3);
	echo "<br>";
	echo $copy(5,3);

// lamda function

	$area=create_function('$l,$b','return $l*$b');
	{
		echo $area(10,3);
	}

?>