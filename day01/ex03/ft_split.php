#!/usr/bin/php
<?php

function check_whitespace($str)
{
	return(($str));
}

function ft_split($str)
{
	$arr = explode(" ", $str);
	$arr = array_filter($arr, "check_whitespace");
	sort($arr);
	return($arr);
}

?>