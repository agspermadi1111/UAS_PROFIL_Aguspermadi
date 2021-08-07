<div class="mt-3">
  <form action="<?= base_url('pekerjaan_admin/editpekerjaan1') ?>" method="POST">
    <input type="hidden" name="id_pekerjaan" value="<?= $pekerjaan1['id_pekerjaan'] ?>">
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Nama pekerjaan1</label>
      <input type="text" name="nama_pekerjaan" class="form-control" id="exampleFormControlInput1" placeholder="Nama pekerjaan1" value="<?= $pekerjaan1['nama_pekerjaan'] ?>">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Nama Perusahaan</label>
      <input type="text" name="nama_perusahaan" class="form-control" id="exampleFormControlInput1" placeholder="Alamat" value="<?= $pekerjaan1['nama_perusahaan'] ?>">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Tahun Masuk</label>
      <input type="number" name="thn_masuk" class="form-control" id="exampleFormControlInput1" placeholder="Alamat" value="<?= $pekerjaan1['thn_masuk'] ?>">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Tahun Keluar</label>
      <input type="number" name="thn_keluar" class="form-control" id="exampleFormControlInput1" placeholder="Umur" value="<?= $pekerjaan1['thn_keluar'] ?>">
    </div>
    <div class="mb-3">
      <button type='submit' class="btn btn-primary">Edit</button>
    </div>
  </form>

</div>