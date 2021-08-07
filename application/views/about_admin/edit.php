 <div class="mt-3">
  <form action="<?= base_url('about_admin/editabout') ?>" method="POST">
   <input type="hidden" name="id_about" value="<?= $about['id_about'] ?>">
   <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Nama</label>
    <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Nama" value="<?= $about['nama'] ?>">
   </div>
   <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Profile</label>
    <input type="text" name="profile" class="form-control" id="exampleFormControlInput1" placeholder="Alamat" value="<?= $about['profile'] ?>">
   </div>
   <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Email</label>
    <input type="text" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Email" value="<?= $about['email'] ?>">
   </div>
   <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Phone</label>
    <input type="text" name="phone" class="form-control" id="exampleFormControlInput1" placeholder="Phone" value="<?= $about['phone'] ?>">
   </div>
   <div class="mb-3">
    <button type='submit' class="btn btn-primary">Edit</button>
   </div>
  </form>

 </div>