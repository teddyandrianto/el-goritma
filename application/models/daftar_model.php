<?php 

class Daftar_model extends CI_Model{
	public function Getelgoritmah(){
		$data = $this->db->query('select * form db_elgoritmah');
		return $data->result_array();
	}
 
	function input_data($user_student,$data){
		$res = $this->db->insert($user_student,$data);
		return $res;
	}
}