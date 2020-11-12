#!/usr/bin/php
<?PHP
	$src_file = fopen("/var/run/utmpx", "r");
	date_default_timezone_set("Europe/Helsinki");
//test	$src_file2 = file_get_contents("/var/run/utmpx");
//test	echo strlen ($src_file2);
	while (!feof($src_file))		// foef = open file & read untill end-of-file
	{
		$data = fread($src_file, 628);
		if (strlen($data))
		{
			$data = unpack("a256user/a4id/a32line/ipid/itype/itime", $data);
//			print_r($data);
			if ($data['type'] == 7)
			{
				echo trim($data['user']) . "  ";
				echo trim($data['line']) . "  ";
				$time = date("M d H:i", $data['time']);
				echo $time . " \n";
			}
		}
	}
?>
