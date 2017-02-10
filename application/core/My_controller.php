<?php 


class MY_controller extends CI_controller
{
	
	function __construct()
	
	{
		parent::__construct();
		
		$this->benchmark->mark('code_start');
	}
	
	
	

	
	function __destruct()
	{
		
		$this->benchmark->mark('code_end');
		
		
	}
	
	}

?>