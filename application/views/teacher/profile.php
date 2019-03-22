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
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('assets');?>/photo-profile/<?=$_SESSION['sesiteacher']['foto'];?>" alt="User profile picture">

              <h3 class="profile-username text-center"><?=$_SESSION['sesiteacher']['nama'];?></h3>

              <p class="text-muted text-center">Dosen</p>
            </div>

          </div>
          
        </div>

        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li><a href="<?php echo base_url('teacher'); ?>" data-toggle="tab">Tentang</a></li>
              <li><a href="<?php echo base_url('teacher/setting'); ?>" data-toggle="tab">Settings</a></li>
            </ul>
           