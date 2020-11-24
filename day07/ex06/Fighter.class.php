<?php

abstract class Fighter {
	public $name;
	public function __construct($newName){
		$this->name = $newName;
	}
	abstract public function fight($type);
}

?>
