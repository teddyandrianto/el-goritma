
<div class="tab-content">
    <div class="active tab-pane" id="activity">
        <div class="tab-pane">
            <form class="form-horizontal" action="<?=base_url('student/update_student');?>" method="post">
              <div class="form-group">
                <label for="inputEmail" class="col-sm-4 control-label">Username</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="Username" name="username" disabled placeholder="Username" value="<?=$_SESSION['sesistudent']['username'];?>">
                    </div>
              </div>
              <div class="form-group">
                  <label for="inputEmail" class="col-sm-4 control-label">Nama Depan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="nama_depan" name="nama_depan" placeholder="nama_depan" value="<?=$_SESSION['sesistudent']['nama_depan'];?>">
                    </div>
              </div>
              <div class="form-group">
                  <label for="inputName" class="col-sm-4 control-label">Nama Belakang</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="nama_belakang" name="nama_belakang" placeholder="nama_belakang" value="<?=$_SESSION['sesistudent']['nama_belakang'];?>">
                    </div>
              </div>   
              <div class="form-group">
                  <label for="inputSkills" class="col-sm-4 control-label">Email</label>
                    <div class="col-sm-8">
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?=$_SESSION['sesistudent']['email'];?>">
                    </div>
              </div>      
              <div class="form-group">
                  <label for="inputSkills" class="col-sm-4 control-label">Password</label>
                    <div class="col-sm-8">
                      <input type="Password" class="form-control" id="Password" name="password" placeholder="Password">
                    </div>
              </div>
              <div class="form-group">
                  <div class="col-sm-offset-4 col-sm-8">
                      <button type="submit" class="btn btn-danger">Submit</button>
                  </div>
              </div>
            </form>
        </div>
    </div>
    </div>
    </div>

</div>   

 

