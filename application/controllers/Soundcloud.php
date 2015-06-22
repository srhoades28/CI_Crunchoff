<?php

class Soundcloud extends CI_Controller{
	
	public function __contruct(){
		parent::__construct();
		$this->load->helpers("url_helper");
	}
	
	public function index(){
		$this->load->view("pages/landing");
	}
	
	public function authenticate(){
	$this->load->view('soundcloud/redirect.html');
	
	$facade = new Njasm\Soundcloud\SoundcloudFacade("472760520d39b9fa470e56cdffc71923", "43932f2c446e6b25525794add69adf4e", "https://localhost/ci_projects/index.php");
	// redirect user to authorize URL
	header("Location: " . $facade->getAuthUrl());
	}

}