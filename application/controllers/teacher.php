<?php class Teacher extends CI_Controller {

	public function __construct()
 	{
 	 		parent::__construct();
 		$this->load->helper("url");
 		$this->load->model('teacher_model');
 		$this->model = $this->teacher_model;
 		$this->load->database();

 		$this->load->helper('url');
  	}

 	public function index()
 	{
 		if(isset($_SESSION['sesiteacher'])){
 			$this->load->view("teacher/header");
 			$this->load->view("teacher/profile_dosen");
 			$this->load->view("teacher/tentang_dosen");
 			$this->load->view("teacher/footer");

 		}else{
            $this->load->view('web/header');
	 		$this->load->view("web/login");
 		}
 	}
 	public function login()
 	{
 		if($this->model->teacher()){
         	redirect('teacher/index');
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
 		if(isset($_SESSION['sesiteacher'])){
 		$this->load->view('teacher/header');
 		$this->load->view('teacher/profile_dosen');
 		$this->load->view('teacher/setting_dosen');
 		$this->load->view('teacher/footer');
 		}else{
	 		$this->load->view("teacher/login");
 		}
 	}

 	public function modul(){
 		if(isset($_SESSION['sesiteacher'])){
 		$rows =$this->model->read_modul();
 		$this->load->view('teacher/header');
 		$this->load->view('teacher/tampil_modul',['rows'=>$rows]);
 		$this->load->view('teacher/footer');
 		}else{
	 		$this->load->view("teacher/login");
 		}
 	}

 	public function modul_preview($id){
 	 if(isset($_SESSION['sesiteacher'])){
 	 	$modul = $this->model->Getmodul("where id = '$id'");
 		$data_modul = array(
			"id" => $modul[0]['id'],
			"judul" => $modul[0]['judul'],
			"pdf" => $modul[0]['pdf'],
			);
 		$data =$this->model->read_modul();
 		$this->load->view('teacher/header',['data'=>$data]);
 		$this->load->view('teacher/preview_modul',$data_modul,$modul);
 		$this->load->view('teacher/footer');
 		}else{
	 		$this->load->view("landing-template");
 		}
 	}
 	public function addmodul(){

 		if(isset($_SESSION['sesiteacher'])){
 		$rows =$this->model->read_modul();
 		$this->load->view('teacher/header');
 		$this->load->view('teacher/tambah_modul',['rows'=>$rows]);
 		$this->load->view('teacher/footer');
 		}else{
	 	$this->load->view("admin/login");
 		}
 	}
 	public function proses_addmodul(){
 		if(isset($_SESSION['sesiteacher'])){
 			  $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/modul/'; //path folder
        $config['allowed_types'] = 'pdf'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '50048'; //maksimum besar file 2M
        $config['file_name'] = $nmfile; //nama yang terupload nantinya
 
        $this->upload->initialize($config);
         
        if($_FILES['filepdf']['name'])
        {
            if ($this->upload->do_upload('filepdf'))
            {
                $gbr = $this->upload->data();
                $urutan= $_POST['urutan'];
                $judul= $_POST['judul'];
                $data = array(
                  'pdf' =>$gbr['file_name'],
                  'judul'=>$judul,
                  'urutan'=>$urutan,
                  'code_dosen'=>$_SESSION['sesiteacher']['code_dosen']
                );
 
                $res = $this->model->input('modul',$data); //akses model untuk menyimpan ke database
                //pesan yang muncul jika berhasil diupload pada session flashdata
    
                redirect('teacher/modul'); //jika berhasil maka akan ditampilkan view vupload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload gambar !!</div></div>");
                redirect('cpanel'); //jika gagal maka akan ditampilkan form upload
            }
        }
    
    }else{
	 	$this->load->view("error");
 		}
 	}
 	public function delete_modul($id){
		if(isset($_SESSION['sesiteacher'])){
        $code_dosen= $this->db->where('id',$id)->get('modul')->row()->code_dosen;
        if ($_SESSION['sesiteacher']['code_dosen'] == $code_dosen) {
            $where = array('id' => $id);
            $res = $this->model->delete('modul',$where);
            if($res>=1){
                redirect('teacher/modul');
            }       
        }else{
           redirect('teacher/modul');
        }
        }else{
        $this->load->view("error");
        }
    }

		public function video(){
 		if(isset($_SESSION['sesiteacher'])){
 		$rows =$this->model->read_video();
 		$this->load->view('teacher/header');
 		$this->load->view('teacher/tampil_video',['rows'=>$rows]);
 		$this->load->view('teacher/footer');
 		}else{
	 		$this->load->view("teacher/login");
 		}
 	}
 	public function video_preview($id){
 	 if(isset($_SESSION['sesiteacher'])){
 	 	$video = $this->model->Getvideo("where id = '$id'");
 		$data_video = array(
			"id" => $video[0]['id'],
			"judul" => $video[0]['judul'],
			"video" => $video[0]['video']
			);
 		$data =$this->model->read_video();
 		$this->load->view('teacher/header',['data'=>$data]);
 		$this->load->view('teacher/preview_video',$data_video,$video);
 		$this->load->view('teacher/footer');
 		}else{
	 		$this->load->view("landing-template");
 		}
 	}

		public function addvideo(){

 		if(isset($_SESSION['sesiteacher'])){
 		$rows =$this->model->read_video();
 		$this->load->view('teacher/header');
 		$this->load->view('teacher/tambah_video',['rows'=>$rows]);
 		$this->load->view('teacher/footer');
 		}else{
	 	$this->load->view("admin/login");
 		}
 	}
 	public function proses_addvideo(){
 		if(isset($_SESSION['sesiteacher'])){
 			  $this->load->library('upload');
        $nmfile = "video_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/video/'; //path folder
        $config['allowed_types'] = 'mp4'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '500000'; //maksimum besar file 2M
        $config['file_name'] = $nmfile; //nama yang terupload nantinya
 
        $this->upload->initialize($config);
         
        if($_FILES['filevideo']['name'])
        {
            if ($this->upload->do_upload('filevideo'))
            {
                $vid = $this->upload->data();
                $id = $_POST['id'];
                $judul= $_POST['judul'];
                $data = array(
                	'id' =>$id,
                  'judul'=>$judul,   
                  'video' =>$vid['file_name'],
                  'code_dosen'=> $_SESSION['sesiteacher']['code_dosen']
                              
                );
 
                $res = $this->model->input('video',$data); //akses model untuk menyimpan ke database
                //pesan yang muncul jika berhasil diupload pada session flashdata
    
                redirect('teacher/video'); //jika berhasil maka akan ditampilkan view vupload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload gambar !!</div></div>");
                redirect('teacher/video'); //jika gagal maka akan ditampilkan form upload
            }
        }
    
    }else{
	 	$this->load->view("error");
 		}
 	}
 	public function delete_video($id){
		 if(isset($_SESSION['sesiteacher'])){
        $code_dosen= $this->db->where('id',$id)->get('video')->row()->code_dosen;
        if ($_SESSION['sesiteacher']['code_dosen'] == $code_dosen) {
            $where = array('id' => $id);
            $res = $this->model->delete('video',$where);
            if($res>=1){
                redirect('teacher/video');
            }       
        }else{
           redirect('teacher/video');
        }
        }else{
        $this->load->view("error");
        }
    }


    public function update_image(){

        if(isset($_SESSION['sesiteacher'])){
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
                $where = array('id' => $_SESSION['sesiteacher']['id']);
                $res = $this->db->update('user_teacher',$updatedata,$where); //akses model untuk menyimpan ke database
                $_SESSION['sesiteacher']['foto'] = $gbr['file_name'];
                if($res>=1){
                    redirect('teacher');
                }}else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload gambar !!</div></div>");
                redirect('teacher'); //jika gagal maka akan ditampilkan form upload
            }
        }}else{
            $this->load->view('error404');
        }
    }

    public function update_dosen(){
        if($_POST['password'] == ""){
            $password = $_SESSION['sesiteacher']['password'];
        }else{
            $password = md5($_POST['password']);
        }
        $this->db->update('user_teacher', array('nama'=>$_POST['nama'],'email'=>$_POST['email'],'password'=>$password), array('id'=>$_SESSION['sesiteacher']['id']));
        $data = $this->db->query("SELECT * from user_teacher where id= '".$_SESSION['sesiteacher']['id']."' LIMIT 1")->row();
        $_SESSION['sesiteacher'] = array('id'=>$data->id,'username'=>$data->username,'nama'=>$data->nama,"code_dosen"=>$data->code_dosen,"email"=>$data->email);
        redirect('teacher/index');
    }

    public function chat (){
          if(isset($_SESSION['sesiteacher'])){
            $chat =$this->model->read_chat();
            $this->load->view("teacher/header");
            $this->load->view('teacher/chat',['chat'=>$chat]);
            $this->load->view('teacher/footer');

          }else{
        $this->load->view("error");
        }
    }

      public function update_chat(){
        if(isset($_SESSION['sesiteacher'])){
        $waktu = date("H:i  d-m-Y");
        $subjek = $_POST['subjek'];
        $pesan = $_POST['pesan'];
        $tujuan = $_POST['tujuan'];
        $updatedata = array(
            'waktu' => $waktu,
            'subjek' => $subjek,
            'pesan' => $pesan,
            'username' => $_SESSION['sesiteacher']['username'],
            'foto' => $_SESSION['sesiteacher']['foto'],
            'tujuan' => $tujuan  
            );
        $res = $this->model->input('chat',$updatedata);

        if($res>=1){
            redirect('teacher/chat');
        }}else{
        $this->load->view("error");
        }
    }
    public function delete_chat($id){
        if(isset($_SESSION['sesiteacher'])){
        $username = $this->db->where('id',$id)->get('chat')->row()->username;
        if ($_SESSION['sesiteacher']['username'] == $username) {
            $where = array('id' => $id);
            $res = $this->model->delete('chat',$where);
            if($res>=1){
                redirect('teacher/chat');
            }       
        }else{
            redirect('teacher/chat');
        }
        }else{
        $this->load->view("error");
        }
    }
}

