 <section class="panel">
   <header class="panel-heading">
     <div class="panel-actions">
       <a href="#" class="fa fa-caret-down"></a>
       <a href="#" class="fa fa-times"></a>
     </div>

     <h2 class="panel-title">Data Admin</h2><br>
     <a href="<?php echo site_url('Admin/create') ?>">
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
           <th>Nama</th>
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
           <td><?php echo $row['kd_admin'] ?></td>
           <td><?php echo $row['nama_admin'] ?></td>
           <td>
             <a href="<?php echo site_url('Admin/edit/'.$row['kd_admin'])?>" title="Tombol untuk ubah data">Ubah</a> |
             <a href="<?php echo site_url('Admin/delete/'.$row['kd_admin'])?>"
               onclick="javascript: return confirm('Yakin Mau dihapus <?php echo $row['nama_admin'];?>')"
               title="Tombol untuk hapus data">Hapus</a>
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
    <h2>Data Admin</h2>
  </header>
</section>
