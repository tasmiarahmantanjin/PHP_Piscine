#!/usr/bin/php
<?PHP
unset($argv[0]);	//deleting a single array element
$arr = array();
foreach ($argv as $value_1)
{
	$str = array_filter(explode(' ', $value_1));
	foreach ($str as $value_2)
		$arr[] = $value_2;
}
sort($arr);
foreach ($arr as $value_1)
	echo $value_1 . "\n";
?>
