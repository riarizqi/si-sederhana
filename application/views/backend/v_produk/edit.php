<div class="col-md-12">
  <section class="panel">
    <header class="panel-heading">
      <div class="panel-actions">
        <a href="#" class="fa fa-caret-down"></a>
        <a href="#" class="fa fa-times"></a>
      </div>

      <h2 class="panel-title">Ubah Data produk</h2>
      <br>

<form class="" action="<?php echo site_url('produk/update/'.$edit['kd_produk']) ?>" method="post">
  <label>Kode produk</label><br>
  <input type="text" disabled class="form-control" name="kd_produk" value="<?php echo $edit['kd_produk'] ?>">
  <input type="text" hidden name="kd_produk" value="<?php echo $edit['kd_produk'] ?>">
  <p></p>

  <label>Kategori</label><br>
  <input type="text" class="form-control" name="kategori" value="" placeholder="Masukkan Kategori"
  required oninvalid="this.setCustomValidity('Nama Produk Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

  <label>Nama produk</label><br>
  <input type="text" class="form-control" name="nama_produk" value="<?php echo $edit['nama_produk'] ?>"><p></p>

  <label>Stok</label><br>
  <input type="text" class="form-control" name="stok" value="<?php echo $edit['stok'] ?>"><p></p>

    <img src="<?php echo base_url('assets/img_produk/'.$edit['img_produk']) ?>" width="30%"><br>
    <label>Ganti Foto</label><br>
    <input type="file" name="img_produk"><p></p>

  <button type="submit" name="button" class="btn btn-primary">Perbaharui</button>
  <a href="<?php echo site_url('produk') ?>"><button type="button" name="button" class="btn btn-danger">Batal</button></a>

</form>
