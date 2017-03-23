<div class="main-container ace-save-state container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar h-sidebar navbar-collapse collapse ace-save-state sidebar-fixed">


				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">

					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">

					</div>
				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
					<li class="<?php if(isset($active_home)){echo $active_home ;}?>">
						<a href="<?php echo site_url('adminhome');?>">
								<img src="<?php echo base_url();?>assets-app/images/science.png" class="gbr-tengah"/>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="<?php if(isset($active_survey)){echo $active_survey ;}?>">
						<a href="<?php echo site_url('adminsurvey');?>">
								<img src="<?php echo base_url();?>assets-app/images/book-5.png" class="gbr-tengah"/>
							<span class="menu-text"> 	Data Survey/PKL/Penelitian </span>

								<?php if (isset($count_survey)){
										 foreach ($count_survey as $row) { ?>
								<?php if($row->jml == '0'){?>

								<?php }else{ ?>
											<span class="notif__admin label label-danger " style="font-size:10px"><?php echo $row->jml;?></span>
								<?php } ?>
								<?php }
								}
								 ?>


						</a>

						<b class="arrow"></b>
					</li>

					<!-- Pengaduan -->
					<li class="<?php if(isset($active_pengaduan)){echo $active_pengaduan ;}?>">
						<a href="<?php echo site_url('adminpengaduan');?>">
							<img src="<?php echo base_url();?>assets-app/images/chat.png" class="gbr-tengah"/>
							<span class="menu-text">
								 Pengaduan
							 </span>
							 <?php if (isset($count_pesan)){
									foreach ($count_pesan as $row) {
										$j = $row->jml;
										?>
										<?php if (isset($count_adu)){
											 foreach ($count_adu as $row) {
												 $t = $row->tot;
												 $d=$t-$j;
												 ?>
						 <?php if($d == 'null'){?>

						 <?php }else{ ?>
									 <span class="label label-danger" style="font-size:10px"><?php echo $d;?></span>
						 <?php } ?>

						 <?php }
						 }
					 }
				 }
							?>
						</a>
						<b class="arrow"></b>
					</li>

					<li class="<?php if(isset($active_otorisasi)){echo $active_otorisasi ;}?>">
						<a href="<?php echo site_url('adminotorisasi');?>">
							<img src="<?php echo base_url();?>assets-app/images/note.png" class="gbr-tengah"/>
							<span class="menu-text">
								 Data Otorisasi
							 </span>
						</a>
						<b class="arrow"></b>
					</li>




				</ul><!-- /.nav-list -->
			</div>
<!-- nav publik -->
