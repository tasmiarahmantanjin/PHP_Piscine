#!/usr/bin/php
<?php

if ($argc > 1)
{
	$count = 1;
	while ($count < $argc)
	{
		print($argv[$count]."\n");
		$count++;
	}
}

?>