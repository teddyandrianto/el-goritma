    <section class="content-header">
      <h1>
        User Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">User profile</li>
      </ol>
    </section>
    
<section class="content">
    <div class="row">
       <div class="col-md-3">
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('assets');?>/photo-profile/<?=$_SESSION['sesistudent']['foto'];?>" alt="User profile picture">

                  <h3 class="profile-username text-center"><?=$_SESSION['sesistudent']['nama_depan'];?> <?=$_SESSION['sesistudent']['nama_belakang'];?></h3>

                  <p class="text-muted text-center">Mahasiswa</p>
            </div>
                <hr>
                <form role="form" action="<?php echo base_url();?>student/update_image" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <h4>Ubah Foto</h4>
                      <div class="input-group">
                          <label class="input-group-btn">
                              <span class="btn btn-danger">
                                  Browse<input type="file" name="filefoto" style="display: none;" multiple>
                              </span>
                          </label>
                          <input type="name" class="form-control" readonly>
                      </div>
                      <span class="help-block">
                          Ambil foto dari komputer anda
                      </span>
                </div>
                <div class="box-footer"><center>
                  <button type="Submit" name="btnSubmite" class="btn btn-danger">Submit</button>
                  </center>   
                </div>
              </div>
            </form>
          </div>
       </div>
        
        <div class="col-md-6">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li><a href="<?php echo base_url('student'); ?>" >Tentang</a></li>
              <li><a href="<?php echo base_url('student/setting'); ?>" >Settings</a></li>
            </ul>
           