<?php

class Jaime extends Lannister
{
	public function sleepWith($value)
	{
		if (get_class($value) == 'Tyrion')
			echo ("Not even if I'm drunk !\n");
		else if (get_class($value) == 'Sansa')
			echo ("Let's do this.\n");
		else if (get_class($value) == 'Cersei')
			echo ("With pleasure, but only in a tower in Winterfell, then.\n");
	}
}

?>
