<div class="mt-3">
 <form action="<?= base_url('pendidikan_admin/editsmp') ?>" method="POST">
  <input type="hidden" name="id_smp" value="<?= $smp['id_smp'] ?>">
  <div class="mb-3">
   <label for="exampleFormControlInput1" class="form-label">Nama Sekolah</label>
   <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Nama Sekolah" value="<?= $smp['nama'] ?>">
  </div>
  <div class="mb-3">
   <label for="exampleFormControlInput1" class="form-label">Alamat</label>
   <input type="text" name="alamat" class="form-control" id="exampleFormControlInput1" placeholder="Alamat" value="<?= $smp['alamat'] ?>">
  </div>
  <div class="mb-3">
   <label for="exampleFormControlInput1" class="form-label">Tahun Masuk</label>
   <input type="number" name="thn_masuk" class="form-control" id="exampleFormControlInput1" placeholder="Tahun Masuk" value="<?= $smp['thn_masuk'] ?>">
  </div>
  <div class="mb-3">
   <label for="exampleFormControlInput1" class="form-label">Tahun Lulus</label>
   <input type="number" name="thn_lulus" class="form-control" id="exampleFormControlInput1" placeholder="Umur" value="<?= $smp['thn_lulus'] ?>">
  </div>
  <div class="mb-3">
   <button type='submit' class="btn btn-primary">Edit</button>
  </div>
 </form>

</div>