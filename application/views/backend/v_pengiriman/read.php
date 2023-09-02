<div class="col-md-12">
  <section class="panel">
    <header class="panel-heading">
      <div class="panel-actions">
        <a href="#" class="fa fa-caret-down"></a>
        <a href="#" class="fa fa-times"></a>
      </div>

      <h2 class="panel-title">Data Pengiriman</h2><br>
      <a href="<?php echo site_url('Pengiriman/create') ?>">
        <button class="mb-xs mt-xs mr-xs btn btn-primary" type="button" name="button" title="Tombol untuk menambah data">
        <i class="fa fa-plus-circle"></i>
        Tambah</button>
      </a>
    </header>
    <div class="panel-body">
      <table class="table table-bordered table-striped mb-none" id="datatable-default">
<thead>
  <tr>
    <th>No</th>
    <th>Kategori</th>
    <th>Status</th>
    <th>Judul</th>
    <th>Tgl</th>
    <th>Jam</th>
    <th>Alamat Tujuan</th>
    <th>Aksi</th>
  </tr>
</thead>
<tbody>
  <?php
  $no=1;
  foreach ($read->result_array() as $row) {
  ?>
  <tr>
    <td><?php echo $no ?></td>
    <td><?php echo $row['kategori'] ?></td>
    <td><?php echo $row['st_pengiriman'] ?></td>
    <td><?php echo $row['nama_produk'] ?></td>
    <td><?php echo $row['tgl_pengiriman'] ?></td>
    <td><?php echo $row['jam_pengiriman'] ?></td>
    <td><?php echo $row['alamat_tujuan'] ?></td>
    <td>
      <a href="<?php echo site_url('pengiriman/edit/'.$row['kd_produk'])?>" title="Tombol untuk ubah data">Ubah</a> |
      <a href="<?php echo site_url('pengiriman/delete/'.$row['kd_produk'])?>"
        ="javascript: return confirm('Yakin Mau dihapus <?php echo $row['nama_produk'];?>')" title="Tombol untuk hapus data">Hapus</a>
    </td>
  </tr>
</tbody>
  <?php
  $no++;
  }
  ?>
</table>
