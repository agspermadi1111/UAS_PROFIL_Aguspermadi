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
      <th>Nama Sekolah</th>
      <th>Alamat</th>
      <th>Tahun Masuk</th>
      <th>Tahun Lulus</th>
      <th>Aksi</th>
     </tr>
    </thead>
    <tbody>
     <?php
     foreach ($Allsd as $sd) {
     ?>
      <tr>
       <td><?= $sd['nama']; ?></td>
       <td><?= $sd['alamat']; ?></td>
       <td><?= $sd['thn_masuk']; ?></td>
       <td><?= $sd['thn_lulus']; ?></td>
       <td><a href="<?= base_url('pendidikan_admin/edit/' . $sd['id_sd']) ?>" class=" btn btn-info">Edit</a></td>
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
     foreach ($Allsmp as $smp) {
     ?>
      <tr>
       <td><?= $smp['nama']; ?></td>
       <td><?= $smp['alamat']; ?></td>
       <td><?= $smp['thn_masuk']; ?></td>
       <td><?= $smp['thn_lulus']; ?></td>
       <td><a href="<?= base_url('pendidikan_admin/edit1/' . $smp['id_smp']) ?>" class=" btn btn-info">Edit</a></td>
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
     foreach ($Allsma as $sma) {
     ?>
      <tr>
       <td><?= $sma['nama']; ?></td>
       <td><?= $sma['alamat']; ?></td>
       <td><?= $sma['thn_masuk']; ?></td>
       <td><?= $sma['thn_lulus']; ?></td>
       <td><a href="<?= base_url('pendidikan_admin/edit2/' . $sma['id_sma']) ?>" class=" btn btn-info">Edit</a></td>
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
      <th>Prodi</th>
      <th>Tahun Masuk</th>
      <th>Tahun Lulus</th>
      <th>Aksi</th>
     </tr>
    </thead>
    <tbody>
     <?php
     foreach ($Alluniv as $univ) {
     ?>
      <tr>
       <td><?= $univ['nama']; ?></td>
       <td><?= $univ['alamat']; ?></td>
       <td><?= $univ['prodi']; ?></td>

       <td><?= $univ['thn_masuk']; ?></td>
       <td><?= $univ['thn_lulus']; ?></td>
       <td><a href="<?= base_url('pendidikan_admin/edit3/' . $univ['id_univ']) ?>" class=" btn btn-info">Edit</a></td>
      </tr>
     <?php } ?>



    </tbody>
   </table>
  </div>
 </div>

</div>
<!-- End of Main Content -->