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

             <?php if(isset($dt_survey)){ foreach($dt_survey as $row){ ?>

              <form action="<?= site_url('adminsurvey/edit_data');?>" method="post" class="form-horizontal">
             <div class="col-md-12">


                   <input type="hidden" value="<?php echo $row->kd_ijin;?>" name="kd_ijin">
                    <div class="form-group">
                      <label class="col-sm-2"><strong style="font-weight:800">No. Resi</strong></label>
                      <div class="col-sm-6">
                         <input type="text" class="form-control" value="<?php echo $row->kd_ijin; ?>" readonly>

                      </div>
                    </div>
                    <br/>
                     <div class="form-group">
                      <label class="col-sm-2"><strong style="font-weight:800">Tanggal Pengajuan</strong></label>
                      <div class="col-sm-6">
                          <input type="text" class="form-control" value="<?php echo $row->tglajuan; ?>" readonly>

                      </div>
                    </div>

                   <br/>
                   <div class="form-group">
                    <label class="col-sm-2"><strong style="font-weight:800">Jenis Izin</strong></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" value="<?php echo $row->jenisijin; ?>" readonly>

                    </div>
                  </div>

                 <br/>

                   <div class="form-group">
                      <label class="col-sm-2"><strong style="font-weight:800">Nama Lengkap</strong></label>
                      <div class="col-sm-6">
                         <input type="text" class="form-control" value="<?php echo $row->nama; ?>" readonly>

                      </div>
                    </div>
                  <br/>
                  <div class="form-group">
                      <label class="col-sm-2"><strong style="font-weight:800">Universitas</strong></label>
                      <div class="col-sm-6">
                          <input type="text" class="form-control" value="<?php echo $row->kampus;?>" readonly>

                      </div>
                   </div>

                   <div class="form-group">
                      <label class="col-sm-2"><strong style="font-weight:800">Organisasi</strong></label>
                      <div class="col-sm-6">
                          <input type="text" class="form-control" value="<?php echo $row->organisasi;?>" readonly>

                      </div>
                   </div>

              <br/>
                 <div class="form-group">
                      <label class="col-sm-2"><strong style="font-weight:800">Judul</strong></label>
                      <div class="col-sm-6">

                         <input type="text" class="form-control" value="<?php echo $row->judul; ?>" readonly>
                      </div>
                  </div>
              <br/>
                    <div class="form-group">
                      <label class="col-sm-2"><strong style="font-weight:800">Lokasi 1</strong></label>
                      <div class="col-sm-6">
                            <input type="text" class="form-control" value="<?php echo $row->lokasi1; ?>" readonly>
                      </div>
                  </div>
                   <br/>

                     <div class="form-group">
                      <label class="col-sm-2"><strong style="font-weight:800">Lokasi 2</strong></label>
                      <div class="col-sm-6">
                            <input type="text" class="form-control" value="<?php echo $row->lokasi2; ?>" readonly>
                      </div>
                  </div>
                   <br/>

                     <div class="form-group">
                      <label class="col-sm-2"><strong style="font-weight:800">Lokasi 3</strong></label>
                      <div class="col-sm-6">
                            <input type="text" class="form-control" value="<?php echo $row->lokasi3; ?>" readonly>
                      </div>
                  </div>
                   <br/>

                     <div class="form-group">
                      <label class="col-sm-2"><strong style="font-weight:800">Lokasi 4</strong></label>
                      <div class="col-sm-6">
                            <input type="text" class="form-control" value="<?php echo $row->lokasi4; ?>" readonly>
                      </div>
                  </div>
                   <br/>
                     <div class="form-group">
                      <label class="col-sm-2"><strong style="font-weight:800">Lokasi 5</strong></label>
                      <div class="col-sm-6">
                            <input type="text" class="form-control" value="<?php echo $row->lokasi5; ?>" readonly>
                      </div>
                  </div>
                   <br/>

                   <div class="form-group">
                    <label class="col-sm-2"><strong style="font-weight:800">Lokasi 6</strong></label>
                    <div class="col-sm-6">
                          <input type="text" class="form-control" value="<?php echo $row->lokasi6; ?>" readonly>
                    </div>
                </div>
                 <br/>

                 <div class="form-group">
                  <label class="col-sm-2"><strong style="font-weight:800">Lokasi 7</strong></label>
                  <div class="col-sm-6">
                        <input type="text" class="form-control" value="<?php echo $row->lokasi7; ?>" readonly>
                  </div>
              </div>
               <br/>

               <div class="form-group">
                <label class="col-sm-2"><strong style="font-weight:800">Lokasi 8</strong></label>
                <div class="col-sm-6">
                      <input type="text" class="form-control" value="<?php echo $row->lokasi8; ?>" readonly>
                </div>
            </div>
             <br/>

             <div class="form-group">
              <label class="col-sm-2"><strong style="font-weight:800">Lokasi 9</strong></label>
              <div class="col-sm-6">
                    <input type="text" class="form-control" value="<?php echo $row->lokasi9; ?>" readonly>
              </div>
          </div>
           <br/>

           <div class="form-group">
            <label class="col-sm-2"><strong style="font-weight:800">Lokasi 10</strong></label>
            <div class="col-sm-6">
                  <input type="text" class="form-control" value="<?php echo $row->lokasi10; ?>" readonly>
            </div>
        </div>
         <br/>


                   <div class="form-group">
                         <label class="col-sm-2"><strong style="font-weight:800">Alamat</strong></label>
                         <div class="col-sm-6">
                              <textarea class="form-control" readonly><?php echo $row->alamat; ?></textarea>

                         </div>
                    </div>

                      <br/>

                   <div class="form-group">
                         <label class="col-sm-2"><strong style="font-weight:800">KTP</strong></label>
                         <div class="col-sm-8">
                            <img src="<?php echo base_url();?>/uploads/gambar/<?php echo $row->ktp; ?>" width="150px"/>

                         </div>
                    </div>

                      <br/>

                  <div class="form-group">
                         <label class="col-sm-2" ><strong style="font-weight:800">Foto</strong></label>
                         <div class="col-sm-8">
                            <img src="<?php echo base_url();?>/uploads/gambar/<?php echo $row->foto; ?>" width="100px"/>

                         </div>
                    </div>

                      <br/>


                     <div class="form-group">
                         <label class="col-sm-2" ><strong style="font-weight:800">Proposal</strong></label>
                         <div class="col-sm-8">
                            <a href="<?php echo base_url();?>/uploads/berkas/<?php echo $row->proposal; ?>" target="_blank">
                            <span class="badge badge-secondary">Cek Proposal</span></a>

                         </div>
                    </div>


                    <br/>


                      <br/>

                      <div class="form-group">
                          <label class="col-sm-2" ><strong style="font-weight:800">Surat Keterangan Dari Kampus/lembaga</strong></label>
                          <div class="col-sm-8">
                             <a href="<?php echo base_url();?>/uploads/berkas/<?php echo $row->skkampus; ?>" target="_blank">
                             <span class="badge badge-secondary">Cek Surat Keterangan</span></a>

                          </div>
                     </div>

                     <div class="form-group">
                         <label class="col-sm-2" ><strong style="font-weight:800">Surat Keterangan</strong></label>
                         <div class="col-sm-8">
                            <a href="<?php echo base_url();?>/uploads/berkas/<?php echo $row->sk; ?>" target="_blank">
                            <span class="badge badge-secondary">Cek Surat Keterangan</span></a>

                         </div>
                    </div>

               <div class="form-group">
                   <label class="col-sm-2"><strong style="font-weight:800">Status Berkas</strong></label>

                  <div class="col-sm-8">
				  <?php if(($row->verifikasi) == '1') { ?>
					<a href=""><span class="badge badge-secondary">Status Terverifikasi</span></a>
					<input type="hidden" name="verifikasi" value="1">
				  <?php }else{?>
                <label class="radio-inline"><input name="verifikasi" type="radio" value="0" required> Belum Memenuhi Syarat</label>
                <label class="radio-inline"> <input name="verifikasi" type="radio" value="1" required> Syarat Terpenuhi  </label>

          <?php } ?>
                 </div>
               </div>

               <div class="form-group">
                 <label class="col-sm-2"><strong style="font-weight:800">Masa Berlaku Surat</strong></label>

			   <div class="row">
                 <div class="col-sm-3">
                   <div class="input-group input-append date">
                   <input class="form-control" name="tglawal" value="<?php echo $row->tglawal;?>" type="text" id="datepicker1" required="">
                   <span class="input-group-addon add-on"><span class="fa fa-calendar"></span></span>
                   </div>
                 </div>
                 <label class="col-xs-1" style="margin-top:8px;margin-right:-50px"><strong style="font-weight:800;">s/d</strong></label>
                 <div class="col-sm-3">
                    <div class="input-group input-append date">
                     <input class="form-control" name="tglakhir" value="<?php echo $row->tglakhir;?>" type="text" id="datepicker2" required="">
                     <span class="input-group-addon add-on"><span class="fa fa-calendar"></span></span>
                    </div>
                  </div>
               </div>

             </div>

               <div class="form-group">
                 <label class="col-sm-2" ><strong style="font-weight:800">Otorisasi</strong></label>
                 <div class="col-sm-4">
                      <select class="form-control" name="kd_otorisasi">

                        <?php
                            foreach ($data_otorisasi as $k){ ?>
                                     <option value="<?php echo $k->kd_otorisasi;?>"><?php echo $k->namaka;?></option>
                            <?php
                            }
                        ?>

                      </select>
                    </div>
                  </div>



               <br/>
               <hr/>

              <a href="<?php echo site_url('adminsurvey');?>" class="btn btn-primary btn-md">kembali</a>

              <?php if(($row->verifikasi) == '1' ) { ?>
              <button type="submit" class="btn btn-secondary btn-md">Verifikasi</button>
      			  <a class="btn btn-success btn-md" href="<?php echo site_url('adminsurvey/lihat_sktsurvey/'.$row->kd_ijin);?>" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Cetak Data Penjualan">
                    <i class="fa fa-print"></i> Cetak
              </a>

              <?php }else{?>
              <button type="submit" class="btn btn-secondary btn-md">Verifikasi</button>
              <a href="#modalEditBarang<?php echo $row->kd_ijin?>" class="btn btn-warning" data-toggle="modal">
                   <i class="fa fa-comment"></i> Pesan
                </a>
              <?php } ?>
             </div>

             </form>


             <?php }
             }
             ?>


            </div> <!-- /.portlet-content -->

          </div> <!-- /.portlet -->

        </div> <!-- /.col -->


      </div> <!-- /.row -->

    </div> <!-- /.content-container -->



