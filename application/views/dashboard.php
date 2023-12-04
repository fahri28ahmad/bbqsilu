<?php $this->load->view("tampilan/luar/head")?>
  <body>
  <?php $this->load->view("tampilan/luar/nav_head")?>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item active"><a href="<?php echo base_url();?>" class="nav-link">Home</a></li>
        <!-- <li class="nav-item"><a href="<?php echo base_url();?>home/member" class="nav-link">Cek Member</a></li> -->
        <!-- <li class="nav-item"><a href="#" class="nav-link">Services</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Agent</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Listing</a></li> -->
        <!-- <li class="nav-item"><a href="#" class="nav-link">Artikel</a></li> -->
        <!-- <li class="nav-item"><a href="<?php echo base_url();?>home/Contact" class="nav-link">Kontak</a></li> -->
        </ul>
    </div>
    </div>
</nav>
    <div class="hero-wrap" style="background-image: url('<?php echo base_url();?>public/as/images/baru/silubg.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="overlay-2"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-center align-items-center">
          <div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-end">
            <div class="text text-center w-100">
              <h1 style="font-family: tahoma;color:#000000;-webkit-text-stroke: 1px white;" class="mb-4"><b>BARBEQUE<br>SILU</b></h1>
              <h1 style="font-family: tahoma;color:#000000;-webkit-text-stroke: 1px white;" class="mb-4">Segera Pesan sebelum kehabisan!</h1>
              <!-- <p><a href="#" class="btn btn-primary py-3 px-4">PESAN SEKARANG DI BAWAH</a></p> -->
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
            <center>
            <?php if( $this->session->flashdata("flash") ):?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  Data <strong>Berhasil!</strong> Dikirim Dan tunggu Tim kami akan proses data anda secepatnya. <?php $this->session->flashdata("flash");?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            </center>
          </div>
        </div>
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
                      <label for="#">PAX</label>
                      <div class="form-field">
                        <div class="select-wrap">
                          <div class="icon"><span class=""></span></div>
                          <input type="text" class="form-control" name="pax" placeholder="pax" required>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg align-self-end">
                    <div class="form-group">
                      <div class="form-field">
                        <input type="submit" value="kirim" class="form-control btn btn-primary">
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

 <?php $this->load->view("tampilan/luar/footer")?>
