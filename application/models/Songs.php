<?php

class Songs extends CI_Model{
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	/*
	 * Get current songs. Indicated by the field current = 1 in the database schema. 
	 */
	public function getCurrent($crunch_number = null){
		//Get all current songs. 
		$query = $this->db->get_where('songs', array("current"=>1));
		return $query->result();
	}
	
	public function getCurrentOrdered($timeline = null){
		
		//First, check what kind of leaderboard it is. If it's the week, then display current results. 
		if($timeline == "week"){
			$where_array = array("current" => 1);
			$this->db->select("url ,crunches, contributor");
			$this->db->from("songs");
			$this->db->where($where_array);
			$this->db->order_by("crunches", "DESC");
			$query = $this->db->get();
			return $query->result();
			
		}else{
			//If there leaderboard is an all time leaderboard, display all results. Probably will paginate this. 
			$this->db->select("url, crunches ,contributor");
			$this->db->from("songs");
			$this->db->order_by("crunches", "DESC");
			$query = $this->db->get();
			return $query->result();
		}
	}
	
	/*
	 * Add crunches to a particular song. 
	 */
	public function incrementCrunches($id = null){
		//Get current number of crunches
		$result = $this->db->get_where('songs', array('id'=> $id))->result()[0];
		
		//update number of crunches 
		$data = array('crunches' => $result->crunches + 1);
		$this->db->where('id', $id);
		$this->db->update('songs', $data);
	}
	
	
}