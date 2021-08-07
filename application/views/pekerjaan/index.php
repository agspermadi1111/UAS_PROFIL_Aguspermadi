 <!-- ======= Services Section ======= -->
 <section id="services" class="services-mf pt-5 route">
     <div class="container">
         <div class="row">
             <div class="col-sm-12">
                 <div class="title-box text-center">
                     <h3 class="title-a">
                         Pekerjaan
                     </h3>
                     <p class="subtitle-a">

                     </p>
                     <div class="line-mf"></div>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-md-4">
                 <div class="service-box">
                     <div class="service-ico">
                         <span class="ico-circle"><i class="bi bi-briefcase"></i></span>
                     </div>
                     <div class="service-content">
                         <?php
                            foreach ($Allpekerjaan as $pekerjaan) {
                            ?>
                             <h2 class="s-title"><?= $pekerjaan['nama_pekerjaan']; ?></h2>
                             <p class="s-description text-center">
                             <p><span class="title-s">Nama Perusahaan: </span> <span><?= $pekerjaan['nama_perusahaan']; ?></span></p>
                             <p><span class="title-s">Tahun Masuk: </span> <span><?= $pekerjaan['thn_masuk']; ?></span></p>
                             <p><span class="title-s">Tahun Keluar: </span> <span><?= $pekerjaan['thn_keluar']; ?></span></p>
                             </p>
                         <?php } ?>
                     </div>
                 </div>
             </div>
             <div class="col-md-4">
                 <div class="service-box">
                     <div class="service-ico">
                         <span class="ico-circle"><i class="bi bi-card-checklist"></i></span>
                     </div>
                     <div class="service-content">
                         <?php
                            foreach ($Allpekerjaan1 as $pekerjaan1) {
                            ?>
                             <h2 class="s-title"><?= $pekerjaan1['nama_pekerjaan']; ?></h2>
                             <p class="s-description text-center">
                             <p><span class="title-s">Nama Perusahaan: </span> <span><?= $pekerjaan1['nama_perusahaan']; ?></span></p>
                             <p><span class="title-s">Tahun Masuk: </span> <span><?= $pekerjaan1['thn_masuk']; ?></span></p>
                             <p><span class="title-s">Tahun Keluar: </span> <span><?= $pekerjaan1['thn_keluar']; ?></span></p>
                             </p>
                         <?php } ?>
                     </div>
                 </div>
             </div>


         </div>
     </div>
 </section><!-- End Services Section -->