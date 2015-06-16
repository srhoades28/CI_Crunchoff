<?php

class Crunch extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('songs');
		$this->load->library('session');
	}
	
	public function next($crunchoff_number = null){
		
		//If post variable is set, increment the songs, upvoting by the user. 
		if(isset($_POST['id'])){
			$id = $_POST['id'];
		}
		
		$this->songs->incrementCrunches($id);
		
		//Increment the session value if appropriate.
		$crunch_number = $this->session->userdata("crunch_number");
		
		if($crunch_number == 5){
			//Redirect them to the weeks votes. 
		}
		
		$this->session->set_userdata("crunch_number", $crunch_number + 1); 
		echo $this->session->userdata("crunch_number");
		
		//Load next page. 
		//$this->songs->
	}
}