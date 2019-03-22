<?php 
class Student_model extends CI_Model {
	public function __construct()
	{
		$this->load->database();
	}

	public function student() {

		$username = $this->input->POST('username', TRUE);
		$password = md5($this->input->POST('password', TRUE));
		$query = $this->db->query("SELECT * from user_student where username= '$username' and password= '$password' LIMIT 1");
		if($query->num_rows() == 0){
			return false;
		}else{
			$data = $query->row();
			$_SESSION['sesistudent'] = array('id'=>$data->id,'username'=>$data->username,'nama_depan'=>$data->nama_depan,'nama_belakang'=>$data->nama_belakang,"email"=>$data->email,"password"=>$data->password,'foto'=>$data->foto,"code_dosen"=>$data->code_dosen);
			return true;
		}
	}
 
	public function read_modul(){
		$sql="SELECT * FROM  modul where code_dosen='".$_SESSION['sesistudent']['code_dosen']."' ORDER BY urutan";
		$query = $this->db->query($sql);
		return $query->result();
	}
	public function Getmodul($where=""){
		$data_modul = $this->db->query('select * from modul '.$where);
		return $data_modul->result_array();
	}

	   public function read_video(){
		$sql="SELECT * FROM video where code_dosen='".$_SESSION['sesistudent']['code_dosen']."' ORDER BY urutan";
		$query = $this->db->query($sql);
		return $query->result();
	}
	public function Getvideo($where=""){
		$data_modul = $this->db->query('select * from video '.$where);
		return $data_modul->result_array();
	}
	 public function read_chat(){
		$sql="SELECT * FROM chat   where username='".$_SESSION['sesistudent']['username']."' OR tujuan='".$_SESSION['sesistudent']['username']."'  ORDER BY waktu desc ";
		$query = $this->db->query($sql);
		return $query->result();
	}
	  public function input($tabelName,$data){
        $res = $this->db->insert($tabelName,$data);
        return $res;
    }
	public function update($tabelName,$data,$where){
		$res = $this->db->update($tabelName,$data,$where);
		return $res;
	}
	public function delete($tabelName,$where){
		$res = $this->db->delete($tabelName,$where);
		return $res;
	}

	}