<?php 
class Teacher_model extends CI_Model {
	public function __construct()
	{
		$this->load->database();
	}

	public function teacher() {

		$username = $this->input->POST('username', TRUE);
		$password = md5($this->input->POST('password', TRUE));
		$query = $this->db->query("SELECT * from user_teacher where username= '$username' and password= '$password' LIMIT 1");
		if($query->num_rows() == 0){
			return false;
		}else{
			$data = $query->row();
			$_SESSION['sesiteacher'] = array('id'=>$data->id,'username'=>$data->username,'nama'=>$data->nama,"email"=>$data->email,"password"=>$data->password,'foto'=>$data->foto,"code_dosen"=>$data->code_dosen);
			return true;
		}
	}
  
	public function read_modul(){
		$sql="SELECT * FROM modul where code_dosen='".$_SESSION['sesiteacher']['code_dosen']."' ORDER BY urutan";
		$query = $this->db->query($sql);
		return $query->result();
	}
	public function Getmodul($where=""){
		$data_modul = $this->db->query('select * from modul '.$where);
		return $data_modul->result_array();
	}

	   public function read_video(){
		$sql="SELECT * FROM video where code_dosen='".$_SESSION['sesiteacher']['code_dosen']."' ORDER BY id";
		$query = $this->db->query($sql);
		return $query->result();
	}
	public function Getvideo($where=""){
		$data_modul = $this->db->query('select * from video '.$where);
		return $data_modul->result_array();
	}
	 public function read_chat(){
		$sql="SELECT * FROM chat where username='".$_SESSION['sesiteacher']['username']."' OR tujuan='".$_SESSION['sesiteacher']['code_dosen']."' ORDER BY waktu desc";
		$query = $this->db->query($sql);
		return $query->result();
	}
	  public function input($tabelName,$data){
        $res = $this->db->insert($tabelName,$data);
        return $res;
    }
	public function update_modul($tabelName,$data,$where){
		$res = $this->db->update($tabelName,$data,$where);
		return $res;
	}
	public function delete($tabelName,$where){
		$res = $this->db->delete($tabelName,$where);
		return $res;
	}

	}