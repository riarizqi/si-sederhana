<div class="col-md-12">
  <section class="panel">
    <header class="panel-heading">
      <div class="panel-actions">
        <a href="#" class="fa fa-caret-down"></a>
        <a href="#" class="fa fa-times"></a>
      </div>

      <h2 class="panel-title">Tambah Tanggapan Customer</h2><br>

      <form class="" action="<?php echo site_url ('Tanggapanpembeli/save') ?>" method="post">
        <label>Nama Customer</label><br>
        <input type="text" class="form-control" name="nama_customer" value="" placeholder="Masukkan Kode Customer"
        required oninvalid="this.setCustomValidity('Kode Tanggapanpembeli Harus Di Isi')"
        oninput="setCustomValidity('')"><p></p>

        <label>Kode Produk</label><br>
        <input type="text" class="form-control" name="kd_produk" value="" placeholder="Masukkan Kode Produk"
        required oninvalid="this.setCustomValidity('Nama Tanggapanpembeli Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

        <label>Nama Produk</label><br>
        <input type="text" class="form-control" name="nama_produk" value="" placeholder="Masukkan Nama Produk"
        required oninvalid="this.setCustomValidity('Nama Tanggapanpembeli Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

        <label>Tanggapan Customer</label><br>
        <input type="text" class="form-control" name="tanggapan" value="" placeholder="Masukkan Tanggapan Customer"
        required oninvalid="this.setCustomValidity('Nama Tanggapanpembeli Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

        <button type="submit" name="button" class="btn btn-primary">Simpan</button>
        <a href="<?php echo site_url('Tanggapanpembeli') ?>"><button type="button" name="button" class="btn btn-danger">Batal</button>
        </a>

      </form>
