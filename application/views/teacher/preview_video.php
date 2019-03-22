        <section class="content-header">
      <h1>
        Video Pembelajaran<small>Preview</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <center>
      <div class="row">
        <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><?php echo $judul; ?></h3>
            </div>
        <video class=" responsive" width="855" height="480" controls play>
          <source src="<?php echo base_url("/assets/video/");?><?php echo $video; ?>" type="video/mp4">
        </video>
              
            </div>
          </div>
          </div>    
        </center>
          <!-- /.box -->
  </section>