#!/usr/bin/php
<?php
	if ($argc == 1)
	exit();
$arr = explode(" ", $argv[1]); //split the eliments
$arr = array_filter($arr); //filter the arr
$first_element = array_shift($arr); //split the 1st element
array_push($arr, $first_element);
$str = implode(" ", $arr);
if (!empty($str))
	echo "$str\n";
?>