<!-- ============ MODAL PESAN =============== -->
<!-- ============ MODAL EDIT DATA KELUARGA =============== -->
<?php
if (isset($semuaijin)){
    foreach($semuaijin as $row){
        ?>
        <div id="modalEditBarang<?php echo $row->kd_ijin?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header" style="border-radius:0%;color: #fff;background-color: #cf2522;border:1px solid #cf2522">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
              <h3 style="text-align:center">Kirim Pesan</h3>
           </div>
           <form method="post" action="<?php echo site_url('adminsurvey/gagalverifikasi')?>" enctype="multipart/form-data">
      <div class="modal-body">

              <input class="form-control" type="hidden" name="kd_gagal" value="<?php echo $kd_gagal; ?>" readonly="">
                <input class="form-control" type="hidden" name="kd_user" value="<?php echo $row->kd_user; ?>" readonly="">
              <input class="form-control" type="hidden" name="kd_ijin" value="<?php echo $row->kd_ijin;?>" readonly="">
              <input type="hidden" name="status" value="unread"/>
              <input type="text"class="form-control" name="tglkirim" value="<?php date_default_timezone_set("Asia/Jakarta"); echo date('d/m/Y');?>" readonly=""/>
                <br />
                <div class="control-group">
                  <label class="control-label">Isi Pesan</label>
                  <div class="controls">
                   <textarea name="isigagal" rows="4" cols="100"></textarea>
                  </div>
                </div>


              </div>

         <div class="modal-footer">
                  <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                  <button type="submit" class="btn btn-primary">Kirim</button>
          </div>

      </div>
  </form>

        </div>
        </div>
    <?php }
}
?>

<!-- END PESAN -->
