<?php $this->load->view("tampilan/luar/head")?>
  <body>
  <?php $this->load->view("tampilan/luar/nav_head")?>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item active"><a href="<?php echo base_url();?>" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="<?php echo base_url();?>home/about" class="nav-link">Tentang Kami</a></li>
        <!-- <li class="nav-item"><a href="#" class="nav-link">Services</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Agent</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Listing</a></li> -->
        <!-- <li class="nav-item"><a href="#" class="nav-link">Artikel</a></li> -->
        <li class="nav-item"><a href="<?php echo base_url();?>home/Contact" class="nav-link">Kontak</a></li>
        </ul>
    </div>
    </div>
</nav>
    <div class="hero-wrap" style="background-image: url('<?php echo base_url();?>public/as/images/baru/asarnim.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="overlay-2"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-center align-items-center">
          <div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-end">
            <div class="text text-center w-100">
              <h1 style="font-family: tahoma;color:#000000;" class="mb-4"><b>Cari Tanah Kavling<br>Tanpa DP ?</b></h1>
              <h1 style="font-family: tahoma;color:#000000;" class="mb-4">Segera dapatkan promonya sebelum kehabisan!</h1>
              <p><a href="https://wa.me/6282189705433?text=Halo%20.....%20Boleh%20Info%20*Tanah Kavlingnya%20 yang sedang di pasarkan?*" class="btn btn-primary py-3 px-4">Wa Sekarang</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="mouse">
        <a href="#" class="mouse-icon">
          <div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
        </a>
      </div>
    </div>


    <section class="ftco-section ftco-no-pb">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="search-wrap-1 ftco-animate">
              <form action="<?php echo base_url();?>home/input" method="post" class="search-property-1">
                <div class="row">
                  <div class="col-lg align-items-end">
                    <div class="form-group">
                      <label for="#">Nama</label>
                      <div class="form-field">
                        <input type="text" class="form-control" name="nama" placeholder="Nama" required>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg align-items-end">
                    <div class="form-group">
                      <label for="#">No Wa/Tlp</label>
                      <div class="form-field">
                        <div class="select-wrap">
                          <div class="icon"><span class="ios-call"></span></div>
                          <input type="text" class="form-control" name="notlp" placeholder="Notlp" required>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg align-items-end">
                    <div class="form-group">
                      <label for="#">Budget</label>
                      <div class="form-field">
                        <div class="select-wrap">
                          <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                          <select name="bjeting" id="bjeting" class="form-control">
                            <option value="1 - 3 Juta">1 - 3 Juta</option>
                            <option value="3 - 5 Juta">3 - 5 Juta</option>
                            <option value="7 - 9 Juta">7 - 9 Juta</option>
                            <option value="Cash">Cash</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg align-self-end">
                    <div class="form-group">
                      <div class="form-field">
                        <input type="submit" value="Dapatkan Infonya" class="form-control btn btn-primary">
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section goto-here">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
            <h2 class="mb-2">Penawaran Eksklusif Untuk Anda</h2>
            <span class="subheading">Tanah Kavling</span>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="property-wrap ftco-animate">
              <div class="img d-flex align-items-center justify-content-center" style="background-image: url(<?php echo base_url();?>public/as/images/9/1.jpg);">
                <a href="<?php echo base_url();?>home/properties2" class="icon d-flex align-items-center justify-content-center btn-custom">
                  <span class="ion-ios-link"></span>
                </a>
              </div>
              <div class="text">
                <p class="price mb-3"><span class="old-price">900.000</span><span class="orig-price">Rp800.000<small>/Bulan</small></span></p>
                <h3 class="mb-0"><a href="<?php echo base_url();?>home/properties2">Aqila 9</a></h3>
                <span class="location d-inline-block mb-3"><a href="https://goo.gl/maps/GhaC3ppXgzMSV87v7"><i class="ion-ios-pin mr-2"></i>Pakatto - Patalasang, Kab Gowa</a></span>
                <ul class="property_list">
                  <li>Kav rumah 7 x 16 = 112 M2<br>  Kav rumah 8 x 15 = 120 M2<br>Kav ruko  7 x 15 = 105 M2</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="property-wrap ftco-animate">
              <div class="img d-flex align-items-center justify-content-center" style="background-image: url(<?php echo base_url();?>public/as/images/8/1.jpg);">
                <a href="<?php echo base_url();?>home/properties1" class="icon d-flex align-items-center justify-content-center btn-custom">
                  <span class="ion-ios-link"></span>
                </a>
              </div>
              <div class="text">
                <p class="price mb-3"><span class="old-price">900.000</span><span class="orig-price">Rp800.000<small>/Bulan</small></span></p>
                <h3 class="mb-0"><a href="<?php echo base_url();?>home/properties1">Aqila 8</a></h3>
                <span class="location d-inline-block mb-3"><a href="https://goo.gl/maps/nzMMsfUyA1DvLMV28"><i class="ion-ios-pin mr-2"></i>Pakatto - Patalasang, Kab Gowa</a></span>
                <ul class="property_list">
                  <li>Kav rumah 7 x 16 = 112 M2<br></li>
                  <!-- <li><span class="flaticon-bed"></span>3</li>
                  <li><span class="flaticon-bathtub"></span>2</li>
                  <li><span class="flaticon-floor-plan"></span>1,878 sqft</li> -->
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="property-wrap ftco-animate">
              <div class="img d-flex align-items-center justify-content-center" style="background-image: url(<?php echo base_url();?>public/as/images/7/1.jpg);">
                <a href="<?php echo base_url();?>home/properties" class="icon d-flex align-items-center justify-content-center btn-custom">
                  <span class="ion-ios-link"></span>
                </a>
              </div>
              <div class="text">
                <p class="price mb-3"><span class="old-price">900.000</span><span class="orig-price">Rp800.000<small>/Bulan</small></span></p>
                <h3 class="mb-0"><a href="<?php echo base_url();?>home/properties">Aqila 7</a></h3>
                <span class="location d-inline-block mb-3"><a href="https://goo.gl/maps/cJL6NnHmp4ns191x8"><i class="ion-ios-pin mr-2"></i>Timbuseng - Patalasang, Kab Gowa</a></span>
                <ul class="property_list">
                  <li>Kav rumah 7 x 16 = 112 M2<br>  Kav rumah 8 x 15 = 120 M2<br>Kav ruko  7 x 15 = 105 M2</li>
                  <!-- <li><span class="flaticon-bed"></span>3</li>
                  <li><span class="flaticon-bathtub"></span>2</li>
                  <li><span class="flaticon-floor-plan"></span>1,878 sqft</li> -->
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
            <span class="subheading">Price List</span>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="property-wrap ftco-animate">
              <div class="img d-flex align-items-center justify-content-center" style="background-image: url(<?php echo base_url();?>public/as/images/baru/A9.jpg);">
                <a href="<?php echo base_url();?>home/properties" class="icon d-flex align-items-center justify-content-center btn-custom">
                  <span class="ion-ios-link"></span>
                </a>
              </div>
              <div class="text">
                <h3 class="mb-0"><a href="properties-single.html">Aqila 9</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="property-wrap ftco-animate">
              <div class="img d-flex align-items-center justify-content-center" style="background-image: url(<?php echo base_url();?>public/as/images/baru/A8.jpg);">
                <a href="properties-single.html" class="icon d-flex align-items-center justify-content-center btn-custom">
                  <span class="ion-ios-link"></span>
                </a>
              </div>
              <div class="text">
                <h3 class="mb-0"><a href="properties-single.html">Aqila 8</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="property-wrap ftco-animate">
              <div class="img d-flex align-items-center justify-content-center" style="background-image: url(<?php echo base_url();?>public/as/images/baru/A7.jpg);">
                <a href="properties-single.html" class="icon d-flex align-items-center justify-content-center btn-custom">
                  <span class="ion-ios-link"></span>
                </a>
              </div>
              <div class="text">
                <h3 class="mb-0"><a href="properties-single.html">Aqila 7</a></h3>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
            <span class="subheading">SitePlan</span>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="property-wrap ftco-animate">
              <div class="img d-flex align-items-center justify-content-center" style="background-image: url(<?php echo base_url();?>public/as/images/baru/A9.jpg);">
                <a href="properties-single.html" class="icon d-flex align-items-center justify-content-center btn-custom">
                  <span class="ion-ios-link"></span>
                </a>
              </div>
              <div class="text">
                <h3 class="mb-0"><a href="properties-single.html">Aqila 9</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="property-wrap ftco-animate">
              <div class="img d-flex align-items-center justify-content-center" style="background-image: url(<?php echo base_url();?>public/as/images/baru/A8.jpg);">
                <a href="properties-single.html" class="icon d-flex align-items-center justify-content-center btn-custom">
                  <span class="ion-ios-link"></span>
                </a>
              </div>
              <div class="text">
                <h3 class="mb-0"><a href="properties-single.html">Aqila 8</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="property-wrap ftco-animate">
              <div class="img d-flex align-items-center justify-content-center" style="background-image: url(<?php echo base_url();?>public/as/images/baru/A7.jpg);">
                <a href="properties-single.html" class="icon d-flex align-items-center justify-content-center btn-custom">
                  <span class="ion-ios-link"></span>
                </a>
              </div>
              <div class="text">
                <h3 class="mb-0"><a href="properties-single.html">Aqila 7</a></h3>
              </div>
            </div>
          </div>
        </div> -->
      </div>
    </section>

    <section class="ftco-section ftco-fullwidth">
      <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
            <span class="subheading">Services</span>
            <h2 class="mb-2">Mengapa Memilih Kami?</h2>
          </div>
        </div>
      </div>
      <div class="container-fluid px-0">
        <div class="row d-md-flex text-wrapper align-items-stretch">
          <div class="one-half mb-md-0 mb-4 img d-flex align-self-stretch" style="background-image: url('<?php echo base_url();?>public/as/images/baru/Asarnil.jpg');"></div>
          <div class="one-half half-text d-flex justify-content-end align-items-center">
            <div class="text-inner pl-md-5">
              <div class="row d-flex">
                <div class="col-md-12 d-flex align-self-stretch ftco-animate">
                  <div class="media block-6 services-wrap d-flex">
                    <div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-piggy-bank"></span></div>
                    <div class="media-body pl-4">
                      <h3>DP 0%</h3>
                      <p>Hanya membayar 2 kali anggsuran, anda sudah bisa memiliki kavling Eksklusif siap bangun.</p>
                    </div>
                  </div>      
                </div>
                <div class="col-md-12 d-flex align-self-stretch ftco-animate">
                  <div class="media block-6 services-wrap d-flex">
                    <div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-wallet"></span></div>
                    <div class="media-body pl-4">
                      <h3>Cicilan Terjangkau</h3>
                      <p>Hanya dengan 800 Ribuan perbualan anda sudah bisa berinvestasi tanah kavling Eksklusif siap bangun.</p>
                    </div>
                  </div>      
                </div>
                <div class="col-md-12 d-flex align-self-stretch ftco-animate">
                  <div class="media block-6 services-wrap d-flex">
                    <div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-file"></span></div>
                    <div class="media-body pl-4">
                      <h3>Legalitas Terjamin</h3>
                      <p>Bebas Biaya-biaya (PPJB, AJB, Pajak BPHTB, SHM-Balik Nama).</p>
                    </div>
                  </div>      
                </div>
                <div class="col-md-12 d-flex align-self-stretch ftco-animate">
                  <div class="media block-6 services-wrap d-flex">
                    <div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-locked"></span></div>
                    <div class="media-body pl-4">
                      <h3>Transaksi Aman</h3>
                      <p>Pembayaran transaksi beli hanya dalam satu akun atas nama perusahaan.</p>
                    </div>
                  </div>      
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<!--     <section class="ftco-counter ftco-section img" id="section-counter">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="305">0</strong>
                <span>Area <br>Population</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="1090">0</strong>
                <span>Total <br>Properties</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="209">0</strong>
                <span>Average <br>House</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text d-flex align-items-center">
                <strong class="number" data-number="67">0</strong>
                <span>Total <br>Branches</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

