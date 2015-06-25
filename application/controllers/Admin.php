<?php

Class Admin extends CI_controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->database();
		$this->load->model('songs');
    }

    public function index() {

        $data['allSongs'] = $this->songs->getAll();
    }
}
