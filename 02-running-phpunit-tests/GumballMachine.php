<?php

class GumballMachine{

	private $gumballs;


	// Get the amount of gumballs still in the machine
	public function getGumballs(){
		return $this->gumballs;
	}

	// Set the amount of gumballs in the machine
	public function setGumballs($amount){
		$this->gumballs = $amount;
	}

	// The user turns the wheel, machine dispenses gumball!
	public function turnWheel(){
		$this->setGumballs($this->getGumballs() - 1);
	}
}