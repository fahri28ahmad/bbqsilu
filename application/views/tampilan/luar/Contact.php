<?php $this->load->view("tampilan/luar/head")?>
  <body>
	<?php $this->load->view("tampilan/luar/nav_head")?>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="<?php echo base_url();?>" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="<?php echo base_url();?>home/about" class="nav-link">Tentang Kami</a></li>
        <!-- <li class="nav-item"><a href="#" class="nav-link">Services</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Agent</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Listing</a></li> -->
        <!-- <li class="nav-item"><a href="#" class="nav-link">Artikel</a></li> -->
        <li class="nav-item active"><a href="<?php echo base_url();?>home/Contact" class="nav-link">Kontak</a></li>
        </ul>
    </div>
    </div>
</nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2 ftco-degree-bg js-fullheight" style="background-image: url('<?php echo base_url();?>public/as/images/baru/asarnim.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="overlay-2"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 mb-5 text-center">
            <h1 class="mb-3 bread">Kontak</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url();?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Kontak <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info justify-content-center">
        	<div class="col-md-8">
        		<div class="row mb-5">
		          <div class="col-md-4 text-center py-4">
		          	<div class="icon mb-3 d-flex align-items-center justify-content-center">
		          		<span class="icon-map-o"></span>
		          	</div>
		            <p><span>Alamat :</span> Mutiara Indah Village Ruko A/18, Jl. H. M. Yasin Limpo - Gowa</p>
		          </div>
		          <div class="col-md-4 text-center py-4">
		          	<div class="icon mb-3 d-flex align-items-center justify-content-center">
		          		<span class="icon-mobile-phone"></span>
		          	</div>
		            <p><span>Phone:</span> <a href="tel://62811465655">  +62 812 4441 0080</a></p>
		          </div>
		          <div class="col-md-4 text-center py-4">
		          	<div class="icon mb-3 d-flex align-items-center justify-content-center">
		          		<span class="icon-envelope-o"></span>
		          	</div>
		            <p><span>Email:</span> <a href="mailto:info@yoursite.com"> info@asarnimandiri.com</a></p>
		          </div>
		        </div>
          </div>
        </div>
        <div class="row block-9 justify-content-center mb-5">
          <div class="col-md-6 align-items-stretch d-flex">
            <form action="#" class="bg-light p-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Nama">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Pesan"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Kirim Pesan" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          </div>
          <div class="col-md-6 align-items-stretch d-flex">
        		<div id="map" class="bg-white border"></div>
          </div>
        </div>
      </div>
    </section>
 <?php $this->load->view("tampilan/luar/footer")?>