
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Student
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Managemen Student</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Student</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo base_url();?>administrator/update_student" method="post">
              <div class="box-body">
                 <div class="form-group">
                  <label for="exampleInputNama">ID</label>
                  <input type="text" class="form-control" id="id" value="<?php echo $id; ?>" name="id" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputNama">Nama Depan</label>
                  <input type="text" class="form-control" id="nama_depan" value="<?php echo $nama_depan; ?>" name="nama_depan" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputNama">Nama Belakang</label>
                  <input type="text" class="form-control" id="nama_belakang" value="<?php echo $nama_belakang; ?>" name="nama_belakang" placeholder="Nama Belakang">
                </div>
                <div class="form-group">
                  <label for="exampleInputUername">Username</label>
                  <input type="text" class="form-control" id="username" value="<?php echo $username; ?>" name="username" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control" id="email" value="<?php echo $email; ?>" name="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="password" value="<?php echo $password;?>" name="password" placeholder="Password">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="Submit" name="btnSubmite" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
      
       </div>

    <!-- /.content -->
  </div>
  </section>