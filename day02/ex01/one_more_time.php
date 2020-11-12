#!/usr/bin/php
<?php
	date_default_timezone_set('Europe/Paris');
	$month = array(
		1 => "janvier",
		2 => "février",
		3 => "mars",
		4 => "avril",
		5 => "mai",
		6 => "juin",
		7 => "juillet",
		8 => "août",
		9 => "septembre",
		10 => "octobre",
		11 => "novembre",
		12 => "décembre");
	$day_of_week = array(
		1 => "lundi",
		2 => "mardi",
		3 => "mercredi",
		4 => "jeudi",
		5 => "vendredi",
		6 => "samedi",
		7 => "dimanche");
	if ($argc < 2)
		exit();
	$arr = explode(" ", $argv[1]); //Mardi 12 Novembre 2013 12:02:21"
//		print_r ($arr);
//		print count($arr);
//		print ("\n");
/// === check if the datatype and value both are same

	if ((count($arr) != 5) ||
		(preg_match("/^[1-9]$|0[1-9]|[1-2][0-9]|3[0-1]$/", $arr[1], $arr[1]) === 0) ||
		(preg_match("/^[0-9]{4}$/", $arr[3], $arr[3]) === 0) ||
		(preg_match("/^([0-1][0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/", $arr[4], $arr[4]) === 0))
		{
			echo "Wrong Format\n";
			exit();
		}

	$arr[0] = array_search(lcfirst($arr[0]), $day_of_week);	//make a string's first character lowercase.
	$arr[2] = array_search(lcfirst($arr[2]), $month);
//	print ($arr[2]);
//	print ("\n");
	if ($arr[0] === false || $arr[2] === false)
	{
		echo "Wrong Format\n";
		exit();
	}
//mktime (hour, minute, second, month, day, year)
	$time = mktime($arr[4][1], $arr[4][2], $arr[4][3], $arr[2], $arr[1][0], $arr[3][0]);

//	N	 ISO-8601 numeric representation of the day of the week
	if (date( "N", $time) == $arr[0])
		echo $time."\n";
	else
		echo "Wrong Format\n";
// Form: Day_of_the_Week(french) Number_of_day Month(french) Year Hours:Minutes:Seconds
?>
