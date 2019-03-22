<?php class Student extends CI_Controller {
 	
 	public function __construct()
 	{
 			parent::__construct();
 		$this->load->helper("url");
 		$this->load->model('student_model');
 		$this->model = $this->student_model;
 		$this->load->database();

 		$this->load->helper('url');
 	}

 	public function index()
 	{
 		if(isset($_SESSION['sesistudent'])){
 			$modul =$this->model->read_modul();
 			$video =$this->model->read_video();
 			$this->load->view("student/index",['modul'=>$modul ,'video' => $video]);
 			$this->load->view("student/profile_student");
 			$this->load->view("student/tentang_student");
 			$this->load->view("student/ubah_code_dosen");
 			$this->load->view("student/footer");
 			

 		}else{
 			$this->load->view('header');
	 		$this->load->view("login");
 		}
 	}
 	public function login()	
 	{
 		if($this->model->student()){
         	redirect('student/index');
        }else{
            redirect(base_url());
        }
 	}
 	public function logout()
 	{
 		session_destroy();
 		redirect('/');

 	}
		
	public function setting()
 	{
 		if(isset($_SESSION['sesistudent'])){
 		$this->load->view('student/index');
 		$this->load->view('student/profile_student');
 		$this->load->view('student/setting_student');
 		$this->load->view("student/ubah_code_dosen");
 		$this->load->view('student/footer');
 		}else{
	 		$this->load->view("student/login");
 		}
 	}
 	public function modul($urutan){
 	 if(isset($_SESSION['sesistudent'])){
 	 	$modul = $this->model->Getmodul("where urutan = '$urutan'");
 		$data_modul = array(
			"urutan" => $modul[0]['urutan'],
			"judul" => $modul[0]['judul'],
			"pdf" => $modul[0]['pdf']
			);
 		$video =$this->model->read_video();
 		$modul =$this->model->read_modul();
 		$this->load->view('student/index',['video'=>$video, 'modul' =>$modul]);
 		$this->load->view('student/tampil_modul',$data_modul,$modul);
 		$this->load->view('student/footer');
 		}else{
	 		$this->load->view("landing-template");
 		}
 	}

 	public function video($urutan){
 	 if(isset($_SESSION['sesistudent'])){
 	 	$video = $this->model->Getvideo("where urutan = '$urutan'");
 		$data_video = array(
			"urutan" => $video[0]['urutan'],
			"judul" => $video[0]['judul'],
			"video" => $video[0]['video']
			);
 		$video =$this->model->read_video();
 		$modul =$this->model->read_modul();
 		$this->load->view('student/index',['video'=>$video, 'modul' =>$modul]);
 		$this->load->view('student/tampil_video',$data_video,$video);
 		$this->load->view('student/footer');
 		}else{
	 		$this->load->view("landing-template");
 		}
 	}



    public function update_image(){

        if(isset($_SESSION['sesistudent'])){
              $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/photo-profile/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '500048';
        $config['file_name'] = $nmfile; //nama yang terupload nantinya
 
        $this->upload->initialize($config);
         
        if($_FILES['filefoto']['name'])
        {
            if ($this->upload->do_upload('filefoto'))
            {
                
                $gbr = $this->upload->data();
                $updatedata = array(
                  'foto' =>$gbr['file_name']
                   );
                $where = array('id' => $_SESSION['sesistudent']['id']);
                $res = $this->db->update('user_student',$updatedata,$where); //akses model untuk menyimpan ke database
                $_SESSION['sesistudent']['foto'] = $gbr['file_name'];
                if($res>=1){
                    redirect('student');
                }}else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload gambar !!</div></div>");
                redirect('student'); //jika gagal maka akan ditampilkan form upload
            }
        }}else{
            $this->load->view('error404');
        }
    }

     public function update_code_dosen(){
       	if(isset($_SESSION['sesistudent'])){
		$code_dosen = $_POST['code_dosen'];
		$updatedata = array(
			'code_dosen' => $code_dosen   
			);
		$where = array('id'=> $_SESSION['sesistudent']['id']);
		$res = $this->model->update('user_student',$updatedata,$where);
		 $_SESSION['sesistudent']['code_dosen'] = $code_dosen;
		if($res>=1){
			redirect('student/index');
		}}else{
	 	$this->load->view("error");
 		}
	}
    public function update_student(){
        if($_POST['password'] == ""){
            $password = $_SESSION['sesistudent']['password'];
        }else{
            $password = md5($_POST['password']);
        }
        $this->db->update('user_student', array('nama_depan'=>$_POST['nama_depan'],'nama_belakang'=>$_POST['nama_belakang'],'email'=>$_POST['email'],'password'=>$password), array('id'=>$_SESSION['sesistudent']['id']));
        $data = $this->db->query("SELECT * from user_teacher where id= '".$_SESSION['sesiteacher']['id']."' LIMIT 1")->row();
        $_SESSION['sesistudent'] = array('id'=>$data->id,'username'=>$data->username,'nama'=>$data->nama,"code_dosen"=>$data->code_dosen,"email"=>$data->email);
        redirect('student/index');
    }

    public function chat (){
    	  if(isset($_SESSION['sesistudent'])){
    	  	$modul =$this->model->read_modul();
 			$video =$this->model->read_video();
 			$chat =$this->model->read_chat();
 			$this->load->view("student/index",['modul'=>$modul ,'video' => $video]);
    	  	$this->load->view('student/chat',['chat'=>$chat]);
    	  	$this->load->view('student/footer');

    	  }else{
	 	$this->load->view("error");
 		}
    }

      public function update_chat(){
       	if(isset($_SESSION['sesistudent'])){
       	$waktu = date("H:i  d-m-Y");
		$subjek = $_POST['subjek'];
		$pesan = $_POST['pesan'];
		$updatedata = array(
			'waktu' => $waktu,
			'subjek' => $subjek,
			'pesan' => $pesan,
			'username' => $_SESSION['sesistudent']['username'],
			'foto' => $_SESSION['sesistudent']['foto'],
			'tujuan' => $_SESSION['sesistudent']['code_dosen']  
			);
		$res = $this->model->input('chat',$updatedata);

		if($res>=1){
			redirect('student/chat');
		}}else{
	 	$this->load->view("error");
 		}
	}

	 public function delete_chat($id){
        if(isset($_SESSION['sesistudent'])){
        $username = $this->db->where('id',$id)->get('chat')->row()->username;
        if ($_SESSION['sesistudent']['username'] == $username) {
        	$where = array('id' => $id);
        	$res = $this->model->delete('chat',$where);
	        if($res>=1){
	            redirect('student/chat');
	        }		
    	}else{
            redirect('student/chat');
        }
        }else{
        $this->load->view("error");
        }
    }

}



