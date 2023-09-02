<div class="col-md-12">
  <section class="panel">
    <header class="panel-heading">
      <div class="panel-actions">
        <a href="#" class="fa fa-caret-down"></a>
        <a href="#" class="fa fa-times"></a>
      </div>

      <h2 class="panel-title">Ubah Data Tanggapan Customer</h2>
      <br>

<form class="" action="<?php echo site_url('Tanggapanpembeli/update/'.$edit['id_customer']) ?>" method="post">
  <label>Nama Customer</label><br>
  <input type="text" disabled class="form-control" name="nama_customer" value="<?php echo $edit['nama_customer'] ?>">
  <input type="text" hidden name="nama_customer" value="<?php echo $edit['nama_customer'] ?>">
  <p></p>

  <label>Kode Produk</label><br>
  <input type="text" class="form-control" name="kd_produk" value="<?php echo $edit['kd_produk'] ?>"><p></p>

  <label>Nama Produk</label><br>
  <input type="text" class="form-control" name="nama_produk" value="<?php echo $edit['nama_produk'] ?>"><p></p>

  <label>Tanggapan Customer</label><br>
  <input type="text" class="form-control" name="tanggapan" value="<?php echo $edit['tanggapan'] ?>"><p></p>

  <button type="submit" name="button" class="btn btn-primary">Perbaharui</button>
  <a href="<?php echo site_url('Tanggapanpembeli') ?>"><button type="button" name="button" class="btn btn-danger">Batal</button></a>

</form>
