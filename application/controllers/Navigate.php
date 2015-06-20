<?php

class Navigate extends CI_controller{
	

	
	public function __construct(){
		parent::__construct();
		$this->load->helpers("url_helper");
		$this->load->helpers("form_helper");
		$this->load->library("session");
		$this->load->database();
		$this->load->model('songs');

	}
	
	public function index(){
		
		

		
		//Set the session crunch number
		if($this->session->userdata("crunch_number")){
			$this->session->set_userdata(array("crunch_number"=>1));
		}
		//Set the crunch_number value. 
		$crunch_number = $this->session->userdata("crunch_number");
		
		//getCurrent songs, with session number as input. 
		$data["result"] = $this->songs->getCurrent($crunch_number);
		$data["crunch_number"] = $this->session->userdata("crunch_number");
		//Trying to get the server side soundcloud api working...

		
		/*
		 * Loads the home page. 
		 */
		 $this->load->view("templates/main_header");
		 $this->load->view("pages/home", $data);
		 $this->load->view("templates/main_footer", $data);
		 

	}
	
	public function next(){
	
		//If post variable is set, increment the songs, upvoting by the user.
		if(isset($_POST['id'])){
			$id = $_POST['id'];
		}
		//Upvote the song....
		$this->songs->incrementCrunches($id);
	
		//Increment the session value if appropriate.
		$crunch_number = $this->session->userdata("crunch_number");
	
		if($crunch_number == 5){
			//Redirect them to the weeks votes.
		}else{
			$this->session->set_userdata(array("crunch_number"=>($crunch_number + 1)));
			$crunch_number = $this->session->userdata('crunch_number');

			//Create data for next page. 
			$data['result'] = $this->songs->getCurrent($crunch_number);
			$data['crunch_number'] = $this->session->userdata('crunch_number');
				
			$this->load->view("templates/main_header");
			$this->load->view("pages/home", $data);
			$this->load->view("templates/main_footer", $data);
		}
	}
	
	public function contribute(){
		$this->load->view("templates/header");
		$this->load->view("templates/footer");
		//$this->load->view("contribute");
	}
	
	public function leaderboard(){
		$this->load->view("templates/header");
		$this->load->view("templates/footer");
		//$this->load->view("leaderboard");
	}
	
	public function admin(){
		$this->load->view("pages/admin");
	}
	
	
}