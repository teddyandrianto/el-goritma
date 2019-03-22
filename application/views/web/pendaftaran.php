

     <div class="container" style="margin-top: -60px;">
        <div class="row"  >
            
            <div class="col-lg-5 col-lg-offset-4">
                <div class="well">
                    <center>
                  <img  src="<?php echo base_url();?>/assets/web/img/logo-daftar.png" width="232px" height="45px">
                  </center>
                  <hr>
          <!-- Example Form -->
          <form action="<?php echo base_url(). 'web/daftar_student'; ?>" method= "POST" >
             <div class="form-group">
              <label for="exampleInputName">Nama Depan</label>
              <input type="text" class="form-control" id="nama_depan" name="nama_depan" placeholder="Masukan Nama Depan">
            </div>
             <div class="form-group">
              <label for="exampleInputName">Nama Belakang</label>
              <input type="text" class="form-control" id="nama_belakang" name="nama_belakang" placeholder="Masukan Nama Belakang">
            </div>
            <div class="form-group form-group-md">
              <label for="exampleInputUserName">Username</label>
              <input type="text" class="form-control" id="username" name="username" placeholder="Masukan Username">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Masukan Email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password">
            </div>
            <button type="submit" class="btn btn-success btn-block">Daftar</button>
          </form>
          <!-- end -->
        </div>

                      </div>
        <!-- /.row -->
    </div>
   


</body>
</html>