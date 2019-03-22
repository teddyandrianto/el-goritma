    <section class="content-header">
      <h1>
        Management
        <small>Mahasiswa</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('/administrator'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url('administrator/student'); ?>">Tables</a></li>
        <li class="active">Data Mahasiswa</li>
         
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Mahasiswa</h3>
              <a href="addstudent" class="btn btn-success pull-right"><b>+</b> Add new Mahasiswa</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>username</th>
                  <th>Nama Depan</th>
                  <th>Nama Belakang</th>
                  <th>Email</th>
                  <th><center>Action</center></th>
                </tr>
                </thead>
                
                <tbody>
                 <?php foreach ($rows as $d) { ?>
                <tr>
                  <td><?php echo $d['id']; ?></td>
                <td><?php echo $d['username']; ?></td>
                <td><?php echo $d['nama_depan']; ?></td>
                <td><?php echo $d['nama_belakang']; ?></td>
                <td><?php echo $d['email']; ?></td>
                <td class="text-center"><a class='btn btn-info btn-xs' href="<?php echo base_url("/administrator/edit_student/"); ?><?php echo $d['id']; ?>"><span class="glyphicon glyphicon-edit"></span> Edit</a> 
                <a href="<?php echo base_url("/administrator/delete_student/"); ?><?php echo $d['id']; ?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
            </tr>
                <?php } ?>
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
  </div></div></div>