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
    <?php echo $this->session->flashdata('pesan');?>
    <div class="col-xs-12">

            <div class="col-md-4 col-md-offset-0">

                        <a href="<?php echo site_url('adminsurvey');?>" class="btn btn-success btn-md">kembali</a>

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
              <?php
                  $no=1; foreach ($get_spp as $row) {  ?>
              <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $row->nama; ?></td>
                <td><?php echo $row->jenisijin; ?></td>
                <td><?php echo $row->tglajuan; ?></td>
               <?php if($row->verifikasi == '0'){;?>
                <td>
                  <span class="label label-primary">Belum Terverifikasi</span>
                </td>
                <?php }else{?>
                <td>
                  <span class="label label-success">Terverifikasi</span>
                </td>
                <?php } ?>
                <td>
                  <a class="btn btn-info btn-xs" href="<?php echo site_url('adminsurvey/lihatdata/'.$row->kd_ijin);?>"><i class="fa fa-eye"></i> view</a>
                  <?php if($row->verifikasi >= '1'){;?>
                  <a class="btn btn-success btn-xs" href="<?php echo site_url('adminsurvey/lihat_sktsurvey/'.$row->kd_ijin)?>" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Cetak Data Penjualan">
                    <i class="fa fa-print"></i> Cetak
                  </a>
                    <?php }else{ ?>
                      <a class="btn btn-success btn-xs" disabled="disabled">
                        <i class="fa fa-print"></i> Cetak
                      </a>
                    <?php  } ?>
                    <a class="btn btn-danger btn-xs" href="<?php echo site_url('adminsurvey/hapus_data/'.$row->kd_ijin);?>"
                                                      onclick="return confirm('Anda yakin?')"> <i class="fa fa-trash"></i> Hapus</a>
                </td>


              <?php
            }
            ?>

            </tbody>
          </table>





            </div>


            </div> <!-- /.portlet-content -->

          </div> <!-- /.portlet -->

        </div> <!-- /.col -->


      </div> <!-- /.row -->

    </div> <!-- /.content-container -->
