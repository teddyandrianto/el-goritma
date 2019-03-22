 <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->

              <div class="tab-pane" >
              <div class="form-horizontal">
              <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                      <div class="form-control">
                      <?=$_SESSION['sesiteacher']['nama'];?>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Username</label>

                    <div class="col-sm-10">
                    <div class="form-control">
                      <?=$_SESSION['sesiteacher']['username'];?>
                      </div>
                    </div>
                  </div>
                 
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                    <div class="form-control">
                      <?=$_SESSION['sesiteacher']['email'];?>
                      </div>
                    </div>
                  </div>

                     <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Code Dosen</label>

                    <div class="col-sm-10">
                    <div class="form-control">
                     <?=$_SESSION['sesiteacher']['code_dosen'];?>
                    </div>
                    </div>
                  </div>
                  </div>

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
  