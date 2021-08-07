 <!-- ======= Services Section ======= -->
 <section id="services" class="services-mf pt-5 route">
     <div class="container">
         <div class="row">
             <div class="col-sm-12">
                 <div class="title-box text-center">
                     <h3 class="title-a">
                         Pendidikan
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
                            foreach ($Allsd as $sd) {
                            ?>
                             <h2 class="s-title"><?= $sd['nama']; ?></h2>
                             <p class="s-description text-center">
                             <p><span class="title-s">ALAMAT: </span> <span><?= $sd['alamat']; ?></span></p>
                             <p><span class="title-s">Tahun Masuk: </span> <span><?= $sd['thn_masuk']; ?></span></p>
                             <p><span class="title-s">Tahun Lulus: </span> <span><?= $sd['thn_lulus']; ?></span></p>

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
                            foreach ($Allsmp as $smp) {
                            ?>
                             <h2 class="s-title"><?= $smp['nama']; ?></h2>
                             <p class="s-description text-center">
                             <p><span class="title-s">ALAMAT: </span> <span><?= $smp['alamat']; ?></span></p>
                             <p><span class="title-s">Tahun Masuk: </span> <span><?= $smp['thn_masuk']; ?></span></p>
                             <p><span class="title-s">Tahun Lulus: </span> <span><?= $smp['thn_lulus']; ?></span></p>
                             </p>
                         <?php } ?>
                     </div>
                 </div>
             </div>

             <div class="col-md-4">
                 <div class="service-box">
                     <div class="service-ico">
                         <span class="ico-circle"><i class="bi bi-binoculars"></i></span>
                     </div>
                     <div class="service-content">
                         <?php
                            foreach ($Allsma as $sma) {
                            ?>
                             <h2 class="s-title"><?= $sma['nama']; ?></h2>
                             <p class="s-description text-center">
                             <p><span class="title-s">ALAMAT: </span> <span><?= $sma['alamat']; ?></span></p>
                             <p><span class="title-s">Tahun Masuk: </span> <span><?= $sma['thn_masuk']; ?></span></p>
                             <p><span class="title-s">Tahun Lulus: </span> <span><?= $sma['thn_lulus']; ?></span></p>
                             </p>
                         <?php } ?>
                     </div>
                 </div>
             </div>
             <div class="col-md-4">
                 <div class="service-box">
                     <div class="service-ico">
                         <span class="ico-circle"><i class="bi bi-brightness-high"></i></span>
                     </div>
                     <div class="service-content">
                         <?php
                            foreach ($Alluniv as $univ) {
                            ?>
                             <h2 class="s-title"><?= $univ['nama']; ?></h2>
                             <p class="s-description text-center">
                             <p><span class="title-s">ALAMAT: </span> <span><?= $univ['alamat']; ?></span></p>
                             <p><span class="title-s">PRODI: </span> <span><?= $univ['prodi']; ?></span></p>
                             <p><span class="title-s">Tahun Masuk: </span> <span><?= $univ['thn_masuk']; ?></span></p>
                             <p><span class="title-s">Tahun Lulus: </span> <span><?= $univ['thn_lulus']; ?></span></p>
                             </p>
                         <?php } ?>
                     </div>
                 </div>
             </div>

         </div>
     </div>
 </section><!-- End Services Section -->