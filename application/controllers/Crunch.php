<?php

class Crunch extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('songs');
		$this->load->library('session');
	}
	
	public function increment(){
		if(isset($_POST['id'])){
			$id = $_POST['id'];
		}
		$this->songs->incrementCrunches($id);
		$crunch_number = $this->session->userdata("crunch_number");
		if($crunch_number == 5){
			//Redirect them to the weeks votes. 
		}
		$this->session->set_userdata("crunch_number", $crunch_number + 1); 
		
	}
}