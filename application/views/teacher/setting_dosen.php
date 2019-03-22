 <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->

              <div class="tab-pane">
                <form class="form-horizontal" action="<?=base_url('teacher/update_dosen');?>" method="post">
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Username</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="Username" name="username" disabled placeholder="Username" value="<?=$_SESSION['sesiteacher']['username'];?>">
                    </div>
                  </div>
                     <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Code Dosen</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="code_dosen" name="code_dosen" disabled placeholder="Code Dosen" value="<?=$_SESSION['sesiteacher']['code_dosen'];?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nama" name="nama" placeholder="Name" value="<?=$_SESSION['sesiteacher']['nama'];?>">
                    </div>
                  </div>
                 
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?=$_SESSION['sesiteacher']['email'];?>">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Password</label>

                    <div class="col-sm-10">
                      <input type="Password" class="form-control" id="Password" name="password" placeholder="Password">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-success">Update Profile</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->

