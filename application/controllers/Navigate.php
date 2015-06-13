<?php

class Navigate extends CI_controller{
	

	
	public function __construct(){
		parent::__construct();
		$this->load->helpers("url_helper");
	}
	
	public function index(){
		$this->load->database();
		/*
		 * Loads the home page. 
		 */
		 $this->load->view("templates/main_header");
		 $this->load->view("pages/home");
		 $this->load->view("templates/footer");
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