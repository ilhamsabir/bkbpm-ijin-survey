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

   	<!-- PAGE CONTENT BEGINS -->

    <div class="col-md-12">

           <a href="#modalAddBerita" class="btn btn-success" data-toggle="modal">
                <i class="fa fa-plus-square"></i> Tambah Data
             </a>
 <br/>
  <br/>

          <table class="table table-bordered table-hover table-highlight">
          <thead>
                          <tr>
                            <th>No</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Status</th>
                            <th>Pic TTD</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php   $no = 1;
                                  foreach($data_otorisasi as $row){ ?>
                         <tr>
                            <td style="font-size: 12px;"><?php echo $no++; ?></td>
                            <td style="font-size: 12px;width:80px"><?php echo $row->nip; ?></td>
                            <td style="font-size: 12px;"><?php echo $row->namaka; ?></td>
                            <td style="font-size: 12px;width:180px"><?php echo $row->jabatan; ?></td>
                            <td style="font-size: 12px;width:180px"><?php echo $row->status; ?></td>

                            <td style="width:120px">

                                <a class="btn btn-danger btn-xs" href="<?php echo site_url('adminotorisasi/hapus_data/'.$row->kd_otorisasi);?>"
                                    onclick="return confirm('Anda yakin?')"> <i class="entypo-trash"></i> Hapus</a>
                            </td>
                        </tr>
                     <?php  }  ?>
                    </tbody>
                    </table>





            </div>


          



      </div> <!-- /.row -->

    </div> <!-- /.content-container -->

  </div> <!-- /.content -->

</div> <!-- /.container -->

<!-- ============ MODAL ADD Penduduk =============== -->
<div id="modalAddBerita" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 <div class="modal-dialog modal-lg" >
   <div class="modal-content">
    <div class="modal-header" style="border-radius:0%;color: #fff;background-color: #cf2522;border:1px solid #cf2522">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
        <h3 style="text-align:center">Input Data </h3>

    </div>
    <form method="post" action="<?php echo site_url('adminotorisasi/add')?>" enctype="multipart/form-data">
        <div class="modal-body">

                  <div class="control-group">

                    <div class="controls">
                      <input class="form-control" type="hidden" name="kd_otorisasi" value="<?php echo $kd_otorisasi; ?>" readonly="">
                    </div>
                  </div>

                  <br />
                  <div class="control-group">
                    <label class="control-label">NIP</label>
                    <div class="controls">
                       <input class="form-control" type="text" name="nip" required="">
                    </div>
                  </div>
                  <br />
                  <div class="control-group">
                    <label class="control-label">Nama</label>
                    <div class="controls">
                       <input class="form-control" type="text" name="namaka" required="">
                    </div>
                  </div>
                   <br />

                   <div class="control-group">
                     <label class="control-label">Jabatan</label>
                     <div class="controls">
                       <select class="form-control" name="jabatan">
                         <option value="">-- Pilih Jabatan --</option>
                         <option value="Kepala Badan">Kepala Badan</option>
                         <option value="Sekretaris">Sekretaris</option>
                         <option value="Ka. Bidang Bina Ideologi Dan Wawasan Kebangsaan">Ka. Bidang Bina Ideologi Dan Wawasan Kebangsaan</option>
                       </select>
                     </div>
                   </div>
                    <br />

                  <div class="control-group">
                    <label class="control-label">Status</label>
                    <div class="controls">
                    <select class="form-control" name="status">
                        <option value="Pembina Tk. I">Pembina Tk. I</option>
                        <option value="Pembina Tk. II">Pembina Tk. II</option>
                        <option value="Pembina Tk. III">Pembina Tk. III</option>
                    </select>

                    </div>
                  </div>

                  <br />






                </div>

           <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
            </div>

        </div>
    </form>

</div>
</div>
