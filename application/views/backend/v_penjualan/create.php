<div class="col-md-12">
  <section class="panel">
    <header class="panel-heading">
      <div class="panel-actions">
        <a href="#" class="fa fa-caret-down"></a>
        <a href="#" class="fa fa-times"></a>
      </div>

      <h2 class="panel-title">Tambah Data Penjualan</h2><br>

      <form class="" action="<?php echo site_url ('Penjualan/save') ?>" method="post">
        <label>Kode Produk</label><br>
        <input type="text" name="kd_produk" class="form-control" placeholder="Masukan Judul penjualan"
        value="" required oninvalid="this.setCustomValidity('Kode Produk Harus Di Isi')"
        oninput="setCustomValidity('')"><p></p>

        <label>Kategori</label><br>
        <input type="text" class="form-control" name="kategori" value="" placeholder="Masukkan Kategori"
        required oninvalid="this.setCustomValidity('Kategori Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

        <label>Nama Produk</label><br>
        <input type="text" name="nama_produk" class="form-control" value="" placeholder="Masukkan Nama Produk"
        required oninvalid="this.setCustomValidity('Nama Produk Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

        <label>Jumlah</label><br>
        <input type="text" name="jumlah" class="form-control" value="" placeholder="Masukkan Jumlah"
        required oninvalid="this.setCustomValidity('Jumlah Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

        <button type="submit" name="button" class="btn btn-primary">Simpan</button>
        <a href="<?php echo site_url('Penjualan') ?>"><button type="button" name="button" class="btn btn-danger">Batal</button>
        </a>

      </form>
