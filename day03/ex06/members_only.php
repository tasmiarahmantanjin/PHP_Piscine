<?php

$user = $_SERVER['PHP_AUTH_USER'] == 'zaz';
$pass = $_SERVER['PHP_AUTH_PW'] == 'Ilovemylittleponey';

if ($user && $pass)
{
	$file = base64_encode(file_get_contents("../img/42.png"));
	echo ("<html><body>\n");
	echo ("Hello Zaz<br />\n");
	echo ("<img src='data:image/png;base64,$file'>\n");
	echo ("</body></html>");
	echo ("\n");
}
else
{
	header('WWW-Authenticate: Basic realm=\'\'Member area\'\'');
	header('HTTP/1.0 401 Unauthorized');
	echo "<html><body>That area is accessible for members only</body></html>\n";
}
?>