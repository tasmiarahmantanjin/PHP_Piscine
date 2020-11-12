#!/usr/bin/php
<?php
function replace($match)
{
	$str = $match[1].strtoupper($match[2]).$match[3];
	return ($str);
}

if ($argc == 2 && file_exists($argv[1]))
{
	$file_content = file_get_contents($argv[1]);
// text between <a tags without line break.
	$file_content = preg_replace_callback("/(<a )(.*?)(>)(.*)(<\/a>)/is", function ($match)
	{
// text between "" after title=
		$match[0] = preg_replace_callback("/( title=\")(.*?)(\")/is", "replace", $match[0]);
// text between > <
	$match[0] = preg_replace_callback("/(>)(.*?)(<)/is", "replace", $match[0]);
		return ($match[0]);
	}, $file_content);
	print $file_content;
	print "\n";
}
?>
