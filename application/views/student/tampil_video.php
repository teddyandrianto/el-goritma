    <section class="content-header">
      <h1>
        <?php echo $judul; ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('/administrator'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Video</a></li>
        <li class="active"><?php echo $judul; ?></li>
         
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <center>
      <div class="row">
        <div class="col-xs-12">
        <video class=" responsive" width="855" height="480" controls play>
          <source src="<?php echo base_url("/assets/video/");?><?php echo $video; ?>" type="video/mp4">
        </video>
              
            </div>
          </div>
        </center>
          <!-- /.box -->
  </section>