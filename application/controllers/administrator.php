<?php class Administrator extends CI_Controller {
	public $model = NULL;

	public function __construct()
 	{
 		parent::__construct();
 		$this->load->helper("url");
 		$this->load->model('admin_model');
 		$this->model = $this->admin_model;
 		$this->load->database();
 		$this->load->helper('url');
  	}

 	public function index()
 	{

 		if(isset($_SESSION['sesiadmin'])){
 			$this->load->view('admin/header');
 			$this->load->view('admin/footer');
 		}else{
 			$this->load->view('web/header');
	 		$this->load->view('web/login-admin');
 		}
 	}	
 	public function login()
 	{
 		$this->admin_model->administrator();
 		redirect('administrator/index');
 	}
 	public function logout()
 	{
 		session_destroy();
 		redirect('administrator/index');	
 	}

 	public function dosen(){
 		if(isset($_SESSION['sesiadmin'])){
 		$rows =$this->model->read();
 		$this->load->view('admin/header');
 		$this->load->view('admin/tampil_dosen',['rows'=>$rows]);
 		$this->load->view('admin/footer');
 		}else{
	 		$this->load->view("error");
 		}
 	}
 	
 	public function addosen(){

 		if(isset($_SESSION['sesiadmin'])){
 		$rows =$this->model->read();
 		$this->load->view('admin/header');
 		$this->load->view('admin/tambah_dosen',['rows'=>$rows]);
 		$this->load->view('admin/footer');
 		}else{
	 	$this->load->view("error");
 		}
 	}
 	public function proses_addosen(){
 		if(isset($_SESSION['sesiadmin'])){
		$nama= $_POST['nama'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = (md5($_POST['password']));
		$inputdata = array(
			'nama' => $nama,
			'username' => $username,
			'email' => $email,
			'password' => $password   
			);
		$res = $this->admin_model->input_dosen('user_teacher',$inputdata);
		if($res>=1){
			redirect('administrator/dosen');
		}else{
			echo "input data gagal";
		}
		}else{
	 	$this->load->view("error");
 		}
	}

	public function edit_dosen($id){
		if(isset($_SESSION['sesiadmin'])){
		
		$dosen = $this->admin_model->Getdosen("where id = '$id'");
		$data_dosen = array(
			"id" => $dosen[0]['id'],
			"nama" => $dosen[0]['nama'],
			"username" => $dosen[0]['username'],
			"email" => $dosen[0]['email'],
			"password" => $dosen[0]['password'],
			);
		$this->load->view('admin/header');
		$this->load->view("admin/edit_dosen",$data_dosen);
		$this->load->view('admin/footer');
		}else{
	 	$this->load->view("error");
 		}
 	}
		
 	public function update_dosen(){
 	if(isset($_SESSION['sesiadmin'])){
 		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = (md5($_POST['password']));
		$updatedata = array(
			'nama' => $nama,
			'username' => $username,
			'email' => $email,
			'password' => $password   
			);
		$where = array('id' => $id);
		$res = $this->admin_model->update_dosen('user_teacher',$updatedata,$where);
		if($res>=1){
			redirect('administrator/dosen');
		}}else{
	 	$this->load->view("error");
 		}
	}
	public function delete_dosen($id){
		if(isset($_SESSION['sesiadmin'])){
	 	$where = array('id' => $id);
	 	$res = $this->admin_model->deletedosen('user_teacher',$where);
	 	if($res>=1){
	 		redirect('administrator/dosen');
	 	}else{
	 		echo "gagal delete";
	 	}
	 	}else{
	 	$this->load->view("error");
 		}
	}
	public function student(){
 		if(isset($_SESSION['sesiadmin'])){
 		$rows =$this->model->Getstudent();
 		$this->load->view('admin/header');
 		$this->load->view('admin/tampil_student',array('rows'=> $rows));
 		$this->load->view('admin/footer');
 		}else{
	 		$this->load->view("error");
 		}
 	}
 	
 	public function addstudent(){

 		if(isset($_SESSION['sesiadmin'])){
 		$rows =$this->model->read_student();
 		$this->load->view('admin/header');
 		$this->load->view('admin/tambah_student',['rows'=>$rows]);
 		$this->load->view('admin/footer');
 		}else{
	 	$this->load->view("error");
 		}
 	}
 	public function proses_addstudent(){
 		if(isset($_SESSION['sesiadmin'])){
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
		$res = $this->admin_model->input_dosen('user_student',$inputdata);
		if($res>=1){
			redirect('administrator/student');
		}else{
			echo "input data gagal";
		}
		}else{
	 	$this->load->view("error");
 		}
	}

	public function edit_student($id){
		if(isset($_SESSION['sesiadmin'])){
		$dosen = $this->admin_model->Getstudent("where id = '$id'");
		$data = array(
			"id" => $dosen[0]['id'],
			"nama_depan" => $dosen[0]['nama_depan'],
			"nama_belakang" => $dosen[0]['nama_belakang'],
			"username" => $dosen[0]['username'],
			"email" => $dosen[0]['email'],
			"password" => $dosen[0]['password'],
			);
		$this->load->view('admin/header');
		$this->load->view("admin/edit_student",$data);
		$this->load->view('admin/footer');
		}else{
	 	$this->load->view("error");
 		}
 	}

 	public function update_student(){
 	if(isset($_SESSION['sesiadmin'])){
 		$id = $_POST['id'];
		$nama_depan = $_POST['nama_depan'];
		$nama_belakang= $_POST['nama_belakang'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = (md5($_POST['password']));
		$updatedata = array(
			'nama_depan' => $nama_depan,
			'nama_belakang' => $nama_belakang,
			'username' => $username,
			'email' => $email,
			'password' => $password   
			);
		$where = array('id' => $id);
		$res = $this->model->update_student('user_student',$updatedata,$where);
		if($res>=1){
			redirect('administrator/student');
		}}else{
	 	$this->load->view("error");
 		}
	}
	public function delete_student($id){
		if(isset($_SESSION['sesiadmin'])){
	 	$where = array('id' => $id);
	 	$res = $this->admin_model->delete_student('user_student',$where);
	 	if($res>=1){
	 		redirect('administrator/student');
	 	}}else{
	 	$this->load->view("error");
 		}
	}
 
 }