<!--     <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
            <span class="subheading">Find Properties</span>
            <h2 class="mb-2">Find Properties In Your City</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="listing-wrap img rounded d-flex align-items-end" style="background-image: url(<?php echo base_url();?>public/as/images/listing-1.jpg);">
              <div class="location">
                <span class="rounded">Kota Baru Kab.Gowa</span>
              </div>
              <div class="text">
                <h3><a href="#">100 Property Listing</a></h3>
                <a href="#" class="btn-link">See All Listing <span class="ion-ios-arrow-round-forward"></span></a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="listing-wrap img rounded d-flex align-items-end" style="background-image: url(<?php echo base_url();?>public/as/images/listing-2.jpg);">
              <div class="location">
                <span class="rounded">Kota Baru Kab.Gowa</span>
              </div>
              <div class="text">
                <h3><a href="#">100 Property Listing</a></h3>
                <a href="#" class="btn-link">See All Listing <span class="ion-ios-arrow-round-forward"></span></a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="listing-wrap img rounded d-flex align-items-end" style="background-image: url(<?php echo base_url();?>public/as/images/listing-3.jpg);">
              <div class="location">
                <span class="rounded">Kota Baru Kab.Gowa</span>
              </div>
              <div class="text">
                <h3><a href="#">100 Property Listing</a></h3>
                <a href="#" class="btn-link">See All Listing <span class="ion-ios-arrow-round-forward"></span></a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="listing-wrap img rounded d-flex align-items-end" style="background-image: url(<?php echo base_url();?>public/as/images/listing-4.jpg);">
              <div class="location">
                <span class="rounded">Kota Baru Kab.Gowa</span>
              </div>
              <div class="text">
                <h3><a href="#">100 Property Listing</a></h3>
                <a href="#" class="btn-link">See All Listing <span class="ion-ios-arrow-round-forward"></span></a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="listing-wrap img rounded d-flex align-items-end" style="background-image: url(<?php echo base_url();?>public/as/images/listing-5.jpg);">
              <div class="location">
                <span class="rounded">Kota Baru Kab.Gowa</span>
              </div>
              <div class="text">
                <h3><a href="#">100 Property Listing</a></h3>
                <a href="#" class="btn-link">See All Listing <span class="ion-ios-arrow-round-forward"></span></a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="listing-wrap img rounded d-flex align-items-end" style="background-image: url(<?php echo base_url();?>public/as/images/listing-6.jpg);">
              <div class="location">
                <span class="rounded">New York, USA</span>
              </div>
              <div class="text">
                <h3><a href="#">100 Property Listing</a></h3>
                <a href="#" class="btn-link">See All Listing <span class="ion-ios-arrow-round-forward"></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

