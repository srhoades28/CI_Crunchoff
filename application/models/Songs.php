<?php

class Songs extends CI_Model{
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	public function getCurrent($crunch_number = null){
		
		$limit = 2; 
		$offset = ($crunch_number*2) - 2; 
		$query = $this->db->limit($limit,$crunch_number)->get_where('songs', array("current"=>1));
		return $query->result();
	}
	
	public function incrementCrunches($id = null){
		//Get current number of crunches
		$result = $this->db->get_where('songs', array('id'=> $id))->result()[0];
		
		//update number of crunches 
		$data = array('crunches' => $result->crunches + 1);
		$this->db->where('id', $id);
		$this->db->update('songs', $data);
	}
}