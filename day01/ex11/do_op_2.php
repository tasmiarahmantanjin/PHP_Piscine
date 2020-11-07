#!/usr/bin/php
<?php

function check_whitespace($str)
{
	return(($str) || is_numeric($str));
}

if ($argc == 2)
{
	if (strpos($argv[1], '+'))
		$op = '+';
	else if (strpos($argv[1], '*'))
		$op = '*';
	else if (strpos($argv[1], '-'))
		$op = '-';
	else if (strpos($argv[1], '/'))
		$op = '/';
	else if (strpos($argv[1], '%'))
		$op = '%';
	else
	{
		print ("Syntax Error\n");
		return ;
	}
	$arr = explode($op, $argv[1]);
	if (count($arr) != 2)
	{
		print ("Syntax Error\n");
		return ;
	}
	if (!is_numeric($num1 = trim($arr[0])))
	{
		print ("Syntax Error\n");
		return ;
	}
	if (!is_numeric($num2 = trim($arr[1])))
	{
		print ("Syntax Error\n");
		return ;
	}
	if ($op == "+")
		print ($num1 + $num2);
	else if ($op == "-")
		print ($num1 - $num2);
	else if ($op == "*")
		print ($num1 * $num2);
	else if ($op == "/")
	{
		if ($num2 == 0)
		{
			print ("Syntax Error\n");
			return ;
		}
		print ($num1 / $num2);
	}
	else if ($op == "%")
	{
		if ($num2 == 0)
		{
			print ("Syntax Error\n");
			return ;
		}
		print ($num1 % $num2);
	}
	else
	{
		print ("Syntax Error\n");
		return ;
	}
	print("\n");
}
else
	print("Incorrect Parameters\n")
?>