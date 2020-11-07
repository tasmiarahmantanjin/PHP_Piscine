#!/usr/bin/php

<?php

if ($argc == 2)
{
	$input = fopen("php://stdin", "r");
	$arr = array();
	while (!feof($input))
	{
		$line = trim(fgets($input));
		array_push($arr, $line);
	}
	if ($argv[1] == "average")
	{
		$average = 0;
		$count = 0;
		foreach($arr as $value)
		{
			if (!(strpos($value, "moulinette")))
			{
				$num = substr($value, strpos($value, ";") + 1, strpos($value, ";", strpos($value, ";") + 1) - strpos($value, ";") - 1);
				if (is_numeric($num))
				{
					$average += $num;
					$count++;
				}
			}
		}
		print($average / $count."\n");
	}
	if ($argv[1] == "average_user")
	{
		foreach($arr as $value)
		{
			if (!(strpos($value, "moulinette")))
			{
				$i = 0;
				while ($value[$i] != ';')
					$i++;
				$i++;
				while ($value[$i] != ';')
					$i++;
				$i++;
				if (is_numeric($value[strpos($value, ';') + 1]))
				{
					$name = substr($value, 0, strpos($value, ';'));
					if (isset($users[$name]))
					{
						$users[$name] += intval(substr(strstr($value, ";"), 1));
						$grade_count[$name] += 1;
					}
					else
					{
						$users[$name] = intval(substr(strstr($value, ";"), 1));
						$grade_count[$name] = 1;
					}
				}
			}
		}
		ksort($users);
		foreach($users as $name => $score)
		{
			printf("%s:", $name);
			print($score / $grade_count[$name]);
			printf("\n");
		}
	}
	if ($argv[1] == "moulinette_variance")
	{
		foreach($arr as $value)
		{
			if (!(strpos($value, "moulinette")))
			{
				$i = 0;
				while ($value[$i] != ';')
					$i++;
				$i++;
				while ($value[$i] != ';')
					$i++;
				$i++;
				if (is_numeric($value[strpos($value, ';') + 1]))
				{
					$name = substr($value, 0, strpos($value, ';'));
					if (isset($users[$name]))
					{
						$users[$name] += intval(substr(strstr($value, ";"), 1));
						$grade_count[$name] += 1;
					}
					else
					{
						$users[$name] = intval(substr(strstr($value, ";"), 1));
						$grade_count[$name] = 1;
					}
				}
			}
			else
			{
				$i = 0;
				while ($value[$i] != ';')
					$i++;
				$i++;
				while ($value[$i] != ';')
					$i++;
				$i++;
				if (is_numeric($value[strpos($value, ';') + 1]))
				{
					$name = substr($value, 0, strpos($value, ';'));
					if (isset($users_moulinette[$name]))
					{
						$users_moulinette[$name] += intval(substr(strstr($value, ";"), 1));
						$grade_count_moulinette[$name] += 1;
					}
					else
					{
						$users_moulinette[$name] = intval(substr(strstr($value, ";"), 1));
						$grade_count_moulinette[$name] = 1;
					}
				}
			}
		}
		ksort($users);
		foreach($users as $name => $score)
		{
			printf("%s:", $name);
			print($score / $grade_count[$name] - $users_moulinette[$name] / $grade_count_moulinette[$name]);
			printf("\n");
		}
	}
}
?>
