<?php
if ($_GET["action"] == "set")
	setcookie($_GET["name"], $_GET["value"], time() + 3600);
else if ($_GET["action"] == "get")
	echo  $_COOKIE[$_GET["name"]];
else if ($_GET["action"] == "del")
	setcookie($_GET["name"], null, -1, '/');
?>