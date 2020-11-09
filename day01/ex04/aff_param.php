#!/usr/bin/php
<?php

if ($argc > 1)
{
	$i = 1;
	while ($i < $argc)
	{
		print($argv[$i]."\n");
		$i++;
	}
}
?>
