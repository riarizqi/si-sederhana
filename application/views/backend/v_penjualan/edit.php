<form method="post" action="<?php echo site_url('penjualan/update/'.$edit['kd_produk']) ?>" enctype="multipart/form-data">

  <label>Kode Produk</label><br>
  <input type="text" name="kd_produk" class="form-control" placeholder="Masukan Judul penjualan"
  value="<?php echo $edit['kd_produk'] ?>" required oninvalid="this.setCustomValidity('Judul penjualan Harus Di Isi')"
  oninput="setCustomValidity('')"><p></p>

  <label>Kategori</label><br>
  <input type="text" class="form-control" name="kategori" value="" placeholder="Masukkan Kategori"
  required oninvalid="this.setCustomValidity('Nama Produk Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

  <label>Nama Produk</label><br>
  <input type="text" name="nama_produk" class="form-control" value="<?php echo $edit['nama_produk'] ?>"
  required oninvalid="this.setCustomValidity('Judul penjualan Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

  <label>Jumlah</label><br>
  <input type="text" name="jumlah" class="form-control" value="<?php echo $edit['jumlah'] ?>"
  required oninvalid="this.setCustomValidity('Judul penjualan Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

  <button type="submit" name="button" class="btn btn-primary">Simpan</button>
  <a href="<?php echo site_url('Penjualan') ?>"><button type="button" name="button" class="btn btn-danger">Batal</button>
  </a>

</form>
