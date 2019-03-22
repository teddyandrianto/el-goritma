  
    <section class="content-header">
      <h1>
        Data Tables
        <small>Dosen</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('/administrator'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
         
      </ol>
    </section>

    <!-- Main content -->
<section class="content">
    <div class="row">
     <div class="col-xs-6">
            <form role="form" action="<?php echo base_url();?>student/update_chat" method="post">
             <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Compose New Message</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
                <input class="form-control" name="subjek" placeholder="Subject:">
              </div>
              <div class="form-group">
                    <textarea id="compose-textarea" name="pesan" class="form-control" style="height: 100px">
                    </textarea>
              </div>
             
            <!-- /.box-body -->
            <div class="box-footer">
              <div class="pull-right">
               
                <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
              </div>
            
            </div>
          </div>
              </form>
              </div>
            </div>  

        <div class="col-xs-6">
            <div class="box box-success">
              <div class="box-header">
                <i class="fa fa-comments-o"></i>
                <h3 class="box-title">Chat</h3>
              </div>
              <div class="box-body chat" id="chat-box">
                <!-- chat item -->
                <?php foreach ($chat as $c) { ?>
                <div class="item">
                  <div class="pull-right box-tools">
                  <?php if($_SESSION['sesistudent']['username'] == $c->username){ ?>
                   <a class='btn btn-info btn-sm' href="<?php echo base_url("index.php/student/delete_chat/"); ?>/<?php echo $c->id;?>">
                                    <span class="fa fa-times"></span></a> 
                  <?php } ?>
              </div> 
                  <img src="<?php echo base_url('assets/photo-profile');?>/<?php echo $c->foto;?>" alt="user image" class="offline">
                  <p class="message">
                  <a href="#" class="name">
                    <small class="text-muted "><i class="fa fa-clock-o"></i> <?php echo $c->waktu;?></small>
                    <?php echo $c->username;?>
                  </a>
                  <b><?php echo $c->subjek;?></b><br>
                    <?php echo $c->pesan;?>
                  </p>
                </div>
                 <?php } ?>
              <!-- /.item -->
          
              </div>
              </div>
              </div>
                

          
  
           
          </div>
          </div>
          </div>
          </div>
          </section>