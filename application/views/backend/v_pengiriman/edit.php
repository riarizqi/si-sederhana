<div class="col-md-12">
  <section class="panel">
    <header class="panel-heading">
      <div class="panel-actions">
        <a href="#" class="fa fa-caret-down"></a>
        <a href="#" class="fa fa-times"></a>
      </div>

      <h2 class="panel-title">Ubah Data Pengiriman</h2><br>

<form class="" action="<?php echo site_url('Pengiriman/update/'.$edit['kategori']) ?>" method="post">

  <label>Nama Produk</label><br>
  <input type="text" name="nama_produk" class="form-control" placeholder="Masukan Judul pengiriman" value="<?php echo $edit['nama_produk'] ?>" required oninvalid="this.setCustomValidity('Judul pengiriman Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

  <label>Tanggal</label><br>
  <input type="date" name="tgl_pengiriman" class="form-control" value="<?php echo $edit['tgl_pengiriman'] ?>" required oninvalid="this.setCustomValidity('Judul pengiriman Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

  <label>Jam</label><br>
  <input type="time" name="jam_pengiriman" class="form-control" value="<?php echo $edit['jam_pengiriman'] ?>"
  required oninvalid="this.setCustomValidity('Judul pengiriman Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

  <label>Kategori</label><br>
    <select name="kategori" class="" required>
      <option value="<?php echo $edit['kategori'] ?>"><?php echo $edit['kategori'] ?></option>
        <?php
        foreach ($kategori->result_array() as $r) {
        ?>
      <option value="<?php echo $r['kategori'] ?>"><?php echo $r['kategori']; ?></option>
      <?php } ?>
    </select><p></p>

  <label>Alamat Tujuan</label><br>
  <textarea name="alamat_tujuan" class="form-control" id="" placeholder="alamat tujuan" rows="10" cols="50" required><?php echo $edit['alamat_tujuan'] ?></textarea>
  <p></p>

  <button type="submit" name="button" class="btn btn-primary">Simpan</button>
  <a href="<?php echo site_url('Pengiriman') ?>"><button type="button" name="button" class="btn btn-danger">Batal</button>
  </a>

</form>
