<div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
      
            <div class="col-md-12">
                
                    <div class="well-title">
                    <?php foreach ($data as $d) { ?>
                        <h4><i class="fa fa-fw fa-check"></i> <?php echo $d['judul']; ?></h4>
                    </div>
                    
                    <div class="well">
                        <p><?php echo $d['isi_about']; ?></p>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>