#!/usr/bin/php
<?PHP
if ($argc == 2)
{
	$str = array_filter(explode(' ', $argv[1]));
	$res = implode(" ", $str);
	echo $res . "\n";
}
?>