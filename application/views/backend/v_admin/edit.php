<div class="col-md-12">
  <section class="panel">
    <header class="panel-heading">
      <div class="panel-actions">
        <a href="#" class="fa fa-caret-down"></a>
        <a href="#" class="fa fa-times"></a>
      </div>

      <h2 class="panel-title">Ubah Data Admin</h2>
      <br>

<form class="" action="<?php echo site_url('Admin/update/'.$edit['kd_admin']) ?>" method="post">
  <label>Kode Admin</label><br>
  <input type="text" disabled class="form-control" name="kd_admin" value="<?php echo $edit['kd_admin'] ?>">
  <input type="text" hidden name="kd_admin" value="<?php echo $edit['kd_admin'] ?>">
  <p></p>

  <label>Nama Admin</label><br>
  <input type="text" class="form-control" name="nama_admin" value="<?php echo $edit['nama_admin'] ?>"><p></p>

  <button type="submit" name="button" class="btn btn-primary">Perbaharui</button>
  <a href="<?php echo site_url('Admin') ?>"><button type="button" name="button" class="btn btn-danger">Batal</button></a>

</form>
