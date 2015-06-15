<?php

class Crunch extends CI_Controllers{
	
	public function __construct(){
		parent::__construct();
		$this->load->models('songs');
	}
	
	public function increment($id = null){
		$this->songs->incrementCrunches($id);
		
		
	}
}