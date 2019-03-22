    <section class="content-header">
      <h1>
        Data Video Pembelajaran
        <small>Dosen</small>
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabel Video Pembelajaran</h3>
              <a href="addvideo" class="btn btn-warning btn-xs pull-right "><span class="fa fa-plus"></span> Add New Video</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Judul</th>
                  <th>File</th>
                  <th><center>Action</center></th>
                </tr>
                </thead>
                
                <tbody>
                <?php foreach ($rows as $d) { ?>
                <tr>
                  <td><?php echo $d->urutan;?></td>
                  <td><?php echo $d->judul;?></td>
                  <td><?php echo $d->video;?></td>
                  <td class="text-center"><a class='btn btn-success btn-xs' href="<?php echo base_url("/teacher/video_preview/"); ?><?php echo $d->id;?>"><span class="fa fa-eye"></span> Preview</a> 
                    <a href="<?php echo base_url("/teacher/delete_video"); ?>/<?php echo $d->id;?>" class="btn btn-danger btn-xs"><span class="fa fa-trash-o"></span> Delete</a></td>
                </tr>
                <?php } ?>
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
  </div></div></div>