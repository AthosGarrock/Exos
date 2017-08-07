<?php 

class Num_Clock{

	public $time;

	function __construct(){
		$this->time = date('h:i');
	}

	function __destruct(){

	}

}

$clock = new Num_Clock();
echo $clock->time;

 ?>