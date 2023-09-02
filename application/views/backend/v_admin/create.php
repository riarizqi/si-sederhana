<div class="col-md-12">
  <section class="panel">
    <header class="panel-heading">
      <div class="panel-actions">
        <a href="#" class="fa fa-caret-down"></a>
        <a href="#" class="fa fa-times"></a>
      </div>

      <h2 class="panel-title">Tambah Admin</h2><br>

      <form class="" action="<?php echo site_url ('Admin/save') ?>" method="post">
        <label>Kode Admin</label><br>
        <input type="text" class="form-control" name="kd_admin" value="" placeholder="Masukkan Kode Admin"
        required oninvalid="this.setCustomValidity('Kode admin Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

        <label>Nama Admin</label><br>
        <input type="text" class="form-control" name="nama_admin" value="" placeholder="Masukkan Nama Admin"
        required oninvalid="this.setCustomValidity('Nama admin Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

        <button type="submit" name="button" class="btn btn-primary">Simpan</button>
        <a href="<?php echo site_url('Admin') ?>"><button type="button" name="button" class="btn btn-danger">Batal</button>
        </a>

      </form>
