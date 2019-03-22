<?php 

class Web_model extends CI_Model{
	public function Getelgoritmah(){
		$data = $this->db->query('select * from db_elgoritmah');
		return $data->result_array();
	}
	
	public function get_data(){
		$sql="SELECT * FROM transaksi_pinjam  ORDER BY tanggal";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function input_data($tabelName,$data){
		$res = $this->db->insert($tabelName,$data);
		return $res;
	}
}