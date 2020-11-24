<?php

// "array_key_exists()" function checks an array for a specified key,-
// and returns true if the key exists and false if the key does not exist.
// "instanceof" keyword is used to check if an object belongs to a class
// "$this" keyword refers to the current object, and is only available inside methods.

class UnholyFactory
{
	private $fighters = array();
    public function absorb($newFighter)
    {

		if ($newFighter instanceof Fighter)
		{
			if (array_key_exists($newFighter->name, $this->fighters))
				printf("(Factory already absorbed a fighter of type %s)\n", $newFighter->name);
			else
			{
				printf("(Factory absorbed a fighter of type %s)\n", $newFighter->name);
				$this->fighters[$newFighter->name] = $newFighter;
			}
		}
		else
			printf("(Factory can't absorb this, it's not a fighter)\n");
	}

// The "clone" keyword is used to create a copy of an object.

    public function fabricate($name)
    {
		if (array_key_exists($name, $this->fighters))
		{
			printf("(Factory fabricates a fighter of type %s)\n", $name);
			return (clone $this->fighters[$name]);
		}
		else
		{
			printf("(Factory hasn't absorbed any fighter of type %s)\n", $name);
			return (NULL);
		}
	}
}

?>
