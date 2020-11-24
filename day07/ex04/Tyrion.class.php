<?php

class Tyrion extends Lannister
{
	public function sleepWith($value)
	{
		if (get_class($value) == "Jaime")
			echo ("Not even if I'm drunk !\n");
		else if (get_class($value) == "Sansa")
			echo ("Let's do this.\n");
		else if (get_class($value) == "Cersei")
			echo ("Not even if I'm drunk !\n");
	}
}
?>
