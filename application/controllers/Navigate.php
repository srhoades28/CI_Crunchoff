<?php

class Navigate extends CI_controller{



	public function __construct(){
		parent::__construct();
		$this->load->helpers("url_helper");
		$this->load->helpers("form_helper");
		$this->load->library("session");
		$this->load->database();
		$this->load->model('songs');
		$this->load->model('users');
	}

	public function index(){

		//loading php wrapper and tokenizing the code
		$facade = new Njasm\Soundcloud\SoundcloudFacade("472760520d39b9fa470e56cdffc71923", "43932f2c446e6b25525794add69adf4e", "https://localhost/ci_projects/index.php/Navigate");

		// redirect user to authorize URL
		$code = $_GET['code'];
		$token = $facade->codeForToken($code)->bodyObject();
		$username = $facade->get('/me')->request()->bodyObject()->username;
		$kind = $facade->get('/me')->request()->bodyObject()->kind;
		$id = $facade->get('/me')->request()->bodyObject()->id;

		//Load results of the database call...

		if($this->users->checkIfCurrentUser($id) == true){
		  	$this->users->checkIfCurrentUser($id);
		}else{
			$this->users->insertUser($id, $username, $token, $id);
		}

		//Set the session crunch number
		if(!$this->session->userdata("crunch_number")){
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
		$this->load->view("templates/contribute/header");
		$this->load->view("pages/contribute");
		$this->load->view("templates/contribute/footer");

	}

	public function leaderboard($timeline = null){
		/*
		 * Need to make to types of leaderboards, the one for the week, and the one for All-time.
		 * That will be the parameter of the model function.
		 */
		$data['songs'] = $this->songs->getCurrentOrdered($timeline);

		$this->load->view("templates/leaderboard/header");
		$this->load->view("pages/leaderboard" , $data);
		$this->load->view("templates/leaderboard/footer");

	}

	public function admin(){
		$this->load->view("pages/admin_login");
	}

	public function getUserInfo(){



	}


}
