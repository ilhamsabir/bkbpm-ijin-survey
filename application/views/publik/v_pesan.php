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
<table class="table table-bordered table-highlight">
<thead>
  <th>No</th>
  <th>Pengirim</th>
  <th>Isi Pesan</th>
  <th></th>
  </thead>
  <tbody>

      <?php $no=1;foreach ($datagagal as $key) { ?>
  <tr>

    <td width="20"><?php echo $no++;?></td>
    <td width="100">
      <p><img src="<?php echo base_url();?>/uploads/admin-icon.png" alt="Avatar" class="panel-list-avatar" style="width:32px;height:32px"></p>
      <p><?php echo $key->tglkirim;?> by admin</p>
    </td>
    <td><?php echo $key->isigagal;?></td>
    <td width="50">
      <?php
      $baca = $key->status;
      if($baca == 'unread') {
      ?>
      <form action="<?= site_url('publikdatapesan/read');?>" method="post">
        <input type="hidden" name="kd_gagal" value="<?php echo $key->kd_gagal;?>">
        <input type="hidden" name="status" value="read">
        <button type="submit" class="btn btn-warning btn-sm"><i class="fa fa-check"></i> Sudah dibaca</button>
      </form>
    <?php }else{ ?>
      <span class="label label-succes">Sudah dibaca</span>
    <?php  } ?>
    </td>

  </tr>
  <?php  } ?>

  </tbody>
  </table>




</div><!-- /.col -->
</div><!-- /.row -->
</div><!-- /.page-content -->
</div>
</div><!-- /.main-content -->
