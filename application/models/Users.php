<?php

class Users extends CI_Model{
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	public function checkIfCurrentUser($id){
		
		$this->db->select('user_id');
		$query = $this->db->get('users');
		
		foreach($query->result()[0] as $user){
			if($id == $user){
				return True;
			}else{
				return false;
			}
		}
	}
	
	public function insertUser($user_id, $username, $token, $kind){
		
		$data = array('user_id' => $user_id, 
					  'username' => $username, 
					  'token' => $token, 
					  'kind' => $kind
		);
		
		$this->db->insert('users', $data);	
	}
	
	public function getAllUsers(){
		$this->db->select('user_id');
		$query = $this->db->get('users');
	}
}
