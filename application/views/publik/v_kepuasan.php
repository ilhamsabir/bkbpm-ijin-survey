<div class="main-content">
  <div class="main-content-inner">
    <div class="page-content">
      <div class="page-header">
        <h1>
          BKBPM Ijin
          <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            Layanan Ijin Survey / PKL / Penelitian
          </small>
        </h1>
      </div><!-- /.page-header -->

<div class="row">
    <div class="col-xs-12">
   	<!-- PAGE CONTENT BEGINS -->


        <h3>Survey Indeks Kepuasan </h3>

<?php echo $this->session->flashdata('pesan');?>
<div class="col-md-6">



     <div class="panel panel-info" style="border-radius:0%;">
      <div class="panel-heading">Sikap Petugas Dalam Memberikan Pelayanan</div>

      <div class="panel-body">


    <div class="col-md-12">


  <form action="<?= site_url('publikkepuasan/add');?>" method="post" class="form-horizontal" enctype="multipart/form-data">
    <input type="hidden" name="kd_indeks" value="<?php echo $kd_indeks;?>">
    <input type="hidden" name="tanya" value="sikap">
    <input type="hidden" name="tgl" value="<?php date_default_timezone_set("Asia/Jakarta"); echo date(" d/m/Y ");?>">
         <div class="form-group">

             <div class="col-sm-12">
                <label class="radio-inline">
                  <input type="radio" name="baik" class="" value="1"> Baik
                </label>
                <label class="radio-inline">
                  <input type="radio" name="cukup" class="" value="1"> Cukup Baik
                </label>
                <label class="radio-inline">
                  <input type="radio" name="kurang" class="" value="1"> Kurang Baik
                </label>
                <button type="submit" class="btn btn-warning btn-sm" style="margin-top:10px">vote</button>
              </div>


              </div> <!-- /.form-group -->
    </form>
    </div>
    <div class="col-md-12">
      <?php if (isset($get_sikapbaik)){
           foreach ($get_sikapbaik as $row) {

             $a=$row->baik;

             ?>

             <?php if (isset($get_sikapcukup)){
                  foreach ($get_sikapcukup as $row) {

                    $b=$row->cukup;

                    ?>

                    <?php if (isset($get_sikapkurang)){
                         foreach ($get_sikapkurang as $row) {

                           $c=$row->kurang;

                           ?>

                          <?php if($a >= $b){?>

                            <div class="progress-stat">

                                      <div class="progress-stat-label">
                                        % Baik
                                      </div> <!-- /.stat-label -->

                                      <div class="progress-stat-value">
                                      70%
                                      </div> <!-- /.stat-value -->

                                      <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                          <span class="sr-only"></span>
                                        </div>
                                      </div> <!-- /.progress -->

                                    </div> <!-- /.progress-stat -->

                                    <div class="progress-stat">

                                              <div class="progress-stat-label">
                                                % Cukup Baik
                                              </div> <!-- /.stat-label -->

                                              <div class="progress-stat-value">
                                              20%
                                              </div> <!-- /.stat-value -->

                                              <div class="progress progress-striped active">
                                                <div class="progress-bar progress-bar-secondary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                  <span class="sr-only"></span>
                                                </div>
                                              </div> <!-- /.progress -->

                                            </div> <!-- /.progress-stat -->

                                            <div class="progress-stat">

                                                      <div class="progress-stat-label">
                                                        % Kurang Baik                                              </div> <!-- /.stat-label -->

                                                      <div class="progress-stat-value">
                                                      10%
                                                      </div> <!-- /.stat-value -->

                                                      <div class="progress progress-striped active">
                                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                                          <span class="sr-only"></span>
                                                        </div>
                                                      </div> <!-- /.progress -->

                                                    </div> <!-- /.progress-stat -->




                        <?php  }elseif($b >= $a){ ?>

                          <div class="progress-stat">

                                    <div class="progress-stat-label">
                                      % Baik
                                    </div> <!-- /.stat-label -->

                                    <div class="progress-stat-value">
                                    20%
                                    </div> <!-- /.stat-value -->

                                    <div class="progress progress-striped active">
                                      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                        <span class="sr-only"></span>
                                      </div>
                                    </div> <!-- /.progress -->

                                  </div> <!-- /.progress-stat -->

                                  <div class="progress-stat">

                                            <div class="progress-stat-label">
                                              % Cukup Baik
                                            </div> <!-- /.stat-label -->

                                            <div class="progress-stat-value">
                                            70%
                                            </div> <!-- /.stat-value -->

                                            <div class="progress progress-striped active">
                                              <div class="progress-bar progress-bar-secondary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                                <span class="sr-only"></span>
                                              </div>
                                            </div> <!-- /.progress -->

                                          </div> <!-- /.progress-stat -->

                                          <div class="progress-stat">

                                                    <div class="progress-stat-label">
                                                      % Kurang Baik
                                                       </div> <!-- /.stat-label -->

                                                    <div class="progress-stat-value">
                                                    10%
                                                    </div> <!-- /.stat-value -->

                                                    <div class="progress progress-striped active">
                                                      <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                                        <span class="sr-only"></span>
                                                      </div>
                                                    </div> <!-- /.progress -->

                                                  </div> <!-- /.progress-stat -->





                        <?php }else{ ?>

                          <div class="progress-stat">

                                    <div class="progress-stat-label">
                                      % Baik
                                    </div> <!-- /.stat-label -->

                                    <div class="progress-stat-value">
                                    10%
                                    </div> <!-- /.stat-value -->

                                    <div class="progress progress-striped active">
                                      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                        <span class="sr-only"></span>
                                      </div>
                                    </div> <!-- /.progress -->

                                  </div> <!-- /.progress-stat -->

                                  <div class="progress-stat">

                                            <div class="progress-stat-label">
                                              % Cukup Baik
                                            </div> <!-- /.stat-label -->

                                            <div class="progress-stat-value">
                                            30%
                                            </div> <!-- /.stat-value -->

                                            <div class="progress progress-striped active">
                                              <div class="progress-bar progress-bar-secondary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                                <span class="sr-only"></span>
                                              </div>
                                            </div> <!-- /.progress -->

                                          </div> <!-- /.progress-stat -->

                                          <div class="progress-stat">

                                                    <div class="progress-stat-label">
                                                      % Kurang Baik                                              </div> <!-- /.stat-label -->

                                                    <div class="progress-stat-value">
                                                    70%
                                                    </div> <!-- /.stat-value -->

                                                    <div class="progress progress-striped active">
                                                      <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                                        <span class="sr-only"></span>
                                                      </div>
                                                    </div> <!-- /.progress -->

                                                  </div> <!-- /.progress-stat -->



                        <?php }?>
       <!-- END GET APAPUN LAH -->
                    <?php }
                       }
                     ?>

             <?php }
                }
              ?>

      <?php }
         }
       ?>


    </div>
    </div>
    </div>
  </div>

  <div class="col-md-6">

     <div class="panel panel-info" style="border-radius:0%;">
      <div class="panel-heading">Penanganan Pengaduan</div>

      <div class="panel-body">


    <div class="col-md-12">


  <form action="<?= site_url('publikkepuasan/add');?>" method="post" class="form-horizontal" enctype="multipart/form-data">
    <input type="hidden" name="kd_indeks" value="<?php echo $kd_indeks;?>">
    <input type="hidden" name="tanya" value="penanganan">
    <input type="hidden" name="tgl" value="<?php date_default_timezone_set("Asia/Jakarta"); echo date(" d/m/Y ");?>">
         <div class="form-group">

             <div class="col-sm-12">
                <label class="radio-inline">
                  <input type="radio" name="baik" class="" value="1"> Baik
                </label>
                <label class="radio-inline">
                  <input type="radio" name="cukup" class="" value="1"> Cukup Baik
                </label>
                <label class="radio-inline">
                  <input type="radio" name="kurang" class="" value="1"> Kurang Baik
                </label>
                <button type="submit" class="btn btn-warning btn-sm" style="margin-top:10px">vote</button>
              </div>


              </div> <!-- /.form-group -->
    </form>
    </div>
    <!-- CHART -->
    <div class="col-md-12">
      <?php if (isset($get_penangananbaik)){
           foreach ($get_penangananbaik as $row) {

             $d=$row->baik;

             ?>

             <?php if (isset($get_penanganancukup)){
                  foreach ($get_penanganancukup as $row) {

                    $e=$row->cukup;

                    ?>

                    <?php if (isset($get_penanganankurang)){
                         foreach ($get_penanganankurang as $row) {

                           $f=$row->kurang;

                           ?>

                          <?php if($d >= $e){?>

                            <div class="progress-stat">

                                      <div class="progress-stat-label">
                                        % Baik
                                      </div> <!-- /.stat-label -->

                                      <div class="progress-stat-value">
                                      70%
                                      </div> <!-- /.stat-value -->

                                      <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                          <span class="sr-only"></span>
                                        </div>
                                      </div> <!-- /.progress -->

                                    </div> <!-- /.progress-stat -->

                                    <div class="progress-stat">

                                              <div class="progress-stat-label">
                                                % Cukup Baik
                                              </div> <!-- /.stat-label -->

                                              <div class="progress-stat-value">
                                              20%
                                              </div> <!-- /.stat-value -->

                                              <div class="progress progress-striped active">
                                                <div class="progress-bar progress-bar-secondary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                  <span class="sr-only"></span>
                                                </div>
                                              </div> <!-- /.progress -->

                                            </div> <!-- /.progress-stat -->

                                            <div class="progress-stat">

                                                      <div class="progress-stat-label">
                                                        % Kurang Baik                                              </div> <!-- /.stat-label -->

                                                      <div class="progress-stat-value">
                                                      10%
                                                      </div> <!-- /.stat-value -->

                                                      <div class="progress progress-striped active">
                                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                                          <span class="sr-only"></span>
                                                        </div>
                                                      </div> <!-- /.progress -->

                                                    </div> <!-- /.progress-stat -->




                        <?php  }elseif($e >= $d){ ?>

                          <div class="progress-stat">

                                    <div class="progress-stat-label">
                                      % Baik
                                    </div> <!-- /.stat-label -->

                                    <div class="progress-stat-value">
                                    20%
                                    </div> <!-- /.stat-value -->

                                    <div class="progress progress-striped active">
                                      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                        <span class="sr-only"></span>
                                      </div>
                                    </div> <!-- /.progress -->

                                  </div> <!-- /.progress-stat -->

                                  <div class="progress-stat">

                                            <div class="progress-stat-label">
                                              % Cukup Baik
                                            </div> <!-- /.stat-label -->

                                            <div class="progress-stat-value">
                                            70%
                                            </div> <!-- /.stat-value -->

                                            <div class="progress progress-striped active">
                                              <div class="progress-bar progress-bar-secondary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                                <span class="sr-only"></span>
                                              </div>
                                            </div> <!-- /.progress -->

                                          </div> <!-- /.progress-stat -->

                                          <div class="progress-stat">

                                                    <div class="progress-stat-label">
                                                      % Kurang Baik
                                                       </div> <!-- /.stat-label -->

                                                    <div class="progress-stat-value">
                                                    10%
                                                    </div> <!-- /.stat-value -->

                                                    <div class="progress progress-striped active">
                                                      <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                                        <span class="sr-only"></span>
                                                      </div>
                                                    </div> <!-- /.progress -->

                                                  </div> <!-- /.progress-stat -->

                        <?php }else{?>

                          <div class="progress-stat">

                                    <div class="progress-stat-label">
                                      % Baik
                                    </div> <!-- /.stat-label -->

                                    <div class="progress-stat-value">
                                    10%
                                    </div> <!-- /.stat-value -->

                                    <div class="progress progress-striped active">
                                      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                        <span class="sr-only"></span>
                                      </div>
                                    </div> <!-- /.progress -->

                                  </div> <!-- /.progress-stat -->

                                  <div class="progress-stat">

                                            <div class="progress-stat-label">
                                              % Cukup Baik
                                            </div> <!-- /.stat-label -->

                                            <div class="progress-stat-value">
                                            30%
                                            </div> <!-- /.stat-value -->

                                            <div class="progress progress-striped active">
                                              <div class="progress-bar progress-bar-secondary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                                <span class="sr-only"></span>
                                              </div>
                                            </div> <!-- /.progress -->

                                          </div> <!-- /.progress-stat -->

                                          <div class="progress-stat">

                                                    <div class="progress-stat-label">
                                                      % Kurang Baik                                              </div> <!-- /.stat-label -->

                                                    <div class="progress-stat-value">
                                                    70%
                                                    </div> <!-- /.stat-value -->

                                                    <div class="progress progress-striped active">
                                                      <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                                        <span class="sr-only"></span>
                                                      </div>
                                                    </div> <!-- /.progress -->

                                                  </div> <!-- /.progress-stat -->



                        <?php } ?>
       <!-- END GET APAPUN LAH -->
                    <?php }
                       }
                     ?>

             <?php }
                }
              ?>

      <?php }
         }
       ?>


    </div>
    <!-- END CHART-->
    </div>
    </div>
  </div>


  <div class="col-md-6">

     <div class="panel panel-info" style="border-radius:0%;">
      <div class="panel-heading">Prosedur Pelayanan</div>

      <div class="panel-body">


    <div class="col-md-12">


  <form action="<?= site_url('publikkepuasan/add');?>" method="post" class="form-horizontal" enctype="multipart/form-data">
    <input type="hidden" name="kd_indeks" value="<?php echo $kd_indeks;?>">
    <input type="hidden" name="tanya" value="prosedur">
    <input type="hidden" name="tgl" value="<?php date_default_timezone_set("Asia/Jakarta"); echo date(" d/m/Y ");?>">
         <div class="form-group">

             <div class="col-sm-12">
                <label class="radio-inline">
                  <input type="radio" name="baik" class="" value="1"> Baik
                </label>
                <label class="radio-inline">
                  <input type="radio" name="cukup" class="" value="1"> Cukup Baik
                </label>
                <label class="radio-inline">
                  <input type="radio" name="kurang" class="" value="1"> Kurang Baik
                </label>
                <button type="submit" class="btn btn-warning btn-sm" style="margin-top:10px">vote</button>
              </div>


              </div> <!-- /.form-group -->
    </form>
    </div>

    <div class="col-md-12">
      <?php if (isset($get_prosedurbaik)){
           foreach ($get_prosedurbaik as $row) {

             $g=$row->baik;

             ?>

             <?php if (isset($get_prosedurcukup)){
                  foreach ($get_prosedurcukup as $row) {

                    $h=$row->cukup;

                    ?>

                    <?php if (isset($get_prosedurkurang)){
                         foreach ($get_prosedurkurang as $row) {

                           $i=$row->kurang;

                           ?>

                          <?php if($g >= $h){?>

                            <div class="progress-stat">

                                      <div class="progress-stat-label">
                                        % Baik
                                      </div> <!-- /.stat-label -->

                                      <div class="progress-stat-value">
                                      70%
                                      </div> <!-- /.stat-value -->

                                      <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                          <span class="sr-only"></span>
                                        </div>
                                      </div> <!-- /.progress -->

                                    </div> <!-- /.progress-stat -->

                                    <div class="progress-stat">

                                              <div class="progress-stat-label">
                                                % Cukup Baik
                                              </div> <!-- /.stat-label -->

                                              <div class="progress-stat-value">
                                              20%
                                              </div> <!-- /.stat-value -->

                                              <div class="progress progress-striped active">
                                                <div class="progress-bar progress-bar-secondary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                  <span class="sr-only"></span>
                                                </div>
                                              </div> <!-- /.progress -->

                                            </div> <!-- /.progress-stat -->

                                            <div class="progress-stat">

                                                      <div class="progress-stat-label">
                                                        % Kurang Baik                                              </div> <!-- /.stat-label -->

                                                      <div class="progress-stat-value">
                                                      10%
                                                      </div> <!-- /.stat-value -->

                                                      <div class="progress progress-striped active">
                                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                                          <span class="sr-only"></span>
                                                        </div>
                                                      </div> <!-- /.progress -->

                                                    </div> <!-- /.progress-stat -->




                        <?php  }elseif($h >= $g){ ?>

                          <div class="progress-stat">

                                    <div class="progress-stat-label">
                                      % Baik
                                    </div> <!-- /.stat-label -->

                                    <div class="progress-stat-value">
                                    20%
                                    </div> <!-- /.stat-value -->

                                    <div class="progress progress-striped active">
                                      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                        <span class="sr-only"></span>
                                      </div>
                                    </div> <!-- /.progress -->

                                  </div> <!-- /.progress-stat -->

                                  <div class="progress-stat">

                                            <div class="progress-stat-label">
                                              % Cukup Baik
                                            </div> <!-- /.stat-label -->

                                            <div class="progress-stat-value">
                                            70%
                                            </div> <!-- /.stat-value -->

                                            <div class="progress progress-striped active">
                                              <div class="progress-bar progress-bar-secondary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                                <span class="sr-only"></span>
                                              </div>
                                            </div> <!-- /.progress -->

                                          </div> <!-- /.progress-stat -->

                                          <div class="progress-stat">

                                                    <div class="progress-stat-label">
                                                      % Kurang Baik
                                                       </div> <!-- /.stat-label -->

                                                    <div class="progress-stat-value">
                                                    10%
                                                    </div> <!-- /.stat-value -->

                                                    <div class="progress progress-striped active">
                                                      <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                                        <span class="sr-only"></span>
                                                      </div>
                                                    </div> <!-- /.progress -->

                                                  </div> <!-- /.progress-stat -->

                        <?php }else{?>

                          <div class="progress-stat">

                                    <div class="progress-stat-label">
                                      % Baik
                                    </div> <!-- /.stat-label -->

                                    <div class="progress-stat-value">
                                    10%
                                    </div> <!-- /.stat-value -->

                                    <div class="progress progress-striped active">
                                      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                        <span class="sr-only"></span>
                                      </div>
                                    </div> <!-- /.progress -->

                                  </div> <!-- /.progress-stat -->

                                  <div class="progress-stat">

                                            <div class="progress-stat-label">
                                              % Cukup Baik
                                            </div> <!-- /.stat-label -->

                                            <div class="progress-stat-value">
                                            30%
                                            </div> <!-- /.stat-value -->

                                            <div class="progress progress-striped active">
                                              <div class="progress-bar progress-bar-secondary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                                <span class="sr-only"></span>
                                              </div>
                                            </div> <!-- /.progress -->

                                          </div> <!-- /.progress-stat -->

                                          <div class="progress-stat">

                                                    <div class="progress-stat-label">
                                                      % Kurang Baik                                              </div> <!-- /.stat-label -->

                                                    <div class="progress-stat-value">
                                                    70%
                                                    </div> <!-- /.stat-value -->

                                                    <div class="progress progress-striped active">
                                                      <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                                        <span class="sr-only"></span>
                                                      </div>
                                                    </div> <!-- /.progress -->

                                                  </div> <!-- /.progress-stat -->



                        <?php } ?>
       <!-- END GET APAPUN LAH -->
                    <?php }
                       }
                     ?>

             <?php }
                }
              ?>

      <?php }
         }
       ?>


    </div>

    </div>
    </div>
  </div>


  <div class="col-md-6">

     <div class="panel panel-info" style="border-radius:0%;">
      <div class="panel-heading">Ketepatan Waktu Pelayanan</div>

      <div class="panel-body">


    <div class="col-md-12">


  <form action="<?= site_url('publikkepuasan/add');?>" method="post" class="form-horizontal" enctype="multipart/form-data">
    <input type="hidden" name="kd_indeks" value="<?php echo $kd_indeks;?>">
    <input type="hidden" name="tanya" value="waktu">
    <input type="hidden" name="tgl" value="<?php date_default_timezone_set("Asia/Jakarta"); echo date(" d/m/Y ");?>">
         <div class="form-group">

             <div class="col-sm-12">
                <label class="radio-inline">
                  <input type="radio" name="baik" class="" value="1"> Baik
                </label>
                <label class="radio-inline">
                  <input type="radio" name="cukup" class="" value="1"> Cukup Baik
                </label>
                <label class="radio-inline">
                  <input type="radio" name="kurang" class="" value="1"> Kurang Baik
                </label>
                <button type="submit" class="btn btn-warning btn-sm" style="margin-top:10px">vote</button>
              </div>


              </div> <!-- /.form-group -->
    </form>
    </div>

    <div class="col-md-12">
      <?php if (isset($get_waktubaik)){
           foreach ($get_waktubaik as $row) {

             $j=$row->baik;

             ?>

             <?php if (isset($get_waktucukup)){
                  foreach ($get_waktucukup as $row) {

                    $k=$row->cukup;

                    ?>

                    <?php if (isset($get_waktukurang)){
                         foreach ($get_waktukurang as $row) {

                           $l=$row->kurang;

                           ?>

                          <?php if($j >= $k){?>

                            <div class="progress-stat">

                                      <div class="progress-stat-label">
                                        % Baik
                                      </div> <!-- /.stat-label -->

                                      <div class="progress-stat-value">
                                      70%
                                      </div> <!-- /.stat-value -->

                                      <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                          <span class="sr-only"></span>
                                        </div>
                                      </div> <!-- /.progress -->

                                    </div> <!-- /.progress-stat -->

                                    <div class="progress-stat">

                                              <div class="progress-stat-label">
                                                % Cukup Baik
                                              </div> <!-- /.stat-label -->

                                              <div class="progress-stat-value">
                                              20%
                                              </div> <!-- /.stat-value -->

                                              <div class="progress progress-striped active">
                                                <div class="progress-bar progress-bar-secondary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                  <span class="sr-only"></span>
                                                </div>
                                              </div> <!-- /.progress -->

                                            </div> <!-- /.progress-stat -->

                                            <div class="progress-stat">

                                                      <div class="progress-stat-label">
                                                        % Kurang Baik                                              </div> <!-- /.stat-label -->

                                                      <div class="progress-stat-value">
                                                      10%
                                                      </div> <!-- /.stat-value -->

                                                      <div class="progress progress-striped active">
                                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                                          <span class="sr-only"></span>
                                                        </div>
                                                      </div> <!-- /.progress -->

                                                    </div> <!-- /.progress-stat -->




                        <?php  }elseif($k >= $j){ ?>

                          <div class="progress-stat">

                                    <div class="progress-stat-label">
                                      % Baik
                                    </div> <!-- /.stat-label -->

                                    <div class="progress-stat-value">
                                    20%
                                    </div> <!-- /.stat-value -->

                                    <div class="progress progress-striped active">
                                      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                        <span class="sr-only"></span>
                                      </div>
                                    </div> <!-- /.progress -->

                                  </div> <!-- /.progress-stat -->

                                  <div class="progress-stat">

                                            <div class="progress-stat-label">
                                              % Cukup Baik
                                            </div> <!-- /.stat-label -->

                                            <div class="progress-stat-value">
                                            70%
                                            </div> <!-- /.stat-value -->

                                            <div class="progress progress-striped active">
                                              <div class="progress-bar progress-bar-secondary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                                <span class="sr-only"></span>
                                              </div>
                                            </div> <!-- /.progress -->

                                          </div> <!-- /.progress-stat -->

                                          <div class="progress-stat">

                                                    <div class="progress-stat-label">
                                                      % Kurang Baik
                                                       </div> <!-- /.stat-label -->

                                                    <div class="progress-stat-value">
                                                    10%
                                                    </div> <!-- /.stat-value -->

                                                    <div class="progress progress-striped active">
                                                      <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                                        <span class="sr-only"></span>
                                                      </div>
                                                    </div> <!-- /.progress -->

                                                  </div> <!-- /.progress-stat -->

                        <?php }else{?>

                          <div class="progress-stat">

                                    <div class="progress-stat-label">
                                      % Baik
                                    </div> <!-- /.stat-label -->

                                    <div class="progress-stat-value">
                                    10%
                                    </div> <!-- /.stat-value -->

                                    <div class="progress progress-striped active">
                                      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                        <span class="sr-only"></span>
                                      </div>
                                    </div> <!-- /.progress -->

                                  </div> <!-- /.progress-stat -->

                                  <div class="progress-stat">

                                            <div class="progress-stat-label">
                                              % Cukup Baik
                                            </div> <!-- /.stat-label -->

                                            <div class="progress-stat-value">
                                            30%
                                            </div> <!-- /.stat-value -->

                                            <div class="progress progress-striped active">
                                              <div class="progress-bar progress-bar-secondary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                                <span class="sr-only"></span>
                                              </div>
                                            </div> <!-- /.progress -->

                                          </div> <!-- /.progress-stat -->

                                          <div class="progress-stat">

                                                    <div class="progress-stat-label">
                                                      % Kurang Baik                                              </div> <!-- /.stat-label -->

                                                    <div class="progress-stat-value">
                                                    70%
                                                    </div> <!-- /.stat-value -->

                                                    <div class="progress progress-striped active">
                                                      <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                                        <span class="sr-only"></span>
                                                      </div>
                                                    </div> <!-- /.progress -->

                                                  </div> <!-- /.progress-stat -->



                        <?php } ?>
       <!-- END GET APAPUN LAH -->
                    <?php }
                       }
                     ?>

             <?php }
                }
              ?>

      <?php }
         }
       ?>


    </div>

    </div>
    </div>
  </div>











</div><!-- col md 4 -->



</div><!-- /.col -->
</div><!-- /.row -->


</div><!-- /.page-content -->
</div>
</div><!-- /.main-content -->
