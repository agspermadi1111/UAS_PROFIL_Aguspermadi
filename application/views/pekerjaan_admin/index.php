<!-- Begin Page Content -->
<div class="container-fluid">

</div>
<!-- /.container-fluid -->
<!-- DataTales Example -->
<div class="card shadow mb-4">
 <div class="card-header py-3">
  <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
 </div>
 <div class="card-body">
  <div class="table-responsive">
   <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
     <tr>
      <th>Nama Pekerjaan</th>
      <th>Nama Perusahaan</th>
      <th>Tahun Masuk</th>
      <th>Tahun Keluar</th>
      <th>Aksi</th>
     </tr>
    </thead>
    <tbody>
     <?php
     foreach ($Allpekerjaan as $pekerjaan) {
     ?>
      <tr>
       <td><?= $pekerjaan['nama_pekerjaan']; ?></td>
       <td><?= $pekerjaan['nama_perusahaan']; ?></td>
       <td><?= $pekerjaan['thn_masuk']; ?></td>
       <td><?= $pekerjaan['thn_keluar']; ?></td>
       <td><a href="<?= base_url('pekerjaan_admin/edit/' . $pekerjaan['id_pekerjaan']) ?>" class=" btn btn-info">Edit</a></td>
      </tr>
     <?php } ?>



    </tbody>
   </table>
  </div>
  <div class="table-responsive">
   <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
     <tr>
      <th>Nama Sekolah</th>
      <th>Alamat</th>
      <th>Tahun Masuk</th>
      <th>Tahun Lulus</th>
      <th>Aksi</th>
     </tr>
    </thead>
    <tbody>
     <?php
     foreach ($Allpekerjaan1 as $pekerjaan1) {
     ?>
      <tr>
       <td><?= $pekerjaan1['nama_pekerjaan']; ?></td>
       <td><?= $pekerjaan1['nama_perusahaan']; ?></td>
       <td><?= $pekerjaan1['thn_masuk']; ?></td>
       <td><?= $pekerjaan1['thn_keluar']; ?></td>
       <td><a href="<?= base_url('pekerjaan_admin/edit1/' . $pekerjaan1['id_pekerjaan']) ?>" class=" btn btn-info">Edit</a></td>
      </tr>
     <?php } ?>



    </tbody>
   </table>
  </div>