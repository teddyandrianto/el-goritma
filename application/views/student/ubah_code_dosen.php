<div class="col-md-3">
          <div class="box ">
                <form role="form" action="<?php echo base_url();?>student/update_code_dosen" method="post">
              <div class="box-body">
                <div class="form-group">
                  <h4>Ubah Code Dosen</h4>
                    <div class="col-sm-12">
                      <input type="text" class="form-control" id="code_dosen" name="code_dosen" placeholder="Inputkan Code Dosen" value="<?=$_SESSION['sesistudent']['code_dosen'];?>">
                    </div>
              </div>      
                
                </div>
                <div class="box-footer"><center>
                  <button type="Submit" name="btnSubmite" class="btn btn-danger">Submit</button>
                  </center>   
                </div>
              </div>
            </form>
          </div>     
</section>