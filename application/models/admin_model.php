<?php 
class Admin_model extends CI_Model {
	public function __construct()
	{
		parent::__construct() ;
		$this->labels = $this->attribute_labels();
		$this->load->database();
	}
	public function administrator() {
		$username = $this->input->POST('username', TRUE);
		$password = md5($this->input->POST('password', TRUE));
		$data = $this->db->query("SELECT * from user_admin where username= '$username' and password= '$password' LIMIT 1");
		$_SESSION['sesiadmin'] = $data->row()->username;
		return $data->row();
	}
	public $id;
	public $username;
	public $nama;
	public $email;
	public $password;
	public $labels = [];
	public function read (){
		$sql="SELECT * FROM user_teacher ORDER BY id";
		$query = $this->db->query($sql);
		return $query->result();
	}
	public function attribute_labels() {
		return ['id'=> 'No ',
				'username'=> 'Username ',
				'nama' => 'Nama ',
				'email' => 'Email ',
				'password' => 'Password'
		];
	}
	
	public function Getdosen($where=""){
		$data_dosen = $this->db->query('select * from user_teacher '.$where);
		return $data_dosen->result_array();
	}
	public function input_dosen($tabelName,$data){
		$res = $this->db->insert($tabelName,$data);
		return $res;
	}
	public function update_dosen($tabelName,$data,$where){
		$res = $this->db->update($tabelName,$data,$where);
		return $res;
	}
	public function deletedosen($tabelName,$where){
		$res = $this->db->delete($tabelName,$where);
		return $res;
	}
	public function read_student (){
		$sql="SELECT * FROM user_student ORDER BY id";
		$query = $this->db->query($sql);
		return $query->result();
	}
	public function Getstudent($where=""){
		$data = $this->db->query('SELECT * FROM user_student '.$where);
		return $data->result_array();
	}
	public function input_student($tabelName,$data){
		$res = $this->db->insert($tabelName,$data);
		return $res;
	}
	public function update_student($tabelName,$data,$where){
		$res = $this->db->update($tabelName,$data,$where);
		return $res;
	}
	public function delete_student($tabelName,$where){
		$res = $this->db->delete($tabelName,$where);
		return $res;
	}
}