<?php
class User_model extends CI_Model {

	// method untuk membaca data profile user berdasar username
	public function getUserProfile($username){
		$query = $this->db->get_where('users', array('username' => $username));//membaca di tabel users bagian username
		return $query->row_array();
	}

	public function showUser($username = false){
		if ($username == false){
			$query = $this->db->get('users');
			return $query->result_array();
		} else {
			// membaca data buku berdasarkan id
			$query = $this->db->get_where('users', array("username" => $username));
			return $query->row_array();
		}
	}
	public function getRole(){
		$query = $this->db->get('role');
		return $query->result_array();
	}
	public function adduser($username, $password, $fullname, $idrole){
	$data = array(
			"username" =>$username,
			"password" => $password,
			"fullname" => $fullname,
			"idrole"     =>$idrole		
	);
	$this->db->insert('users', $data);
	}

	public function deluser($username){
		$this->db->delete('users', array("username" => $username));
	}

	public function updateUser($username, $password, $fullname, $idrole){
		$data = array("username"=> $username,
					 "password" => $password,
					 "fullname" => $fullname,
					 "idrole"   => $idrole
		);
		$query = $this->db->where('username', $username);
		$query = $this->db->update('users', $data);	
	}
}
?>