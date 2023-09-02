
						<div class="row">
						<div class="col-md-6">

<section class="panel">
  <header class="panel-heading">
    <div class="panel-actions">
      <a href="#" class="fa fa-caret-down"></a>
      <a href="#" class="fa fa-times"></a>
    </div>

    <h2 class="panel-title">Data Penjualan</h2><br>
    <a href="<?php echo site_url('Penjualan/create') ?>">
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
    <th>Kode</th>
    <th>Kategori</th>
    <th>Nama Produk</th>
    <th>Jumlah</th>
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
    <td><?php echo $row['kd_produk'] ?></td>
    <td><?php echo $row['kategori'] ?></td>  
    <td><?php echo $row['nama_produk'] ?></td>
    <td><?php echo $row['jumlah'] ?></td>
    <td>
      <a href="<?php echo site_url('penjualan/edit/'.$row['kd_produk'])?>" title="Tombol untuk ubah data">Ubah</a> |
      <a href="<?php echo site_url('penjualan/delete/'.$row['kd_produk'])?>"
        onclick="javascript: return confirm('Yakin Mau dihapus <?php echo $row['nama_produk'];?>')" title="Tombol untuk hapus data">Hapus</a>
    </td>
  </tr>
  <?php
  $no++;
  }
  ?>
</tbody>
</table>
</div>
</section>
</div>

<section role="main" class="content-body">
<header class="page-header">
<h2>Data produk</h2>
</header>
</section>
