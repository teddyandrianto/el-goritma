 <div class="container" style="margin-top: -6px;">
        <div class="row text-center ">

                <img src="<?php echo base_url();?>/assets/web/img/logo2.png" width="200px" height="60px">
                <h3><b>&nbsp;Belajar Algoritma Online</b></h3>
            
               
                <br>
             </div>
            <div class="col-lg-4 col-lg-offset-4">
                <div class="well well-center">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#login" data-toggle="tab" aria-expanded="true">Login Mahasiswa</a></li>
                        <li class=""><a href="#create" data-toggle="tab" aria-expanded="false">Login Dosen</a></li>          
                    </ul>

                    <div class="tab-content ">
                        <div class="tab-pane active in" id="login">
                          
                          <form style="margin-top: 20px;" action="<?php echo base_url('student/Login')?>" method= "POST" >
                          <div class="form-group form-group-md">
                            <label for="exampleInputName">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Name">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                          </div>
                             <button type="submit" class="btn btn-success btn-block">Masuk</button>
                          </form>
                        </div>

                    <div class="tab-pane fade" id="create">
                                        
                          <form style="margin-top: 20px;" action="<?php echo base_url('teacher/login')?>" method= "POST" >
                          <div class="form-group form-group-md">
                            <label for="exampleInputName">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Name">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                          </div>
                             <button type="submit" class="btn btn-success btn-block">Masuk</button>
                          </form>
                    </div>
                    </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

    <!-- jQuery -->
   

</body>

</html>
