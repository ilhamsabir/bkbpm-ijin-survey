<div class="container">

  <div class="content" style="min-height:460px">

    <div class="content-container">



      <div>
        <h4 class="heading-inline">Selamat Datang , <?php echo $this->session->userdata('NAME');?>
        &nbsp;&nbsp;<small><?php date_default_timezone_set("Asia/Jakarta"); echo date(" h:i:s d/m/Y ");?></small>
        &nbsp;&nbsp;</h4>


      </div>



      <br>



      <div class="row">

        <div class="col-md-12">

          <div class="portlet">

            <div class="portlet-header">

              <h3>
                <i class="fa fa-info-circle"></i>
                Data Pemohon ORMAS / LSM
              </h3>

            </div> <!-- /.portlet-header -->

            <div class="portlet-content">

            <div class="col-md-12">

              <table class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th style="background-color:#4712b3;color:#fff">No</th>
                <th style="background-color:#4712b3;color:#fff">No. Resi</th>
                <th style="background-color:#4712b3;color:#fff">Nama</th>
                <th style="background-color:#4712b3;color:#fff">Jenis Izin</th>
                <th style="background-color:#4712b3;color:#fff">Tanggal Pengajuan</th>
                <th style="background-color:#4712b3;color:#fff">Status</th>
                <th style="background-color:#4712b3;color:#fff">Cetak Resi</th>
              </tr>
            </thead>
            <tbody>
                <?php   $no=$offset; foreach($ambil_dataormas as $row){ ?>
              <tr>
                <td><?php echo ++$no;?></td>
                <td><?php echo $row->kd_ijin1; ?></td>
                <td><?php echo $row->nama; ?></td>
                <td><?php echo $row->jenisijin; ?></td>
                <td><?php echo $row->tglajuan; ?></td>
                <?php if($row->verifikasi == '0'){;?>
                <td>
                  <span class="label label-primary">Belum Terverifikasi</span>
                </td>
                <td>
                  <a class="btn btn-primary btn-xs disabled" href="#"><i class="fa fa-print"></i> print</a>

                </td>
                <?php }elseif ($row->verifikasi == '1') {?>
                <td>
                  <span class="label label-warning">Verifikasi Lapangan</span>
                </td>
                <td>
                  <a class="btn btn-primary btn-xs disabled" href="#"><i class="fa fa-print"></i> print</a>

                </td>
                <?php }else{?>
                <td>
                  <span class="label label-success">Terverifikasi</span>
                </td>
                <td>
                  <a class="btn btn-primary btn-xs" href="<?php echo site_url('publikdataormas/lihatdata/'.$row->kd_ijin1);?>"><i class="fa fa-print"></i> print</a>

                </td>
                <?php } ?>

              </tr>
              <?php  } ?>

            </tbody>
          </table>

          <?php echo $halaman ;?>



            </div>


            </div> <!-- /.portlet-content -->

          </div> <!-- /.portlet -->

        </div> <!-- /.col -->


      </div> <!-- /.row -->

    </div> <!-- /.content-container -->

  </div> <!-- /.content -->

</div> <!-- /.container -->
