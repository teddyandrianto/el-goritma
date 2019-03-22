 
 <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->

              <div class="tab-pane" >
              <form class="form-horizontal">
              <div class="form-group">
                    <label for="inputName" class="col-sm-4 control-label">Name Lengkap</label>

                    <div class="col-sm-8">
                    <div class="form-control">
                  <?=$_SESSION['sesistudent']['nama_depan'];?> <?=$_SESSION['sesistudent']['nama_belakang'];?>
                  </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-4 control-label">Username</label>

                    <div class="col-sm-8">
                      <div class="form-control">
                      <?=$_SESSION['sesistudent']['username'];?>
                      </div>
                    </div>
                  </div>
                 
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-4 control-label">Email</label>

                    <div class="col-sm-8">
                    <div class="form-control">
                     <?=$_SESSION['sesistudent']['email'];?> 
                     </div>
                    </div>
                  </div>
                  
                </form>

              </div>
              </div>
              </div>
              </div>


      </div>