<!--     <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Testimonial</span>
            <h2 class="mb-3">Happy Clients</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                      <div class="user-img" style="background-image: url(<?php echo base_url();?>public/as/images/person_1.jpg)"></div>
                      <div class="pl-3">
                        <p class="name">Roger Scott</p>
                        <span class="position">Marketing Manager</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                      <div class="user-img" style="background-image: url(<?php echo base_url();?>public/as/images/person_2.jpg)"></div>
                      <div class="pl-3">
                        <p class="name">Roger Scott</p>
                        <span class="position">Marketing Manager</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                      <div class="user-img" style="background-image: url(<?php echo base_url();?>public/as/images/person_3.jpg)"></div>
                      <div class="pl-3">
                        <p class="name">Roger Scott</p>
                        <span class="position">Marketing Manager</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                      <div class="user-img" style="background-image: url(<?php echo base_url();?>public/as/images/person_1.jpg)"></div>
                      <div class="pl-3">
                        <p class="name">Roger Scott</p>
                        <span class="position">Marketing Manager</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                      <div class="user-img" style="background-image: url(<?php echo base_url();?>public/as/images/person_2.jpg)"></div>
                      <div class="pl-3">
                        <p class="name">Roger Scott</p>
                        <span class="position">Marketing Manager</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->


<!--     <section class="ftco-section ftco-no-pt">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Blog</span>
            <h2>Recent Blog</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
              <div class="text">
                <a href="blog-single.html" class="block-20 img" style="background-image: url('<?php echo base_url();?>public/as/images/image_1.jpg');">
                </a>
                <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <div class="meta mb-3">
                  <div><a href="#">October 17, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
              <div class="text">
                <a href="blog-single.html" class="block-20 img" style="background-image: url('<?php echo base_url();?>public/as/images/image_2.jpg');">
                </a>
                <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <div class="meta mb-3">
                  <div><a href="#">October 17, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
              <div class="text">
                <a href="blog-single.html" class="block-20 img" style="background-image: url('<?php echo base_url();?>public/as/images/image_3.jpg');">
                </a>
                <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <div class="meta mb-3">
                  <div><a href="#">October 17, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
              <div class="text">
                <a href="blog-single.html" class="block-20 img" style="background-image: url('<?php echo base_url();?>public/as/images/image_4.jpg');">
                </a>
                <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <div class="meta mb-3">
                  <div><a href="#">October 17, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>    --> 
 <?php $this->load->view("tampilan/luar/footer")?>
