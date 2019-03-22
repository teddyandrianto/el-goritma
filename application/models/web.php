<?php 

class Web extends CI_Model{
	public function Getdata(){
		$data = $this->db->query('SELECT * from transaksi_pinjam order by id desc limit 1');
		return $data->result_array();
	}

	public function input_data($tabelName,$data){
		$res = $this->db->insert($tabelName,$data);
		return $res;
	}
}