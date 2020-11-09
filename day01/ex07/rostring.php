#!/usr/bin/php
<?php
	if ($argc == 1)
	exit();
	$arr = array_filter(explode(" ", $argv[1])); //split the eliments
	$first_elem = array_shift($arr); //split the 1st element
	array_push($arr, $first_elem);
	$str = implode(" ", $arr);
	if (!empty($str))
		print "$str\n";
?>
