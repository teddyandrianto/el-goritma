    <section class="content-header">
      <h1>
        <?php echo $judul; ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('/administrator'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Modul</a></li>
        <li class="active"><?php echo $judul; ?></li>
         
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
              <embed class=" responsive" type="application/pdf" src="<?php echo base_url("/assets/modul/");?><?php echo $pdf; ?>" width="100%" height="550px"> </embed>
            
            </div>
          </div>
          <!-- /.box -->
  </section>