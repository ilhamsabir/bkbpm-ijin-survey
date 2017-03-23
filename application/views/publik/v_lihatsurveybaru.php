<?php
  $atribut_popup = array(
            'width' => '900',
            'height' => '550',
            'scrollbars' => 'yes',
             'status' => 'no',
            'resizable' => 'no',
            'screenx' => '100',
            'screeny' => '30',

      //'class'=>'btn btn-warning'

        );
?>
<div class="main-content">
  <div class="main-content-inner">
    <div class="page-content">
      <div class="page-header">
        <h1>
          BKBPM Ijin
          <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            Pembaharuan Layanan Ijin Survey / PKL / Penelitian
          </small>
        </h1>
      </div><!-- /.page-header -->

<div class="row">
    <?php echo $this->session->flashdata('pesan');?>
    <div class="col-xs-12">
         <?php if(isset($dt_survey)){ foreach($dt_survey as $row){ ?>
           <form action="<?= site_url('publikpermohonansppbaru/edit');?>" method="post" class="form-horizontal">
            <div class="col-md-6">
              <input type="hidden" class="form-control" name="kd_user" value="<?php echo $this->session->userdata('ID');?>" readonly/>
              <input type="hidden" class="form-control" name="verifikasi" value="0" readonly/>
              <input type="hidden" class="form-control" name="notif" value="unread" readonly/>
              <input type="hidden" class="form-control" name="tglajuan" value="<?php date_default_timezone_set("Asia/Jakarta"); echo date(" d/m/Y ");?>" readonly/>
               <div class="form-group">
                 <label class="col-sm-4 control-label"><strong style="font-weight:800">No. Resi</strong></label>
                 <div class="col-sm-8">
                    <input type="text" class="form-control" value="<?php echo $row->kd_ijin; ?>" readonly>
                 </div>
               </div>

               <div class="form-group">
                 <label class="col-sm-4 control-label"><strong style="font-weight:800">Jenis Ijin</strong></label>
                 <div class="col-sm-8">
                    <select class="form-control" name="jenisijin">
                      <option value="<?php echo $row->jenisijin;?>"><?php echo $row->jenisijin;?></option>
                      <option value="survey">Survey</option>
                      <option value="penelitian">Penelitian</option>
                      <option value="pkl">Praktek Kerja Lapangan</option>
                    </select>
                 </div>
               </div>


           <?php foreach ($user_data as $key){?>

           <div class="form-group">
            <label class="col-md-4 control-label">No KTP</label>
             <div class="col-md-8">
                <input type="text" class="form-control" value="<?php echo $key->noktp;?>" readonly />
             </div>
            </div>

          <div class="form-group">
           <label class="col-md-4 control-label">Nama Lengkap</label>
            <div class="col-md-8">
               <input type="text" class="form-control" value="<?php echo $key->nama;?>" readonly />
            </div>
           </div>
           <div class="form-group">
             <label class="col-lg-4 control-label">Email</label>
             <div class="col-lg-8">
               <input type="text" class="form-control" value="<?php echo $key->email;?>" readonly/>
             </div>
           </div>
            <div class="form-group">
             <label class="col-lg-4 control-label">No Hp</label>
             <div class="col-lg-8">
               <input type="text" class="form-control" value="<?php echo $key->nohp;?>" readonly/>
             </div>
           </div>

           <?php } ?>
         <hr/>
          <div class="form-group">
           <label class="col-md-6 control-label">Universitas</label>
            <div class="col-md-6">
               <input type="text" class="form-control" name="kampus" value="<?php echo $row->kampus;?>" required="required"/>
            </div>
           </div>
          <div class="form-group">
           <label class="col-md-6 control-label">No Surat Keterangan Dari Universitas </label>
            <div class="col-md-6">
               <input type="text" class="form-control" name="nosuratkampus" value="<?php echo $row->nosuratkampus;?>" required="required"/>
            </div>
           </div>

             <div class="form-group">
                 <label class="col-md-6 control-label">Tanggal Surat Keterangan Dari Universitas</label>
              <div class="col-sm-6">
                 <div id="dp-ex-3" class="input-group date" data-auto-close="true" data-date="12/02/2016" data-date-format="dd/mm/yyyy" data-date-autoclose="true">
                     <input class="form-control" type="text" name="tglsuratkampus" value="<?php echo $row->tglsuratkampus;?>" readonly="">
                     <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                 </div>
             </div> <!-- /.col -->
            </div>


            <div class="form-group">
               <label class="col-md-6 control-label">Organisasi Kemahasiswaan</label>
                <div class="col-md-6">
                   <input type="text" class="form-control" name="organisasi" required="required" value="<?php echo $row->organisasi;?>"/>
                </div>
               </div>

               <div class="form-group">
                 <label class="col-lg-6 control-label">Judul Skripsi/Penelitian/Survey</label>
                 <div class="col-lg-6">
                   <textarea class="form-control" type="text" name="judul" rows="2" required="required"><?php echo $row->judul;?></textarea>

                 </div>
               </div>

               <div class="form-group">
                <label class="col-md-6 control-label">Status Izin </label>
                 <div class="col-md-6">
                   <div class="radio">
                       <label>
                           <input type="radio" class="control-label" name="statusijin" value="baru" required="required"/>
                           <strong>Izin Baru</strong>
                       </label>
                       <br/>
                       <br/>
                       <label>
                           <input type="radio" class="control-label" name="statusijin" value="perpanjangan" required="required"/>
                           <strong>Perpanjangan Izin</strong>
                       </label>
                   </div>
                 </div>
                </div>


                <div class="form-group">
                  <div class="col-md-6 control-label">
                    <a class="btn btn-info" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                      <i class="fa fa-group"></i> Tambah Anggota
                    </a>
                  </div>
                  <div class="col-md-6">
                    <div class="collapse" id="collapseExample">
                       <div class="well">
                         <!-- 1 -->
                         <div class="form-group">
                          <label class="control-label">Nama Anggota 1 </label>
                           <input type="text" class="form-control" name="anggota1" value="<?php echo $row->anggota1;?>">
                          </div>

                          <!-- 2 -->
                          <div class="form-group">
                           <label class="control-label">Nama Anggota 2 </label>
                            <input type="text" class="form-control" name="anggota2" value="<?php echo $row->anggota2;?>">
                           </div>

                           <!-- 3 -->
                           <div class="form-group">
                            <label class="control-label">Nama Anggota 3 </label>
                             <input type="text" class="form-control" name="anggota3" value="<?php echo $row->anggota3;?>">
                            </div>

                            <!-- 4 -->
                            <div class="form-group">
                             <label class="control-label">Nama Anggota 4 </label>
                              <input type="text" class="form-control" name="anggota4" value="<?php echo $row->anggota4;?>">
                             </div>

                             <!-- 5 -->
                             <div class="form-group">
                              <label class="control-label">Nama Anggota 5 </label>
                               <input type="text" class="form-control" name="anggota5" value="<?php echo $row->anggota5;?>">
                              </div>

                              <!-- 6 -->
                              <div class="form-group">
                               <label class="control-label">Nama Anggota 6 </label>
                                <input type="text" class="form-control" name="anggota6" value="<?php echo $row->anggota6;?>">
                               </div>

                               <!-- 7 -->
                               <div class="form-group">
                                <label class="control-label">Nama Anggota 7 </label>
                                 <input type="text" class="form-control" name="anggota7" value="<?php echo $row->anggota7;?>">
                                </div>

                                <!-- 8 -->
                                <div class="form-group">
                                 <label class="control-label">Nama Anggota 8 </label>
                                  <input type="text" class="form-control" name="anggota8" value="<?php echo $row->anggota8;?>">
                                 </div>

                                 <!-- 9 -->
                                 <div class="form-group">
                                  <label class="control-label">Nama Anggota 9 </label>
                                   <input type="text" class="form-control" name="anggota9" value="<?php echo $row->anggota9;?>">
                                  </div>

                                  <!-- 10 -->
                                  <div class="form-group">
                                   <label class="control-label">Nama Anggota 10 </label>
                                    <input type="text" class="form-control" name="anggota10" value="<?php echo $row->anggota10;?>">
                                   </div>



                       </div>
                     </div>
                  </div>
                 </div>
          </div><!-- col md  6 -->

          <div class="col-md-6"><!--Liri -->
          <label class="col-md-6 control-label">Tujuan / Lokasi / Dinas</label>
          <hr/>
          <!-- Lokasi 1 -->
          <div class="form-group">
               <label class="col-md-4 control-label">Lokasi 1</label>
                <div class="col-md-8">
                  <select class="form-control required" name="lokasi1">
                    <option value="<?php echo $row->lokasi1;?>"><?php echo $row->lokasi1;?></option>
                    <option value="Satpol PP Kota Bandung">Satpol PP Kota Bandung</option>
                    <optgroup label="Lembaga Teknis Daerah">
                    <option value="Badan Perencanaan Pembangunan Daerah">Badan Perencanaan Pembangunan Daerah</option>
                    <option value="Badan Kepegawaian Daerah">Badan Kepegawaian Daerah</option>
                    <option value="Badan Kesatuan Bangsa Dan Pemberdayaan Masyarakat">Badan Kesatuan Bangsa Dan Pemberdayaan Masyarakat</option>
                    <option value="Badan Pengelolaan Lingkungan Hidup">Badan Pengelolaan Lingkungan Hidup</option>
                    <option value="Badan Pemberdayaan Perempuan Dan KB">Badan Pemberdayaan Perempuan Dan KB</option>
                    <option value="Badan Pelayanan Dan Perijinan Terpadu">Badan Pelayanan Dan Perijinan Terpadu</option>
                    <option value="Kantor Perpustakaan Dan Arsip Daerah">Kantor Perpustakaan Dan Arsip Daerah</option>
                    <option value="Rumah Sakit Umum Daerah Kota Bandung">Rumah Sakit Umum Daerah Kota Bandung</option>
                    <option value="Rumah Sakit Khusus Ibu Dan Anak">Rumah Sakit Khusus Ibu Dan Anak</option>
                    <option value="Rumah Sakit Khusus Gigi Dan Mulut">Rumah Sakit Khusus Gigi Dan Mulut</option>
                  </optgroup>
                  <optgroup label="Dinas Daerah">
                    <option value="Dinas Pendidikan">Dinas Pendidikan</option>
                    <option value="Dinas Kesehatan">Dinas Kesehatan</option>
                    <option value="Dinas Sosial">Dinas Sosial</option>
                    <option value="Dinas Tenaga Kerja">Dinas Tenaga Kerja</option>
                    <option value="Dinas Perhubungan">Dinas Perhubungan</option>
                    <option value="Dinas Kependudukan Dan Pencatatan Sipil">Dinas Kependudukan Dan Pencatatan Sipil</option>
                    <option value="Dinas Kebudayaan Dan Pariwisata">Dinas Kebudayaan Dan Pariwisata</option>
                    <option value="Dinas Tata Ruang Dan Cipta Karya">Dinas Tata Ruang Dan Cipta Karya</option>
                    <option value="Dinas Bina Marga Dan Pengairan">Dinas Bina Marga Dan Pengairan</option>
                    <option value="Dinas Pemakaman Dan Pertamanan">Dinas Pemakaman Dan Pertamanan</option>
                    <option value="Dinas Pencegahan Dan Penanggulangan Kebakaran">Dinas Pencegahan Dan Penanggulangan Kebakaran</option>
                    <option value="Dinas Koperasi UKM Dan Perindustrian Perdagangan">Dinas Koperasi UKM Dan Perindustrian Perdagangan</option>
                    <option value="Dinas Pertanian Dan Ketahangan Pangan">Dinas Pertanian Dan Ketahangan Pangan</option>
                    <option value="Dinas Pelayanan Pajak">Dinas Pelayanan Pajak</option>
                    <option value="Dinas Komunikasi Dan Informatika">Dinas Komunikasi Dan Informatika</option>
                    <option value="Dinas Pengelolaan Keuangan Dan Aset Daerah">Dinas Pengelolaan Keuangan Dan Aset Daerah</option>
                    <option value="Dinas Pemuda Dan Olahraga">Dinas Pemuda Dan Olahraga</option>
                 </optgroup>
                 <optgroup label="Sekretariat Daerah">
                   <option value="Asisten Pemerintahan">Asisten Pemerintahan</option>
                   <option value="Asisten ADM Perekonomian Dan Pembangunan">Asisten ADM Perekonomian Dan Pembangunan</option>
                   <option value="Asisten Administrasi Umum">Asisten Administrasi Umum</option>
                   <option value="Sekretariat DPRD">Sekretariat DPRD</option>
                 </optgroup>

               </select>

                </div>
           </div>

           <!-- Lokasi 2 -->
           <div class="form-group">
                <label class="col-md-4 control-label">Lokasi 2</label>
                 <div class="col-md-8">
                   <select class="form-control required" name="lokasi2">
                   <option value="<?php echo $row->lokasi2;?>"><?php echo $row->lokasi2;?></option>
                    <option value="Satpol PP Kota Bandung">Satpol PP Kota Bandung</option>
                    <optgroup label="Lembaga Teknis Daerah">
                     <option value="Badan Perencanaan Pembangunan Daerah">Badan Perencanaan Pembangunan Daerah</option>
                     <option value="Badan Kepegawaian Daerah">Badan Kepegawaian Daerah</option>
                     <option value="Badan Kesatuan Bangsa Dan Pemberdayaan Masyarakat">Badan Kesatuan Bangsa Dan Pemberdayaan Masyarakat</option>
                     <option value="Badan Pengelolaan Lingkungan Hidup">Badan Pengelolaan Lingkungan Hidup</option>
                     <option value="Badan Pemberdayaan Perempuan Dan KB">Badan Pemberdayaan Perempuan Dan KB</option>
                     <option value="Badan Pelayanan Dan Perijinan Terpadu">Badan Pelayanan Dan Perijinan Terpadu</option>
                     <option value="Kantor Perpustakaan Dan Arsip Daerah">Kantor Perpustakaan Dan Arsip Daerah</option>
                     <option value="Rumah Sakit Umum Daerah Kota Bandung">Rumah Sakit Umum Daerah Kota Bandung</option>
                     <option value="Rumah Sakit Khusus Ibu Dan Anak">Rumah Sakit Khusus Ibu Dan Anak</option>
                     <option value="Rumah Sakit Khusus Gigi Dan Mulut">Rumah Sakit Khusus Gigi Dan Mulut</option>
                   </optgroup>
                   <optgroup label="Dinas Daerah">
                     <option value="Dinas Pendidikan">Dinas Pendidikan</option>
                     <option value="Dinas Kesehatan">Dinas Kesehatan</option>
                     <option value="Dinas Sosial">Dinas Sosial</option>
                     <option value="Dinas Tenaga Kerja">Dinas Tenaga Kerja</option>
                     <option value="Dinas Perhubungan">Dinas Perhubungan</option>
                     <option value="Dinas Kependudukan Dan Pencatatan Sipil">Dinas Kependudukan Dan Pencatatan Sipil</option>
                     <option value="Dinas Kebudayaan Dan Pariwisata">Dinas Kebudayaan Dan Pariwisata</option>
                     <option value="Dinas Tata Ruang Dan Cipta Karya">Dinas Tata Ruang Dan Cipta Karya</option>
                     <option value="Dinas Bina Marga Dan Pengairan">Dinas Bina Marga Dan Pengairan</option>
                     <option value="Dinas Pemakaman Dan Pertamanan">Dinas Pemakaman Dan Pertamanan</option>
                     <option value="Dinas Pencegahan Dan Penanggulangan Kebakaran">Dinas Pencegahan Dan Penanggulangan Kebakaran</option>
                     <option value="Dinas Koperasi UKM Dan Perindustrian Perdagangan">Dinas Koperasi UKM Dan Perindustrian Perdagangan</option>
                     <option value="Dinas Pertanian Dan Ketahangan Pangan">Dinas Pertanian Dan Ketahangan Pangan</option>
                     <option value="Dinas Pelayanan Pajak">Dinas Pelayanan Pajak</option>
                     <option value="Dinas Komunikasi Dan Informatika">Dinas Komunikasi Dan Informatika</option>
                     <option value="Dinas Pengelolaan Keuangan Dan Aset Daerah">Dinas Pengelolaan Keuangan Dan Aset Daerah</option>
                     <option value="Dinas Pemuda Dan Olahraga">Dinas Pemuda Dan Olahraga</option>
                  </optgroup>
                  <optgroup label="Sekretariat Daerah">
                    <option value="Asisten Pemerintahan">Asisten Pemerintahan</option>
                    <option value="Asisten ADM Perekonomian Dan Pembangunan">Asisten ADM Perekonomian Dan Pembangunan</option>
                    <option value="Asisten Administrasi Umum">Asisten Administrasi Umum</option>
                    <option value="Sekretariat DPRD">Sekretariat DPRD</option>
                  </optgroup>

                </select>

                 </div>
            </div>

            <!-- Lokasi 3 -->
            <div class="form-group">
                 <label class="col-md-4 control-label">Lokasi 3</label>
                  <div class="col-md-8">
                    <select class="form-control required" name="lokasi3">
                     <option value="<?php echo $row->lokasi3;?>"><?php echo $row->lokasi3;?></option>
                      <option value="Satpol PP Kota Bandung">Satpol PP Kota Bandung</option>
                     <optgroup label="Lembaga Teknis Daerah">
                      <option value="Badan Perencanaan Pembangunan Daerah">Badan Perencanaan Pembangunan Daerah</option>
                      <option value="Badan Kepegawaian Daerah">Badan Kepegawaian Daerah</option>
                      <option value="Badan Kesatuan Bangsa Dan Pemberdayaan Masyarakat">Badan Kesatuan Bangsa Dan Pemberdayaan Masyarakat</option>
                      <option value="Badan Pengelolaan Lingkungan Hidup">Badan Pengelolaan Lingkungan Hidup</option>
                      <option value="Badan Pemberdayaan Perempuan Dan KB">Badan Pemberdayaan Perempuan Dan KB</option>
                      <option value="Badan Pelayanan Dan Perijinan Terpadu">Badan Pelayanan Dan Perijinan Terpadu</option>
                      <option value="Kantor Perpustakaan Dan Arsip Daerah">Kantor Perpustakaan Dan Arsip Daerah</option>
                      <option value="Rumah Sakit Umum Daerah Kota Bandung">Rumah Sakit Umum Daerah Kota Bandung</option>
                      <option value="Rumah Sakit Khusus Ibu Dan Anak">Rumah Sakit Khusus Ibu Dan Anak</option>
                      <option value="Rumah Sakit Khusus Gigi Dan Mulut">Rumah Sakit Khusus Gigi Dan Mulut</option>
                    </optgroup>
                    <optgroup label="Dinas Daerah">
                      <option value="Dinas Pendidikan">Dinas Pendidikan</option>
                      <option value="Dinas Kesehatan">Dinas Kesehatan</option>
                      <option value="Dinas Sosial">Dinas Sosial</option>
                      <option value="Dinas Tenaga Kerja">Dinas Tenaga Kerja</option>
                      <option value="Dinas Perhubungan">Dinas Perhubungan</option>
                      <option value="Dinas Kependudukan Dan Pencatatan Sipil">Dinas Kependudukan Dan Pencatatan Sipil</option>
                      <option value="Dinas Kebudayaan Dan Pariwisata">Dinas Kebudayaan Dan Pariwisata</option>
                      <option value="Dinas Tata Ruang Dan Cipta Karya">Dinas Tata Ruang Dan Cipta Karya</option>
                      <option value="Dinas Bina Marga Dan Pengairan">Dinas Bina Marga Dan Pengairan</option>
                      <option value="Dinas Pemakaman Dan Pertamanan">Dinas Pemakaman Dan Pertamanan</option>
                      <option value="Dinas Pencegahan Dan Penanggulangan Kebakaran">Dinas Pencegahan Dan Penanggulangan Kebakaran</option>
                      <option value="Dinas Koperasi UKM Dan Perindustrian Perdagangan">Dinas Koperasi UKM Dan Perindustrian Perdagangan</option>
                      <option value="Dinas Pertanian Dan Ketahangan Pangan">Dinas Pertanian Dan Ketahangan Pangan</option>
                      <option value="Dinas Pelayanan Pajak">Dinas Pelayanan Pajak</option>
                      <option value="Dinas Komunikasi Dan Informatika">Dinas Komunikasi Dan Informatika</option>
                      <option value="Dinas Pengelolaan Keuangan Dan Aset Daerah">Dinas Pengelolaan Keuangan Dan Aset Daerah</option>
                      <option value="Dinas Pemuda Dan Olahraga">Dinas Pemuda Dan Olahraga</option>
                   </optgroup>
                   <optgroup label="Sekretariat Daerah">
                     <option value="Asisten Pemerintahan">Asisten Pemerintahan</option>
                     <option value="Asisten ADM Perekonomian Dan Pembangunan">Asisten ADM Perekonomian Dan Pembangunan</option>
                     <option value="Asisten Administrasi Umum">Asisten Administrasi Umum</option>
                     <option value="Sekretariat DPRD">Sekretariat DPRD</option>
                   </optgroup>

                 </select>

                  </div>
             </div>

             <!-- Lokasi 4 -->
             <div class="form-group">
                  <label class="col-md-4 control-label">Lokasi 4</label>
                   <div class="col-md-8">
                     <select class="form-control required" name="lokasi4">
                       <option value="<?php echo $row->lokasi4;?>"><?php echo $row->lokasi4;?></option>
                       <option value="Satpol PP Kota Bandung">Satpol PP Kota Bandung</option>
                      <optgroup label="Lembaga Teknis Daerah">
                       <option value="Badan Perencanaan Pembangunan Daerah">Badan Perencanaan Pembangunan Daerah</option>
                       <option value="Badan Kepegawaian Daerah">Badan Kepegawaian Daerah</option>
                       <option value="Badan Kesatuan Bangsa Dan Pemberdayaan Masyarakat">Badan Kesatuan Bangsa Dan Pemberdayaan Masyarakat</option>
                       <option value="Badan Pengelolaan Lingkungan Hidup">Badan Pengelolaan Lingkungan Hidup</option>
                       <option value="Badan Pemberdayaan Perempuan Dan KB">Badan Pemberdayaan Perempuan Dan KB</option>
                       <option value="Badan Pelayanan Dan Perijinan Terpadu">Badan Pelayanan Dan Perijinan Terpadu</option>
                       <option value="Kantor Perpustakaan Dan Arsip Daerah">Kantor Perpustakaan Dan Arsip Daerah</option>
                       <option value="Rumah Sakit Umum Daerah Kota Bandung">Rumah Sakit Umum Daerah Kota Bandung</option>
                       <option value="Rumah Sakit Khusus Ibu Dan Anak">Rumah Sakit Khusus Ibu Dan Anak</option>
                       <option value="Rumah Sakit Khusus Gigi Dan Mulut">Rumah Sakit Khusus Gigi Dan Mulut</option>
                     </optgroup>
                     <optgroup label="Dinas Daerah">
                       <option value="Dinas Pendidikan">Dinas Pendidikan</option>
                       <option value="Dinas Kesehatan">Dinas Kesehatan</option>
                       <option value="Dinas Sosial">Dinas Sosial</option>
                       <option value="Dinas Tenaga Kerja">Dinas Tenaga Kerja</option>
                       <option value="Dinas Perhubungan">Dinas Perhubungan</option>
                       <option value="Dinas Kependudukan Dan Pencatatan Sipil">Dinas Kependudukan Dan Pencatatan Sipil</option>
                       <option value="Dinas Kebudayaan Dan Pariwisata">Dinas Kebudayaan Dan Pariwisata</option>
                       <option value="Dinas Tata Ruang Dan Cipta Karya">Dinas Tata Ruang Dan Cipta Karya</option>
                       <option value="Dinas Bina Marga Dan Pengairan">Dinas Bina Marga Dan Pengairan</option>
                       <option value="Dinas Pemakaman Dan Pertamanan">Dinas Pemakaman Dan Pertamanan</option>
                       <option value="Dinas Pencegahan Dan Penanggulangan Kebakaran">Dinas Pencegahan Dan Penanggulangan Kebakaran</option>
                       <option value="Dinas Koperasi UKM Dan Perindustrian Perdagangan">Dinas Koperasi UKM Dan Perindustrian Perdagangan</option>
                       <option value="Dinas Pertanian Dan Ketahangan Pangan">Dinas Pertanian Dan Ketahangan Pangan</option>
                       <option value="Dinas Pelayanan Pajak">Dinas Pelayanan Pajak</option>
                       <option value="Dinas Komunikasi Dan Informatika">Dinas Komunikasi Dan Informatika</option>
                       <option value="Dinas Pengelolaan Keuangan Dan Aset Daerah">Dinas Pengelolaan Keuangan Dan Aset Daerah</option>
                       <option value="Dinas Pemuda Dan Olahraga">Dinas Pemuda Dan Olahraga</option>
                    </optgroup>
                    <optgroup label="Sekretariat Daerah">
                      <option value="Asisten Pemerintahan">Asisten Pemerintahan</option>
                      <option value="Asisten ADM Perekonomian Dan Pembangunan">Asisten ADM Perekonomian Dan Pembangunan</option>
                      <option value="Asisten Administrasi Umum">Asisten Administrasi Umum</option>
                      <option value="Sekretariat DPRD">Sekretariat DPRD</option>
                    </optgroup>

                  </select>

                   </div>
              </div>

              <!-- Lokasi 5 -->
              <div class="form-group">
                   <label class="col-md-4 control-label">Lokasi 5</label>
                    <div class="col-md-8">
                      <select class="form-control required" name="lokasi5">
                       <option value="<?php echo $row->lokasi5;?>"><?php echo $row->lokasi5;?></option>
                        <option value="Satpol PP Kota Bandung">Satpol PP Kota Bandung</option>
                       <optgroup label="Lembaga Teknis Daerah">
                        <option value="Badan Perencanaan Pembangunan Daerah">Badan Perencanaan Pembangunan Daerah</option>
                        <option value="Badan Kepegawaian Daerah">Badan Kepegawaian Daerah</option>
                        <option value="Badan Kesatuan Bangsa Dan Pemberdayaan Masyarakat">Badan Kesatuan Bangsa Dan Pemberdayaan Masyarakat</option>
                        <option value="Badan Pengelolaan Lingkungan Hidup">Badan Pengelolaan Lingkungan Hidup</option>
                        <option value="Badan Pemberdayaan Perempuan Dan KB">Badan Pemberdayaan Perempuan Dan KB</option>
                        <option value="Badan Pelayanan Dan Perijinan Terpadu">Badan Pelayanan Dan Perijinan Terpadu</option>
                        <option value="Kantor Perpustakaan Dan Arsip Daerah">Kantor Perpustakaan Dan Arsip Daerah</option>
                        <option value="Rumah Sakit Umum Daerah Kota Bandung">Rumah Sakit Umum Daerah Kota Bandung</option>
                        <option value="Rumah Sakit Khusus Ibu Dan Anak">Rumah Sakit Khusus Ibu Dan Anak</option>
                        <option value="Rumah Sakit Khusus Gigi Dan Mulut">Rumah Sakit Khusus Gigi Dan Mulut</option>
                      </optgroup>
                      <optgroup label="Dinas Daerah">
                        <option value="Dinas Pendidikan">Dinas Pendidikan</option>
                        <option value="Dinas Kesehatan">Dinas Kesehatan</option>
                        <option value="Dinas Sosial">Dinas Sosial</option>
                        <option value="Dinas Tenaga Kerja">Dinas Tenaga Kerja</option>
                        <option value="Dinas Perhubungan">Dinas Perhubungan</option>
                        <option value="Dinas Kependudukan Dan Pencatatan Sipil">Dinas Kependudukan Dan Pencatatan Sipil</option>
                        <option value="Dinas Kebudayaan Dan Pariwisata">Dinas Kebudayaan Dan Pariwisata</option>
                        <option value="Dinas Tata Ruang Dan Cipta Karya">Dinas Tata Ruang Dan Cipta Karya</option>
                        <option value="Dinas Bina Marga Dan Pengairan">Dinas Bina Marga Dan Pengairan</option>
                        <option value="Dinas Pemakaman Dan Pertamanan">Dinas Pemakaman Dan Pertamanan</option>
                        <option value="Dinas Pencegahan Dan Penanggulangan Kebakaran">Dinas Pencegahan Dan Penanggulangan Kebakaran</option>
                        <option value="Dinas Koperasi UKM Dan Perindustrian Perdagangan">Dinas Koperasi UKM Dan Perindustrian Perdagangan</option>
                        <option value="Dinas Pertanian Dan Ketahangan Pangan">Dinas Pertanian Dan Ketahangan Pangan</option>
                        <option value="Dinas Pelayanan Pajak">Dinas Pelayanan Pajak</option>
                        <option value="Dinas Komunikasi Dan Informatika">Dinas Komunikasi Dan Informatika</option>
                        <option value="Dinas Pengelolaan Keuangan Dan Aset Daerah">Dinas Pengelolaan Keuangan Dan Aset Daerah</option>
                        <option value="Dinas Pemuda Dan Olahraga">Dinas Pemuda Dan Olahraga</option>
                     </optgroup>
                     <optgroup label="Sekretariat Daerah">
                       <option value="Asisten Pemerintahan">Asisten Pemerintahan</option>
                       <option value="Asisten ADM Perekonomian Dan Pembangunan">Asisten ADM Perekonomian Dan Pembangunan</option>
                       <option value="Asisten Administrasi Umum">Asisten Administrasi Umum</option>
                       <option value="Sekretariat DPRD">Sekretariat DPRD</option>
                     </optgroup>

                   </select>

                    </div>
               </div>

               <!-- Lokasi 6 -->
               <div class="form-group">
                    <label class="col-md-4 control-label">Lokasi 6</label>
                     <div class="col-md-8">
                       <select class="form-control required" name="lokasi6">
                       <option value="<?php echo $row->lokasi6;?>"><?php echo $row->lokasi6;?></option>
                         <option value="Satpol PP Kota Bandung">Satpol PP Kota Bandung</option>
                        <optgroup label="Lembaga Teknis Daerah">
                         <option value="Badan Perencanaan Pembangunan Daerah">Badan Perencanaan Pembangunan Daerah</option>
                         <option value="Badan Kepegawaian Daerah">Badan Kepegawaian Daerah</option>
                         <option value="Badan Kesatuan Bangsa Dan Pemberdayaan Masyarakat">Badan Kesatuan Bangsa Dan Pemberdayaan Masyarakat</option>
                         <option value="Badan Pengelolaan Lingkungan Hidup">Badan Pengelolaan Lingkungan Hidup</option>
                         <option value="Badan Pemberdayaan Perempuan Dan KB">Badan Pemberdayaan Perempuan Dan KB</option>
                         <option value="Badan Pelayanan Dan Perijinan Terpadu">Badan Pelayanan Dan Perijinan Terpadu</option>
                         <option value="Kantor Perpustakaan Dan Arsip Daerah">Kantor Perpustakaan Dan Arsip Daerah</option>
                         <option value="Rumah Sakit Umum Daerah Kota Bandung">Rumah Sakit Umum Daerah Kota Bandung</option>
                         <option value="Rumah Sakit Khusus Ibu Dan Anak">Rumah Sakit Khusus Ibu Dan Anak</option>
                         <option value="Rumah Sakit Khusus Gigi Dan Mulut">Rumah Sakit Khusus Gigi Dan Mulut</option>
                       </optgroup>
                       <optgroup label="Dinas Daerah">
                         <option value="Dinas Pendidikan">Dinas Pendidikan</option>
                         <option value="Dinas Kesehatan">Dinas Kesehatan</option>
                         <option value="Dinas Sosial">Dinas Sosial</option>
                         <option value="Dinas Tenaga Kerja">Dinas Tenaga Kerja</option>
                         <option value="Dinas Perhubungan">Dinas Perhubungan</option>
                         <option value="Dinas Kependudukan Dan Pencatatan Sipil">Dinas Kependudukan Dan Pencatatan Sipil</option>
                         <option value="Dinas Kebudayaan Dan Pariwisata">Dinas Kebudayaan Dan Pariwisata</option>
                         <option value="Dinas Tata Ruang Dan Cipta Karya">Dinas Tata Ruang Dan Cipta Karya</option>
                         <option value="Dinas Bina Marga Dan Pengairan">Dinas Bina Marga Dan Pengairan</option>
                         <option value="Dinas Pemakaman Dan Pertamanan">Dinas Pemakaman Dan Pertamanan</option>
                         <option value="Dinas Pencegahan Dan Penanggulangan Kebakaran">Dinas Pencegahan Dan Penanggulangan Kebakaran</option>
                         <option value="Dinas Koperasi UKM Dan Perindustrian Perdagangan">Dinas Koperasi UKM Dan Perindustrian Perdagangan</option>
                         <option value="Dinas Pertanian Dan Ketahangan Pangan">Dinas Pertanian Dan Ketahangan Pangan</option>
                         <option value="Dinas Pelayanan Pajak">Dinas Pelayanan Pajak</option>
                         <option value="Dinas Komunikasi Dan Informatika">Dinas Komunikasi Dan Informatika</option>
                         <option value="Dinas Pengelolaan Keuangan Dan Aset Daerah">Dinas Pengelolaan Keuangan Dan Aset Daerah</option>
                         <option value="Dinas Pemuda Dan Olahraga">Dinas Pemuda Dan Olahraga</option>
                      </optgroup>
                      <optgroup label="Sekretariat Daerah">
                        <option value="Asisten Pemerintahan">Asisten Pemerintahan</option>
                        <option value="Asisten ADM Perekonomian Dan Pembangunan">Asisten ADM Perekonomian Dan Pembangunan</option>
                        <option value="Asisten Administrasi Umum">Asisten Administrasi Umum</option>
                        <option value="Sekretariat DPRD">Sekretariat DPRD</option>
                      </optgroup>

                    </select>

                     </div>
                </div>

                <!-- Lokasi 7 -->
                <div class="form-group">
                     <label class="col-md-4 control-label">Lokasi 7</label>
                      <div class="col-md-8">
                        <select class="form-control required" name="lokasi7">
                       <option value="<?php echo $row->lokasi7;?>"><?php echo $row->lokasi7;?></option>
                          <option value="Satpol PP Kota Bandung">Satpol PP Kota Bandung</option>
                         <optgroup label="Lembaga Teknis Daerah">
                          <option value="Badan Perencanaan Pembangunan Daerah">Badan Perencanaan Pembangunan Daerah</option>
                          <option value="Badan Kepegawaian Daerah">Badan Kepegawaian Daerah</option>
                          <option value="Badan Kesatuan Bangsa Dan Pemberdayaan Masyarakat">Badan Kesatuan Bangsa Dan Pemberdayaan Masyarakat</option>
                          <option value="Badan Pengelolaan Lingkungan Hidup">Badan Pengelolaan Lingkungan Hidup</option>
                          <option value="Badan Pemberdayaan Perempuan Dan KB">Badan Pemberdayaan Perempuan Dan KB</option>
                          <option value="Badan Pelayanan Dan Perijinan Terpadu">Badan Pelayanan Dan Perijinan Terpadu</option>
                          <option value="Kantor Perpustakaan Dan Arsip Daerah">Kantor Perpustakaan Dan Arsip Daerah</option>
                          <option value="Rumah Sakit Umum Daerah Kota Bandung">Rumah Sakit Umum Daerah Kota Bandung</option>
                          <option value="Rumah Sakit Khusus Ibu Dan Anak">Rumah Sakit Khusus Ibu Dan Anak</option>
                          <option value="Rumah Sakit Khusus Gigi Dan Mulut">Rumah Sakit Khusus Gigi Dan Mulut</option>
                        </optgroup>
                        <optgroup label="Dinas Daerah">
                          <option value="Dinas Pendidikan">Dinas Pendidikan</option>
                          <option value="Dinas Kesehatan">Dinas Kesehatan</option>
                          <option value="Dinas Sosial">Dinas Sosial</option>
                          <option value="Dinas Tenaga Kerja">Dinas Tenaga Kerja</option>
                          <option value="Dinas Perhubungan">Dinas Perhubungan</option>
                          <option value="Dinas Kependudukan Dan Pencatatan Sipil">Dinas Kependudukan Dan Pencatatan Sipil</option>
                          <option value="Dinas Kebudayaan Dan Pariwisata">Dinas Kebudayaan Dan Pariwisata</option>
                          <option value="Dinas Tata Ruang Dan Cipta Karya">Dinas Tata Ruang Dan Cipta Karya</option>
                          <option value="Dinas Bina Marga Dan Pengairan">Dinas Bina Marga Dan Pengairan</option>
                          <option value="Dinas Pemakaman Dan Pertamanan">Dinas Pemakaman Dan Pertamanan</option>
                          <option value="Dinas Pencegahan Dan Penanggulangan Kebakaran">Dinas Pencegahan Dan Penanggulangan Kebakaran</option>
                          <option value="Dinas Koperasi UKM Dan Perindustrian Perdagangan">Dinas Koperasi UKM Dan Perindustrian Perdagangan</option>
                          <option value="Dinas Pertanian Dan Ketahangan Pangan">Dinas Pertanian Dan Ketahangan Pangan</option>
                          <option value="Dinas Pelayanan Pajak">Dinas Pelayanan Pajak</option>
                          <option value="Dinas Komunikasi Dan Informatika">Dinas Komunikasi Dan Informatika</option>
                          <option value="Dinas Pengelolaan Keuangan Dan Aset Daerah">Dinas Pengelolaan Keuangan Dan Aset Daerah</option>
                          <option value="Dinas Pemuda Dan Olahraga">Dinas Pemuda Dan Olahraga</option>
                       </optgroup>
                       <optgroup label="Sekretariat Daerah">
                         <option value="Asisten Pemerintahan">Asisten Pemerintahan</option>
                         <option value="Asisten ADM Perekonomian Dan Pembangunan">Asisten ADM Perekonomian Dan Pembangunan</option>
                         <option value="Asisten Administrasi Umum">Asisten Administrasi Umum</option>
                         <option value="Sekretariat DPRD">Sekretariat DPRD</option>
                       </optgroup>

                     </select>

                      </div>
                 </div>

                 <!-- Lokasi 8 -->
                 <div class="form-group">
                      <label class="col-md-4 control-label">Lokasi 8</label>
                       <div class="col-md-8">
                         <select class="form-control required" name="lokasi8">
                           <option value="<?php echo $row->lokasi8;?>"><?php echo $row->lokasi8;?></option>
                           <option value="Satpol PP Kota Bandung">Satpol PP Kota Bandung</option>
                          <optgroup label="Lembaga Teknis Daerah">
                           <option value="Badan Perencanaan Pembangunan Daerah">Badan Perencanaan Pembangunan Daerah</option>
                           <option value="Badan Kepegawaian Daerah">Badan Kepegawaian Daerah</option>
                           <option value="Badan Kesatuan Bangsa Dan Pemberdayaan Masyarakat">Badan Kesatuan Bangsa Dan Pemberdayaan Masyarakat</option>
                           <option value="Badan Pengelolaan Lingkungan Hidup">Badan Pengelolaan Lingkungan Hidup</option>
                           <option value="Badan Pemberdayaan Perempuan Dan KB">Badan Pemberdayaan Perempuan Dan KB</option>
                           <option value="Badan Pelayanan Dan Perijinan Terpadu">Badan Pelayanan Dan Perijinan Terpadu</option>
                           <option value="Kantor Perpustakaan Dan Arsip Daerah">Kantor Perpustakaan Dan Arsip Daerah</option>
                           <option value="Rumah Sakit Umum Daerah Kota Bandung">Rumah Sakit Umum Daerah Kota Bandung</option>
                           <option value="Rumah Sakit Khusus Ibu Dan Anak">Rumah Sakit Khusus Ibu Dan Anak</option>
                           <option value="Rumah Sakit Khusus Gigi Dan Mulut">Rumah Sakit Khusus Gigi Dan Mulut</option>
                         </optgroup>
                         <optgroup label="Dinas Daerah">
                           <option value="Dinas Pendidikan">Dinas Pendidikan</option>
                           <option value="Dinas Kesehatan">Dinas Kesehatan</option>
                           <option value="Dinas Sosial">Dinas Sosial</option>
                           <option value="Dinas Tenaga Kerja">Dinas Tenaga Kerja</option>
                           <option value="Dinas Perhubungan">Dinas Perhubungan</option>
                           <option value="Dinas Kependudukan Dan Pencatatan Sipil">Dinas Kependudukan Dan Pencatatan Sipil</option>
                           <option value="Dinas Kebudayaan Dan Pariwisata">Dinas Kebudayaan Dan Pariwisata</option>
                           <option value="Dinas Tata Ruang Dan Cipta Karya">Dinas Tata Ruang Dan Cipta Karya</option>
                           <option value="Dinas Bina Marga Dan Pengairan">Dinas Bina Marga Dan Pengairan</option>
                           <option value="Dinas Pemakaman Dan Pertamanan">Dinas Pemakaman Dan Pertamanan</option>
                           <option value="Dinas Pencegahan Dan Penanggulangan Kebakaran">Dinas Pencegahan Dan Penanggulangan Kebakaran</option>
                           <option value="Dinas Koperasi UKM Dan Perindustrian Perdagangan">Dinas Koperasi UKM Dan Perindustrian Perdagangan</option>
                           <option value="Dinas Pertanian Dan Ketahangan Pangan">Dinas Pertanian Dan Ketahangan Pangan</option>
                           <option value="Dinas Pelayanan Pajak">Dinas Pelayanan Pajak</option>
                           <option value="Dinas Komunikasi Dan Informatika">Dinas Komunikasi Dan Informatika</option>
                           <option value="Dinas Pengelolaan Keuangan Dan Aset Daerah">Dinas Pengelolaan Keuangan Dan Aset Daerah</option>
                           <option value="Dinas Pemuda Dan Olahraga">Dinas Pemuda Dan Olahraga</option>
                        </optgroup>
                        <optgroup label="Sekretariat Daerah">
                          <option value="Asisten Pemerintahan">Asisten Pemerintahan</option>
                          <option value="Asisten ADM Perekonomian Dan Pembangunan">Asisten ADM Perekonomian Dan Pembangunan</option>
                          <option value="Asisten Administrasi Umum">Asisten Administrasi Umum</option>
                          <option value="Sekretariat DPRD">Sekretariat DPRD</option>
                        </optgroup>

                      </select>

                       </div>
                  </div>

                  <!-- Lokasi 9 -->
                  <div class="form-group">
                       <label class="col-md-4 control-label">Lokasi 9</label>
                        <div class="col-md-8">
                          <select class="form-control required" name="lokasi9">
                           <option value="<?php echo $row->lokasi9;?>"><?php echo $row->lokasi9;?></option>
                            <option value="Satpol PP Kota Bandung">Satpol PP Kota Bandung</option>
                           <optgroup label="Lembaga Teknis Daerah">
                            <option value="Badan Perencanaan Pembangunan Daerah">Badan Perencanaan Pembangunan Daerah</option>
                            <option value="Badan Kepegawaian Daerah">Badan Kepegawaian Daerah</option>
                            <option value="Badan Kesatuan Bangsa Dan Pemberdayaan Masyarakat">Badan Kesatuan Bangsa Dan Pemberdayaan Masyarakat</option>
                            <option value="Badan Pengelolaan Lingkungan Hidup">Badan Pengelolaan Lingkungan Hidup</option>
                            <option value="Badan Pemberdayaan Perempuan Dan KB">Badan Pemberdayaan Perempuan Dan KB</option>
                            <option value="Badan Pelayanan Dan Perijinan Terpadu">Badan Pelayanan Dan Perijinan Terpadu</option>
                            <option value="Kantor Perpustakaan Dan Arsip Daerah">Kantor Perpustakaan Dan Arsip Daerah</option>
                            <option value="Rumah Sakit Umum Daerah Kota Bandung">Rumah Sakit Umum Daerah Kota Bandung</option>
                            <option value="Rumah Sakit Khusus Ibu Dan Anak">Rumah Sakit Khusus Ibu Dan Anak</option>
                            <option value="Rumah Sakit Khusus Gigi Dan Mulut">Rumah Sakit Khusus Gigi Dan Mulut</option>
                          </optgroup>
                          <optgroup label="Dinas Daerah">
                            <option value="Dinas Pendidikan">Dinas Pendidikan</option>
                            <option value="Dinas Kesehatan">Dinas Kesehatan</option>
                            <option value="Dinas Sosial">Dinas Sosial</option>
                            <option value="Dinas Tenaga Kerja">Dinas Tenaga Kerja</option>
                            <option value="Dinas Perhubungan">Dinas Perhubungan</option>
                            <option value="Dinas Kependudukan Dan Pencatatan Sipil">Dinas Kependudukan Dan Pencatatan Sipil</option>
                            <option value="Dinas Kebudayaan Dan Pariwisata">Dinas Kebudayaan Dan Pariwisata</option>
                            <option value="Dinas Tata Ruang Dan Cipta Karya">Dinas Tata Ruang Dan Cipta Karya</option>
                            <option value="Dinas Bina Marga Dan Pengairan">Dinas Bina Marga Dan Pengairan</option>
                            <option value="Dinas Pemakaman Dan Pertamanan">Dinas Pemakaman Dan Pertamanan</option>
                            <option value="Dinas Pencegahan Dan Penanggulangan Kebakaran">Dinas Pencegahan Dan Penanggulangan Kebakaran</option>
                            <option value="Dinas Koperasi UKM Dan Perindustrian Perdagangan">Dinas Koperasi UKM Dan Perindustrian Perdagangan</option>
                            <option value="Dinas Pertanian Dan Ketahangan Pangan">Dinas Pertanian Dan Ketahangan Pangan</option>
                            <option value="Dinas Pelayanan Pajak">Dinas Pelayanan Pajak</option>
                            <option value="Dinas Komunikasi Dan Informatika">Dinas Komunikasi Dan Informatika</option>
                            <option value="Dinas Pengelolaan Keuangan Dan Aset Daerah">Dinas Pengelolaan Keuangan Dan Aset Daerah</option>
                            <option value="Dinas Pemuda Dan Olahraga">Dinas Pemuda Dan Olahraga</option>
                         </optgroup>
                         <optgroup label="Sekretariat Daerah">
                           <option value="Asisten Pemerintahan">Asisten Pemerintahan</option>
                           <option value="Asisten ADM Perekonomian Dan Pembangunan">Asisten ADM Perekonomian Dan Pembangunan</option>
                           <option value="Asisten Administrasi Umum">Asisten Administrasi Umum</option>
                           <option value="Sekretariat DPRD">Sekretariat DPRD</option>
                         </optgroup>

                       </select>

                        </div>
                   </div>

                   <!-- Lokasi 10 -->
                   <div class="form-group">
                        <label class="col-md-4 control-label">Lokasi 10</label>
                         <div class="col-md-8">
                           <select class="form-control required" name="lokasi10">
                           <option value="<?php echo $row->lokasi10;?>"><?php echo $row->lokasi10;?></option>
                             <option value="Satpol PP Kota Bandung">Satpol PP Kota Bandung</option>
                            <optgroup label="Lembaga Teknis Daerah">
                             <option value="Badan Perencanaan Pembangunan Daerah">Badan Perencanaan Pembangunan Daerah</option>
                             <option value="Badan Kepegawaian Daerah">Badan Kepegawaian Daerah</option>
                             <option value="Badan Kesatuan Bangsa Dan Pemberdayaan Masyarakat">Badan Kesatuan Bangsa Dan Pemberdayaan Masyarakat</option>
                             <option value="Badan Pengelolaan Lingkungan Hidup">Badan Pengelolaan Lingkungan Hidup</option>
                             <option value="Badan Pemberdayaan Perempuan Dan KB">Badan Pemberdayaan Perempuan Dan KB</option>
                             <option value="Badan Pelayanan Dan Perijinan Terpadu">Badan Pelayanan Dan Perijinan Terpadu</option>
                             <option value="Kantor Perpustakaan Dan Arsip Daerah">Kantor Perpustakaan Dan Arsip Daerah</option>
                             <option value="Rumah Sakit Umum Daerah Kota Bandung">Rumah Sakit Umum Daerah Kota Bandung</option>
                             <option value="Rumah Sakit Khusus Ibu Dan Anak">Rumah Sakit Khusus Ibu Dan Anak</option>
                             <option value="Rumah Sakit Khusus Gigi Dan Mulut">Rumah Sakit Khusus Gigi Dan Mulut</option>
                           </optgroup>
                           <optgroup label="Dinas Daerah">
                             <option value="Dinas Pendidikan">Dinas Pendidikan</option>
                             <option value="Dinas Kesehatan">Dinas Kesehatan</option>
                             <option value="Dinas Sosial">Dinas Sosial</option>
                             <option value="Dinas Tenaga Kerja">Dinas Tenaga Kerja</option>
                             <option value="Dinas Perhubungan">Dinas Perhubungan</option>
                             <option value="Dinas Kependudukan Dan Pencatatan Sipil">Dinas Kependudukan Dan Pencatatan Sipil</option>
                             <option value="Dinas Kebudayaan Dan Pariwisata">Dinas Kebudayaan Dan Pariwisata</option>
                             <option value="Dinas Tata Ruang Dan Cipta Karya">Dinas Tata Ruang Dan Cipta Karya</option>
                             <option value="Dinas Bina Marga Dan Pengairan">Dinas Bina Marga Dan Pengairan</option>
                             <option value="Dinas Pemakaman Dan Pertamanan">Dinas Pemakaman Dan Pertamanan</option>
                             <option value="Dinas Pencegahan Dan Penanggulangan Kebakaran">Dinas Pencegahan Dan Penanggulangan Kebakaran</option>
                             <option value="Dinas Koperasi UKM Dan Perindustrian Perdagangan">Dinas Koperasi UKM Dan Perindustrian Perdagangan</option>
                             <option value="Dinas Pertanian Dan Ketahangan Pangan">Dinas Pertanian Dan Ketahangan Pangan</option>
                             <option value="Dinas Pelayanan Pajak">Dinas Pelayanan Pajak</option>
                             <option value="Dinas Komunikasi Dan Informatika">Dinas Komunikasi Dan Informatika</option>
                             <option value="Dinas Pengelolaan Keuangan Dan Aset Daerah">Dinas Pengelolaan Keuangan Dan Aset Daerah</option>
                             <option value="Dinas Pemuda Dan Olahraga">Dinas Pemuda Dan Olahraga</option>
                          </optgroup>
                          <optgroup label="Sekretariat Daerah">
                            <option value="Asisten Pemerintahan">Asisten Pemerintahan</option>
                            <option value="Asisten ADM Perekonomian Dan Pembangunan">Asisten ADM Perekonomian Dan Pembangunan</option>
                            <option value="Asisten Administrasi Umum">Asisten Administrasi Umum</option>
                            <option value="Sekretariat DPRD">Sekretariat DPRD</option>
                          </optgroup>

                        </select>

                         </div>
                    </div>

                    <div class="form-group">
                     <label class="col-md-4 control-label">Lokasi Lainnya </label>
                      <div class="col-md-8">
                         <input type="text" class="form-control" name="lokasilainnya" value="<?php echo $row->lokasilainnya;?>"/>
                      </div>
                     </div>

                     <div class="form-group">
                      <label class="col-md-4 control-label">Bidang Lain </label>
                       <div class="col-md-8">
                          <input type="text" class="form-control" name="bidanglain" value="<?php echo $row->bidanglain;?>"/>
                       </div>
                      </div>
          </div><!-- akhir kiri -->
          <div class="col-md-12">
            <hr/>
          <div class="col-md-6">
            <div class="form-group">
             <label class="col-md-4 control-label">Scan KTP </label>
              <div class="col-md-8">
                <div class="input-group">
                   <input name="ktp" class="form-control" type="text" id="ktp" data-required="true" style="background-color:#fff" value="<?php echo $row->ktp;?>" readonly>
                   <span class="input-group-addon" style="background-color:#24AD20">
                   <?php echo anchor_popup(base_url().'publikdokumenktp',
                     '<i class="fa fa-file-photo-o" style="color:#fff"></i> <i style="color:#fff">Pilih Gambar</i>',$atribut_popup); ?>
                  </span>
                 </div>
                 <p> <small>Gambar Max 2MB (jpg,png,gif)</small></p>
              </div>
             </div>

             <div class="form-group">
              <label class="col-md-4 control-label">Foto Berwana </label>
               <div class="col-md-8">
                 <div class="input-group bootstrap-timepicker">
                       <input name="foto" class="form-control" id="foto" type="text" data-required="true" style="background-color:#fff" value="<?php echo $row->foto;?>" readonly>
                       <span class="input-group-addon" style="background-color:#24AD20">
                       <?php echo anchor_popup(base_url().'publikdokumenfoto',
                         '<i class="fa fa-file-photo-o" style="color:#fff"></i> <i style="color:#fff">Pilih Gambar</i>',$atribut_popup);
     ?>                </span>
                   </div>
               <p> <small>Gambar Max 2MB (jpg,png,gif)</small></p>
               </div>
              </div>

              <div class="form-group">
               <label class="col-md-4 control-label">Proposal </label>
                  <div class="col-md-8">
                    <div class="input-group bootstrap-timepicker">
                    <input name="proposal" value="<?php echo $row->proposal;?>" class="form-control" id="proposal" type="text" data-required="true" readonly style="background-color:#fff">
                    <span class="input-group-addon" style="background-color:#DE2F2F">
                    <?php echo anchor_popup(base_url().'publikdokumenproposal',
                      '<i class="fa fa-file-pdf-o" style="color:#fff"></i> <i style="color:#fff">Pilih PDF</i>',$atribut_popup);
                    ?></span>
                  </div>
                  <p> <small>File type PDF</small></p>
                </div>
               </div>

          </div>
          <div class="col-md-6">
            <div class="form-group">
             <label class="col-md-4 control-label">Surat Permohonan </label>
              <div class="col-md-8">
                <div class="input-group bootstrap-timepicker">
                <input name="skkampus" value="<?php echo $row->skkampus;?>" class="form-control" id="skkampus" type="text" data-required="true" readonly style="background-color:#fff">
                <span class="input-group-addon" style="background-color:#DE2F2F">
                <?php echo anchor_popup(base_url().'publikdokumenskkampus',
                  '<i class="fa fa-file-pdf-o" style="color:#fff"></i> <i style="color:#fff">Pilih PDF</i>',$atribut_popup);
                ?></span>
              </div>
              <p> <small>File type PDF</small></p>
              </div>
             </div>

             <div class="form-group">
              <label class="col-md-4 control-label">Surat Keterangan </label>
               <div class="col-md-8">
                 <div class="input-group bootstrap-timepicker">
                 <input name="sk" value="<?php echo $row->sk;?>" class="form-control" id="sk" type="text" readonly style="background-color:#fff">
                 <span class="input-group-addon" style="background-color:#DE2F2F">
                 <?php echo anchor_popup(base_url().'publikdokumensk',
                   '<i class="fa fa-file-pdf-o" style="color:#fff"></i> <i style="color:#fff">Pilih PDF</i>',$atribut_popup);
                 ?> </span>
               </div>
              <p> <small>File type PDF</small></p>
               </div>
              </div>
          </div>
        </div>

        <div class="col-md-12">
          <hr/>
          <a href="<?php echo site_url('publikhome');?>" class="btn btn-default prevBtn btn-md pull-left" type="button" >Kembali</a>
          <button class="btn btn-success nextBtn btn-md pull-right" type="submit" >Simpan</button>
        </div>
          </form>
           <?php }
            }
          ?>
</div>
        </div><!-- /.col -->
    </div><!-- /.row -->


        </div><!-- /.page-content -->
      </div>
    </div><!-- /.main-content -->
