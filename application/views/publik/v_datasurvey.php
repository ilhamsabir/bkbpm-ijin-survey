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



      <div class="row">

        <div class="col-md-12">

          <div class="portlet">

            <div class="portlet-header">

              <h3>
                <i class="fa fa-info-circle"></i>
                Data Pemohon Survey/PKL/Penelitian
              </h3>

            </div> <!-- /.portlet-header -->

            <div class="portlet-content">

            <div class="col-md-12">

              <table class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th style="background-color:#0dbdb7;color:#fff">No</th>
                <th style="background-color:#0dbdb7;color:#fff">No. Resi</th>
                <th style="background-color:#0dbdb7;color:#fff">Nama</th>
                <th style="background-color:#0dbdb7;color:#fff">Jenis Izin</th>
                <th style="background-color:#0dbdb7;color:#fff">Tanggal Pengajuan</th>
                <th style="background-color:#0dbdb7;color:#fff">Status</th>
                <th style="background-color:#0dbdb7;color:#fff">Cetak Resi</th>
                <th style="background-color:#0dbdb7;color:#fff">Aksi</th>
              </tr>
            </thead>
            <tbody>
                <?php   $no=$offset; foreach($ambil_datasurvey as $row){ ?>
              <tr>
                <td><?php echo ++$no;?></td>
                <td><?php echo $row->kd_ijin; ?></td>
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
                <?php }else{?>
                <td>
                  <span class="label label-success">Terverifikasi</span>
                </td>
                <td>
                  <a class="btn btn-primary btn-xs" href="<?php echo site_url('publikdatasurvey/lihatdata/'.$row->kd_ijin);?>"><i class="fa fa-print"></i> print</a>
                </td>
                <?php } ?>
                <td>
                  <?php if($row->notif != 'read') { ?>
                    <form action="<?= site_url('publikdatasurvey/read/');?>" method="post">
                      <input type="hidden" name="kd_ijin" value="<?php echo $row->kd_ijin;?>">
                      <input type="hidden" name="notif" value="read">
                      <button type="submit" class="btn btn-warning btn-xs"><i class="fa fa-check"></i> Sudah dibaca</button>
                    </form>
                  <?php } ?>
                </td>

              </tr>
              <?php  } ?>

            </tbody>
          </table>

          <?php //echo //$halaman ;?>



            </div>
</div>
      </div><!-- /.col -->
  </div><!-- /.row -->


      </div><!-- /.page-content -->
    </div>
  </div><!-- /.main-content -->
