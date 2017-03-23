 <div class="mainbar">

  <div class="container">

    <button type="button" class="btn mainbar-toggle" data-toggle="collapse" data-target=".mainbar-collapse">
      <i class="fa fa-bars"></i>
    </button>

    <div class="mainbar-collapse collapse">

      <ul class="nav navbar-nav mainbar-nav">

        <li class="<?php if(isset($active_home)){echo $active_home ;}?>">
          <a href="<?php echo site_url('publikhome');?>">
            <i class="fa fa-dashboard"></i>
            Dashboard
          </a>
        </li>

        <li class="dropdown <?php if(isset($active_datasurvey)){
                              echo $active_datasurvey ;
                            }elseif(isset($active_dataormas)){
                              echo $active_dataormas;
                            }else{

                            }
                            ?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
            <i class="fa fa-folder-open"></i>
            Data Berkas
            <span class="caret"></span>
          </a>

          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url('publikdatasurvey');?>"><i class="fa fa-user nav-icon"></i> Data Survey/PKL/Penelitian</a></li>
            <li><a href="<?php echo site_url('publikdataormas');?>"><i class="fa fa-bars nav-icon"></i> Data ORMAS/LSM</a></li>
          </ul>
        </li>

        <li class="<?php if(isset($active_monitor)){echo $active_monitor ;}?> ">
          <a href="<?php echo site_url('publikmonitoring');?>">
            <i class="fa fa-desktop"></i>
            Monitoring Berkas

          </a>

        </li>

        <li class="<?php if(isset($active_kepuasan)){echo $active_kepuasan ;}?> ">
          <a href="<?php echo site_url('publikkepuasan');?>">
          <i class="fa fa-bar-chart"></i>
          Indeks Kepuasan

          </a>

        </li>

        <li class="<?php if(isset($active_pengaduan)){echo $active_pengaduan ;}?>">
          <a href="<?php echo site_url('publikpengaduan');?>">
            <i class="fa fa-comments-o"></i>
            Pengaduan

          </a>

        </li>


      </ul>

    </div> <!-- /.navbar-collapse -->

  </div> <!-- /.container -->

</div> <!-- /.mainbar -->
