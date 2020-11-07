#!/usr/bin/php
<?php

if ($argc == 4)
{
	$num1 = trim($argv[1]);
	$op = trim($argv[2]);
	$num2 = trim($argv[3]);
	if ($op == "+")
		print ($num1 + $num2);
	else if ($op == "-")
		print ($num1 - $num2);
	else if ($op == "*")
		print ($num1 * $num2);
	else if ($op == "/")
		print ($num1 / $num2);
	else if ($op == "%")
		print ($num1 % $num2);
	print("\n");
}
else
	print("Incorrect Parameters\n")
?>
