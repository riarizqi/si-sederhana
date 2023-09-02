<div class="col-md-12">
  <section class="panel">
    <header class="panel-heading">
      <div class="panel-actions">
        <a href="#" class="fa fa-caret-down"></a>
        <a href="#" class="fa fa-times"></a>
      </div>

      <h2 class="panel-title">Tambah Data Pengiriman</h2><br>

<form method="post" action="<?php echo site_url('pengiriman/save') ?>" enctype="multipart/form-data">

  <label>Nama Produk</label><br>
  <input type="text" name="nama_produk" class="form-control" placeholder="Masukan Nama Produk" value=""
  required oninvalid="this.setCustomValidity('Judul pengiriman Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

  <label>Kategori</label><br>
    <select name="kategori" class="" required>
      <option value="" selected>- Pilih kategori -</option>
      <?php
      foreach ($kategori->result_array() as $r) {
      ?>
      <option value="<?php echo $r['kategori'] ?>"><?php echo $r['kategori']; ?></option>
      <?php } ?>
    </select><p></p>

  <label>Alamat Tujuan</label><br>
  <textarea name="alamat_tujuan" class="form-control" id="" placeholder="Alamat Tujuan" rows="10" cols="80" required></textarea><p></p>

  <label>Foto pengiriman</label><br>
  <input type="file" name="img_pengiriman" required><p></p>

  <button type="submit" name="button" class="btn btn-primary">Simpan</button>
  <a href="<?php echo site_url('Pengiriman') ?>"><button type="button" name="button" class="btn btn-danger">Batal</button>
  </a>


</form>
