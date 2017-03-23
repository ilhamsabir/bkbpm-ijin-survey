
	<div id="screens">
		<div class="dot-screens">
			<a class="icon-picture" href="#screens"></a>
		</div>
			<h2>Berita Perizinan BKBPM Kota Bandung</h2>

			<div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="row">

            <?php
    		    if (isset($dt_berita)){
    		    foreach($dt_berita as $row){
    		    ?>
            <div class="col-md-12">
              <div class="thumbnail">

                <div class="caption">
                  <h4 style="color:#3e3e3e;font-size:22px"><?php echo $row->j_berita;?></h4>
                    <small><i class="fa fa-calendar"></i> <?php echo $row->tgl_b; ?></small>


											<P><img src="<?php echo base_url();?>/uploads/berita/<?php echo$row->foto;?>" alt="..." style="height:255px;display:block;float:left; margin-right:20px;"></p>
											<p>	<?php echo $row->isi_b; ?></p>

                </div>
              </div>
            </div>

 <?php }
 }?>
           </div>

         </div>

         </div>
		    </div><!--container-->

      </div>
	</div><!--end #screens>
	<!- -End Screens-->
