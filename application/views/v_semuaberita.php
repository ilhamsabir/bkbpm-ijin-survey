
	<div id="screens">
		<div class="dot-screens">
			<a class="icon-picture" href="#screens"></a>
		</div>
			<h2>Berita Perizinan BKBPM Kota Bandung</h2>

			<div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="row">

            <?php $no=$offset;
                  foreach($ambil_beritadepan as $row){
                ?>
            <div class="col-md-4">
              <div class="thumbnail">
                <img src="<?php echo base_url();?>/uploads/berita/<?php echo$row->foto;?>" alt="..." style="height:255px">
                <div class="caption">
                  <h4 style="color:#3e3e3e;font-size:18px"><?php echo $row->j_berita;?></h4>
                    <small><i class="fa fa-calendar"></i> <?php echo $row->tgl_b; ?></small>
                    <p style="font-size:14px;text-align:justify"><?php $isi=$row->isi_b; $isi=character_limiter($isi,320);?><?php echo $isi; ?></p>
                  <p><a href="<?php echo site_url('berita/archieve/'.$row->slug_berita);?>" class="btn btn-primary btn-sm">Selengkapnya</a></p>
                </div>
              </div>
            </div>
 <?php } ?>
           </div>
           <?php echo $halaman ;?>
         </div>

         </div>
		    </div><!--container-->

      </div>
	</div><!--end #screens>
	<!- -End Screens-->
