<?php class Web extends CI_Controller {

	public function __construct()
 	{
 		parent::__construct();
 		$this->load->helper("url");
 		$this->load->model('web_model');
 		$this->model = $this->web_model;
 		$this->load->database();
 		$this->load->helper('url');
  	}

 	
 	public function index()
	{
		$this->load->view('web/header');
		$this->load->view('web/login');
	}



	public function about()
	{
		$data = $this->model->Getabout();
		$this->load->view('web/header');
		$this->load->view('web/about',array('data'=> $data));
	}

	Public function daftar ()
	{
		$this->load->view('web/header');
		$this->load->view('web/pendaftaran');
	}
 
	public function daftar_student(){
		$nama_depan = $_POST['nama_depan'];
		$nama_belakang = $_POST['nama_belakang'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = (md5($_POST['password']));
		$inputdata = array(
			'nama_depan' => $nama_depan,
			'nama_belakang' => $nama_belakang,
			'username' => $username,
			'email' => $email,
			'password' => $password   
			);
		$res = $this->model->input_data('user_student',$inputdata);
		if($res>=1){
			$this->load->view('web/header');
		$this->load->view('web/login');
		}else{
		$this->load->view('web/header');
		$this->load->view('web/pendaftaran');
		}
	}
}
