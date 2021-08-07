 <main id="main">
     <!-- ======= Contact Section ======= -->
     <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
         <div class="overlay-mf"></div>
         <div class="container">
             <div class="row">
                 <div class="col-sm-12">
                     <div class="contact-mf">
                         <div id="contact" class="box-shadow-full">
                             <div class="row">
                                 <div class="col-md-6">
                                     <div class="title-box-2">
                                         <h5 class="title-left">
                                             Send Message Us
                                         </h5>
                                     </div>
                                     <div>
                                         <form action="<?= base_url('contact/simpancontact') ?>" method="POST">
                                             <div class="mb-3">
                                                 <label for="exampleFormControlInput1" class="form-label">Yourname</label>
                                                 <input type="text" name="nama_pengunjung" class="form-control" id="exampleFormControlInput1" placeholder="Nama Pengunjung">
                                             </div>
                                             <div class="mb-3">
                                                 <label for="exampleFormControlInput1" class="form-label">Your Email</label>
                                                 <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
                                             </div>
                                             <div class="mb-3">
                                                 <label for="exampleFormControlInput1" class="form-label">Subject</label>
                                                 <input type="text" name="subject" class="form-control" id="exampleFormControlInput1" placeholder="subject">
                                             </div>
                                             <div class="mb-3">
                                                 <label for="exampleFormControlTextarea1" class="form-label">message</label>
                                                 <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                             </div>
                                             <div class="mb-3">
                                                 <button type='submit' class="btn btn-primary">Save</button>
                                             </div>
                                         </form>
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <div class="title-box-2 pt-4 pt-md-0">
                                         <h5 class="title-left">
                                             Get in Touch
                                         </h5>
                                     </div>
                                     <div class="more-info">
                                         <p class="lead">

                                         </p>
                                         <ul class="list-ico">
                                             <li><span class="bi bi-geo-alt"></span> Cirebon ST Gunung Jati, MA 999</li>
                                             <li><span class="bi bi-phone"></span> (617) 557-0089</li>
                                             <li><span class="bi bi-envelope"></span> contact@AGSZEPHRUS.com</li>
                                         </ul>
                                     </div>
                                     <div class="socials">
                                         <ul>
                                             <li><a href=""><span class="ico-circle"><i class="bi bi-facebook"></i></span></a></li>
                                             <li><a href=""><span class="ico-circle"><i class="bi bi-instagram"></i></span></a></li>
                                             <li><a href=""><span class="ico-circle"><i class="bi bi-twitter"></i></span></a></li>
                                             <li><a href=""><span class="ico-circle"><i class="bi bi-linkedin"></i></span></a></li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section><!-- End Contact Section -->