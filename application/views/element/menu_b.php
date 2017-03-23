 <div class="mainbar">

  <div class="container">

    <button type="button" class="btn mainbar-toggle" data-toggle="collapse" data-target=".mainbar-collapse">
      <i class="fa fa-bars"></i>
    </button>

    <div class="mainbar-collapse collapse">

      <ul class="nav navbar-nav mainbar-nav">

        <li class="<?php if(isset($active_home)){echo $active_home ;}?>">
          <a href="<?php echo site_url('adminhome');?>">
            <i class="fa fa-dashboard"></i>
            Dashboard
          </a>
        </li>

        <li class="<?php if(isset($active_survey)){echo $active_survey ;}?>">
          <a href="<?php echo site_url('adminsurvey');?>">

            <i class="fa fa-book"></i>

            Survey/PKL/Penelitian
            <?php if (isset($count_survey)){
                 foreach ($count_survey as $row) { ?>
            <?php if($row->jml == '0'){?>

            <?php }else{ ?>
                  <span class="label label-danger" style="font-size:10px"><?php echo $row->jml;?></span>
            <?php } ?>
            <?php }
            }
             ?>
          </a>

        </li>

        <li class="<?php if(isset($active_ormas)){echo $active_ormas ;}?> ">
          <a href="<?php echo site_url('adminormas');?>">
          <i class="fa fa-group"></i>
          ORMAS/LSM
              <?php if (isset($count_ormas)){
                 foreach ($count_ormas as $row) { ?>
            <?php if($row->jml == '0'){?>

            <?php }else{ ?>
                  <span class="label label-danger" style="font-size:10px"><?php echo $row->jml;?></span>
            <?php } ?>
            <?php }
            }
             ?>
          </a>

        </li>

        <li class="<?php if(isset($active_pengaduan)){echo $active_pengaduan ;}?>">
          <a href="<?php echo site_url('adminpengaduan');?>">
            <i class="fa fa-comments-o"></i>
            Pengaduan
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

        </li>

        <li class="<?php if(isset($active_berita)){echo $active_berita;}?>">
          <a href="<?php echo site_url('adminberita');?>">
            <i class="fa fa-newspaper-o"></i>
            Berita
          </a>
        </li>

        <li class="<?php if(isset($active_otorisasi)){echo $active_otorisasi;}?>">
          <a href="<?php echo site_url('adminotorisasi');?>">
            <i class="fa fa-briefcase"></i>
            Data Otorisasi
          </a>
        </li>


      </ul>

    </div> <!-- /.navbar-collapse -->



  </div> <!-- /.container -->

</div> <!-- /.mainbar -->
