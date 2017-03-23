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
                Data Pemohon Survey/PKL/Penelitian
              </h3>

            </div> <!-- /.portlet-header -->

            <div class="portlet-content">

              <div class="col-md-4 col-md-offset-0">

                          <a href="<?php echo site_url('adminormas');?>" class="btn btn-success btn-md">kembali</a>

           </div>
           <br/>
           <br/>
            <div class="col-md-12">

              <table class="table table-bordered table-highlight">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis Izin</th>
                <th>Tanggal Pengajuan</th>
                <th>Status</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
                <?php   $no=1; foreach($get_ormas as $row){ ?>
              <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $row->nama; ?></td>
                <td><?php echo $row->jenisijin; ?></td>
                <td><?php echo $row->tglajuan; ?></td>
                <?php if($row->verifikasi == '0'){;?>
                <td>
                  <span class="label label-primary">Belum Terverifikasi</span>
                </td>
                <?php }elseif ($row->verifikasi == '1') {?>
                <td>
                  <span class="label label-warning">Verifikasi Lapangan</span>
                </td>
                <?php }else{ ?>
              <td>
                <span class="label label-success">Sukses Penerbitan ORMAS/LSM</span>
              </td>
                <?php } ?>
                <td>
                  <a class="btn btn-info btn-xs" href="<?php echo site_url('adminormas/lihatdata/'.$row->kd_ijin1);?>"><i class="fa fa-eye"></i> view</a>

                </td>
              </tr>
              <?php  } ?>

            </tbody>
          </table>





            </div>


            </div> <!-- /.portlet-content -->

          </div> <!-- /.portlet -->

        </div> <!-- /.col -->


      </div> <!-- /.row -->

    </div> <!-- /.content-container -->

  </div> <!-- /.content -->

</div> <!-- /.container -->
