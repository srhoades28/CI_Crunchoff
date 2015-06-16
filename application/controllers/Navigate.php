<?php

class Navigate extends CI_controller{
	

	
	public function __construct(){
		parent::__construct();
		$this->load->helpers("url_helper");
		$this->load->library("session");
	}
	
	public function index(){
		
		$this->load->database();
		$this->load->model('songs');
		
		$data["result"] = $this->songs->getCurrent();
		if(!$this->session->userdata("crunch_number")){
			$this->session->set_userdata(array("crunch_number"=>1));
		}
		$data['session'] = $this->session;
		/*
		 * Loads the home page. 
		 */
		 $this->load->view("templates/main_header");
		 $this->load->view("pages/home", $data);
		 $this->load->view("templates/main_footer", $data);
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