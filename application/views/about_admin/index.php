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
                          <th>NAMA</th>
                          <th>Profile</th>
                          <th>email</th>
                          <th>Phone</th>
                          <th>Aksi</th>
                      </tr>
                  </thead>
                  <?php
                    foreach ($Allabout as $about) {
                    ?>
                      <tr>
                          <td><?= $about['nama']; ?></td>
                          <td><?= $about['profile']; ?></td>
                          <td><?= $about['email']; ?></td>
                          <td><?= $about['phone']; ?></td>
                          <td><a href="<?= base_url('about_admin/edit/' . $about['id_about']) ?>" class=" btn btn-info">Edit</a></td>
                      </tr>
                  <?php } ?>

                  <tbody>

                  </tbody>
              </table>
          </div>
      </div>

  </div>
  <!-- End of Main Content -->