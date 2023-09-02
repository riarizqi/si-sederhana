<div class="col-md-12">
  <section class="panel">
    <header class="panel-heading">
      <div class="panel-actions">
        <a href="#" class="fa fa-caret-down"></a>
        <a href="#" class="fa fa-times"></a>
      </div>

      <h2 class="panel-title">Tambah Produk</h2><br>

      <form class="" action="<?php echo site_url ('Produk/save') ?>" method="post">
        <label>Kode Produk</label><br>
        <input type="text" class="form-control" name="kd_Produk" value="" placeholder="Masukkan Kode Produk"
        required oninvalid="this.setCustomValidity('Kode Produk Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

        <label>Kategori</label><br>
        <input type="text" class="form-control" name="kategori" value="" placeholder="Masukkan Kategori"
        required oninvalid="this.setCustomValidity('Nama Produk Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

        <label>Nama Produk</label><br>
        <input type="text" class="form-control" name="nama_Produk" value="" placeholder="Masukkan Nama Produk"
        required oninvalid="this.setCustomValidity('Nama Produk Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

        <label>Stok</label><br>
        <input type="text" class="form-control" name="stok" value="" placeholder="Masukkan Jumlah Stok"
        required oninvalid="this.setCustomValidity('Nama Produk Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

        <label>Upload Foto</label><br>
        <input type="file" name="img_produk"><p></p>

        <button type="submit" name="button" class="btn btn-primary">Simpan</button>
        <a href="<?php echo site_url('Produk') ?>"><button type="button" name="button" class="btn btn-danger">Batal</button>
        </a>

      </form>
