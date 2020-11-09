#!/usr/bin/php

<?php

while (true)
{
echo "Enter a number: ";
$num = fgets(STDIN);
if (feof(STDIN))
	break;
$num = trim($num);
if (!(is_numeric($num)))
	echo "'$num' is not a number\n";
else
{
	if($num % 2 == 0)
		echo "The number $num is even\n";
	else
		echo "The number $num is Odd\n";
}
}
echo "\n";
?>
