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
            Layanan Ijin Survey / PKL / Penelitian
          </small>
        </h1>
      </div><!-- /.page-header -->


<div class="row">
<div class="col-xs-12">

<div class="stepwizard">
    <div class="setup-panel">
        <div class="stepwizard-step">
            <a href="#step-1" type="button" class="btn btn-warning btn-circle">
            <span class="stepNumber">1</span>
            <span class="stepDesc">Tahap 1 <br/><small style="font-size:12px">Pilih Layanan Perizinan</small> </span>
            </a>

        </div>
        <div class="stepwizard-step">
            <a href="#step-2" type="button" class="btn btn-circle btn-info" disabled="disabled" style="opacity:100;" >
           <span class="stepNumber">2</span>
           <span class="stepDesc" style="margin:10px 10px auto ">Tahap 2 <br/><small style="font-size:12px">Mengisi Form Permohonan</small> </span>
            </a>

        </div>
        <div class="stepwizard-step">
            <a href="#step-3" type="button" class="btn btn-circle btn-info" disabled="disabled" style="opacity:100;">
            <span class="stepNumber">3</span>
            <span class="stepDesc">Tahap 3 <br/><small style="font-size:12px">Upload Berkas</small> </span>
            </a>
        </div>

    </div>
</div>



 <form id="Form1" role"form" method="post" class="form-horizontal" action="<?php echo site_url('publikpermohonanspp/daftar')?>" enctype="multipart/form-data">
    <div class="row setup-content" id="step-1">
        <div class="col-xs-12">
         <div class="panel panel-default" style="margin-top:20px;background:#eee">

                <div class="panel-heading" style="background-color:#666;color:#fff;border-radius:0">
                Pilih Jenis Izin</div>
                <div class="panel-body" style="background:#fff">
            <div class="col-md-6 col-md-offset-3">


              <br/>
                 <div class="form-group">
                  <div class="radio">
                                    <label>
                                        <input type="radio" class="control-label radio-btn" style="opacity:1" name="jenisijin" value="survey" required="required"/>
                                        <strong>Izin Survey</strong>
                                    </label>
                  </div>
                  </div>

                                <br/>
                   <div class="form-group">
                  <div class="radio">
                                    <label>
                                        <input type="radio" class="control-label radio-btn" name="jenisijin" value="penelitian" required="required"/>
                                        <strong>Izin Penelitian</strong>
                                    </label>
                  </div>
                  </div>
                  <br/>
                   <div class="form-group">
                    <div class="radio">
                                    <label>
                                        <input type="radio" class="control-label radio-btn" name="jenisijin" value="pkl" required="required"/>
                                        <strong> Izin Praktek Kerja Lapangan</strong>
                                    </label>

                  </div>
                  </div>

                  </div>
                </div><!-- panel body-->
                <div class="modal-footer">
                <button class="btn btn-primary nextBtn btn-md" type="button" id="validateBtn">Lanjut</button>
                </div>


            </div><!-- panel -->

        </div>
    </div>
    <div class="row setup-content" id="step-2">
        <div class="col-xs-12">
         <div class="panel panel-default" style="margin-top:20px;background:#eee">

           <div class="panel-heading" style="background-color:#666;color:#fff;border-radius:0">
                Lengkapi Data Berikut</div>
        <div class="panel-body" style="background:#fff">
           <div class="col-md-6"><!-- kanan -->

             <input type="hidden" class="form-control" name="nmsurat" value="<?php echo $nmsurat;?>" readonly/>
              <input type="hidden" class="form-control" name="kd_user" value="<?php echo $this->session->userdata('ID');?>" readonly/>
              <input type="hidden" class="form-control" name="verifikasi" value="0" readonly/>
              <input type="hidden" class="form-control" name="notif" value="unread" readonly/>
              <input type="hidden" class="form-control" name="tglajuan" value="<?php date_default_timezone_set("Asia/Jakarta"); echo date(" d/m/Y ");?>" readonly/>
             <div class="form-group">
                <label class="col-md-4 control-label">No. Resi</label>
                 <div class="col-md-8">
                    <input type="text" class="form-control" name="kd_ijin" value="<?php echo $kd_ijin;?>" readonly/>

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
                    <input type="text" class="form-control" name="kampus" required="required"/>
                 </div>
                </div>
               <div class="form-group">
                <label class="col-md-6 control-label">No Surat Keterangan Dari Universitas </label>
                 <div class="col-md-6">
                    <input type="text" class="form-control" name="nosuratkampus" required="required"/>
                 </div>
                </div>

            <div class="form-group">
                <label class="col-md-6 control-label">Tanggal Surat Keterangan Dari Universitas</label>
             <div class="col-sm-6">

                <div id="dp-ex-3" class="input-group date" data-auto-close="true" data-date="12/02/2016" data-date-format="dd/mm/yyyy" data-date-autoclose="true">
                    <input class="form-control" type="text" name="tglsuratkampus" required="required">
                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                </div>

            </div> <!-- /.col -->
        </div>

             <div class="form-group">
                <label class="col-md-6 control-label">Organisasi Kemahasiswaan</label>
                 <div class="col-md-6">
                    <input type="text" class="form-control" name="organisasi" required="required"/>
                 </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-6 control-label">Judul Skripsi/Penelitian/Survey</label>
                  <div class="col-lg-6">
                    <textarea class="form-control" type="text" name="judul" rows="2" required="required"></textarea>

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
                            <input type="text" class="form-control" name="anggota1">
                           </div>

                           <!-- 2 -->
                           <div class="form-group">
                            <label class="control-label">Nama Anggota 2 </label>
                             <input type="text" class="form-control" name="anggota2">
                            </div>

                            <!-- 3 -->
                            <div class="form-group">
                             <label class="control-label">Nama Anggota 3 </label>
                              <input type="text" class="form-control" name="anggota3">
                             </div>

                             <!-- 4 -->
                             <div class="form-group">
                              <label class="control-label">Nama Anggota 4 </label>
                               <input type="text" class="form-control" name="anggota4">
                              </div>

                              <!-- 5 -->
                              <div class="form-group">
                               <label class="control-label">Nama Anggota 5 </label>
                                <input type="text" class="form-control" name="anggota5">
                               </div>

                               <!-- 6 -->
                               <div class="form-group">
                                <label class="control-label">Nama Anggota 6 </label>
                                 <input type="text" class="form-control" name="anggota6">
                                </div>

                                <!-- 7 -->
                                <div class="form-group">
                                 <label class="control-label">Nama Anggota 7 </label>
                                  <input type="text" class="form-control" name="anggota7">
                                 </div>

                                 <!-- 8 -->
                                 <div class="form-group">
                                  <label class="control-label">Nama Anggota 8 </label>
                                   <input type="text" class="form-control" name="anggota8">
                                  </div>

                                  <!-- 9 -->
                                  <div class="form-group">
                                   <label class="control-label">Nama Anggota 9 </label>
                                    <input type="text" class="form-control" name="anggota9">
                                   </div>

                                   <!-- 10 -->
                                   <div class="form-group">
                                    <label class="control-label">Nama Anggota 10 </label>
                                     <input type="text" class="form-control" name="anggota10">
                                    </div>



                        </div>
                      </div>
                   </div>
                  </div>


           </div><!-- akhir kanan -->
           <div class="col-md-6"><!--Liri -->
           <label class="col-md-6 control-label">Tujuan / Lokasi / Dinas</label>
           <hr/>
           <!-- Lokasi 1 -->
           <div class="form-group">
                <label class="col-md-4 control-label">Lokasi 1</label>
                 <div class="col-md-8">
                   <select class="form-control required" name="lokasi1">
                     <option value="">--Pilih--</option>
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
                    <option value="">--Pilih--</option>
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
                      <option value="">--Pilih--</option>
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
                        <option value="">--Pilih--</option>
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
                        <option value="">--Pilih--</option>
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
                        <option value="">--Pilih--</option>
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
                        <option value="">--Pilih--</option>
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
                            <option value="">--Pilih--</option>
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
                            <option value="">--Pilih--</option>
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
                            <option value="">--Pilih--</option>
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
                          <input type="text" class="form-control" name="lokasilainnya"/>
                       </div>
                      </div>

                      <div class="form-group">
                       <label class="col-md-4 control-label">Bidang Lain </label>
                        <div class="col-md-8">
                           <input type="text" class="form-control" name="bidanglain"/>
                        </div>
                       </div>


           </div><!-- akhir kiri -->




                </div><!-- panel body-->
                <div class="modal-footer">
                <button class="btn btn-default prevBtn btn-md pull-left" type="button" >Kembali</button>
                <button class="btn btn-primary nextBtn btn-md pull-right" type="button" >Lanjut</button>
                </div>


            </div><!-- panel -->

        </div>
    </div>
    <div class="row setup-content" id="step-3">
       <div class="col-xs-12">
          <div class="panel panel-default" style="margin-top:20px;background:#eee">

                <div class="panel-heading" style="background-color:#666;color:#fff;border-radius:0">
                Data Kelengkapan</div>
                <div class="panel-body" style="background:#fff">

            <div class="col-md-8 col-md-offet-3">

            <label class="col-md-6 control-label">Scan KTP / Kartu Pelajar / Mahasiswa</label>

              <div class="col-md-6 bootstrap-timepicker">

               <div class="input-group">
                  <input name="ktp" class="form-control" type="text" id="ktp" data-required="true" style="background-color:#fff" readonly>
                  <span class="input-group-addon" style="background-color:#24AD20">
                  <?php echo anchor_popup(base_url().'publikdokumenktp',
                    '<i class="fa fa-file-photo-o" style="color:#fff"></i> <i style="color:#fff">Pilih Gambar</i>',$atribut_popup); ?>
                 </span>
                </div>
                <p> <small>Gambar Max 2MB (jpg,png,gif)</small></p>
            </div> <!-- /.col -->
            <hr/>
            <label class="col-md-6 control-label">Pas Foto<small>(Berwarna)</small></label>

              <div class="col-md-6">
                <div class="input-group bootstrap-timepicker">
                      <input name="foto" class="form-control" id="foto" type="text" data-required="true" style="background-color:#fff" readonly  required>
                      <span class="input-group-addon" style="background-color:#24AD20">
                      <?php echo anchor_popup(base_url().'publikdokumenfoto',
                        '<i class="fa fa-file-photo-o" style="color:#fff"></i> <i style="color:#fff">Pilih Gambar</i>',$atribut_popup);
    ?>                </span>
                  </div>
              <p> <small>Gambar Max 2MB (jpg,png,gif)</small></p>
            </div> <!-- /.col -->
            <hr/>

             <label class="col-md-6 control-label">Proposal</label>

              <div class="col-md-6">
                 <div class="input-group bootstrap-timepicker">
                      <input name="proposal" class="form-control" id="proposal" type="text" data-required="true" readonly style="background-color:#fff" required>
                      <span class="input-group-addon" style="background-color:#DE2F2F">
                      <?php echo anchor_popup(base_url().'publikdokumenproposal',
                        '<i class="fa fa-file-pdf-o" style="color:#fff"></i> <i style="color:#fff">Pilih PDF</i>',$atribut_popup);
                      ?></span>
                  </div>
              <p> <small>File type PDF</small></p>
            </div> <!-- /.col -->

            <div class="col-md-8 col-md-offset-2">
            <div class="alert alert-info" role="alert">
              <p style="text-align:justify">
              Surat Permohonan Dari Kampus/Lembaga Yang Ditujukan Kepada :
              "KEPALA BADAN KESATUAN BANGSA DAN PEMBERDAYAAN MASYARAKAT KOTA BANDUNG JL.WASTUKENCANA NO.2 BANDUNG"
              </p>
            </div>
            </div>

            <label class="col-md-6 control-label">Surat Permohonan</label>

             <div class="col-md-6">
                <div class="input-group bootstrap-timepicker">
                     <input name="skkampus" class="form-control" id="skkampus" type="text" data-required="true" readonly style="background-color:#fff" required>
                     <span class="input-group-addon" style="background-color:#DE2F2F">
                     <?php echo anchor_popup(base_url().'publikdokumenskkampus',
                       '<i class="fa fa-file-pdf-o" style="color:#fff"></i> <i style="color:#fff">Pilih PDF</i>',$atribut_popup);
                     ?></span>
                 </div>
             <p> <small>File type PDF</small></p>
           </div> <!-- /.col -->


            </div>

            <div class="col-md-8 col-md-offset-2">
            <div class="alert alert-info" role="alert">
              <p style="text-align:justify">
                Bagi Kampus/Lembaga dari Luar Provinsi Jawa Barat Yang Akan Melaksanakan Penelitian/Survey/Praktek Kerja Lapangan(PKL)
                Di Lingkungan Pemerintah Kota Bandung , Harus Melampirkan Surat Keterangan Dari KEPALA  BADAN KESATUAN BANGSA DAN POLITIK
                Provinsi Jawa Barat.
              </p>
            </div>
            </div>


            <div class="col-xs-7 col-xs-offset-2">


              <label class="col-xs-5 control-label">Surat Keterangan</label>

              <div class="col-xs-7">
                <div class="input-group bootstrap-timepicker">
                      <input name="sk" class="form-control" id="sk" type="text" readonly style="background-color:#fff" >
                      <span class="input-group-addon" style="background-color:#DE2F2F">
                      <?php echo anchor_popup(base_url().'publikdokumensk',
                        '<i class="fa fa-file-pdf-o" style="color:#fff"></i> <i style="color:#fff">Pilih PDF</i>',$atribut_popup);
                      ?> </span>
                  </div>
              <p> <small>File type PDF</small></p>
            </div> <!-- /.col -->



            </div>






                </div><!-- panel body-->
                <div class="modal-footer">
                <button class="btn btn-default prevBtn btn-md pull-left" type="button" >Kembali</button>
                <button class="btn btn-success nextBtn btn-md pull-right" type="submit" >Simpan</button>
                </div>


            </div><!-- panel -->

        </div>
    </div>

</form>

</div><!-- ROW -->
</div>



    </div> <!-- /.content-container -->

  </div> <!-- /.content -->

</div> <!-- /.container -->
