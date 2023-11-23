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
    
    <section class="hero-wrap hero-wrap-2 ftco-degree-bg js-fullheight" style="background-image: url('<?php echo base_url();?>public/as/images/baru/COVERUTAMA.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="overlay-2"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 mb-5 text-center">
            <h1 class="mb-3 bread">Detail</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url();?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Detail<i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-property-details">
      <div class="container">
      	<div class="row justify-content-center">
      		<div class="col-md-12">
      			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						  <ol class="carousel-indicators">
						    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
						  </ol>
						  <div class="carousel-inner">
						    <div class="carousel-item active">
						      <img src="<?php echo base_url();?>public/as/images/8/1.jpg" class="d-block w-100" alt="...">
						    </div>
						    <div class="carousel-item">
						      <img src="<?php echo base_url();?>public/as/images/8/2.jpg" class="d-block w-100" alt="...">
						    </div>
						    <div class="carousel-item">
						      <img src="<?php echo base_url();?>public/as/images/8/3.jpg" class="d-block w-100" alt="...">
						    </div>
						    <div class="carousel-item">
						      <img src="<?php echo base_url();?>public/as/images/8/4.jpg" class="d-block w-100" alt="...">
						    </div>
						    <div class="carousel-item">
						      <img src="<?php echo base_url();?>public/as/images/8/5.jpg" class="d-block w-100" alt="...">
						    </div>
						    <div class="carousel-item">
						      <img src="<?php echo base_url();?>public/as/images/8/6.jpg" class="d-block w-100" alt="...">
						    </div>
						  </div>
						  <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </button>
						  <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </button>
						</div>
      			<div class="property-details">
      				<!-- <div class="img rounded" style="background-image: url(<?php echo base_url();?>public/as/images/baru/CLUSTER7.jpg);"></div> -->
      				<div class="text">
      					<h2>Aqila 8</h2>
      					<span class="subheading">Pakatto - Patalasang, Kab Gowa</span>
      				</div>
      			</div>
      		</div>
      	</div>
      	
      	<div class="row">
      		<div class="col-md-12 pills">
						<div class="bd-example bd-example-tabs">
							<div class="d-flex">
							  <ul class="nav nav-pills mb-2" id="pills-tab" role="tablist">

							    <li class="nav-item">
							      <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true">Fitur</a>
							    </li>
							    <li class="nav-item">
							      <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill" href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer" aria-expanded="true">Keterangan</a>
							    </li>
							    <li class="nav-item">
							      <a class="nav-link" id="pills-review-tab" data-toggle="pill" href="#pills-review" role="tab" aria-controls="pills-review" aria-expanded="true">Ketersediaan</a>
							    </li>
							  </ul>
							</div>
						  <div class="tab-content" id="pills-tabContent">
						    <div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
						    	<div class="row">
						    		<div class="col-md-4">
						    			<ul class="features">
						    				<li class="check"><span class="ion-ios-checkmark-circle"></span>1. Pondasi keliling</li>
						    				<li class="check"><span class="ion-ios-checkmark-circle"></span>2. Prasasti (Simbol Kepemilikan)</li>
						    				<li class="check"><span class="ion-ios-checkmark-circle"></span>3. Pemeliharaan Kavling per 3 bulan selamat di cicil</li>
						    				<li class="check"><span class="ion-ios-checkmark-circle"></span>4. 1 buah tanaman bunga</li>
						    				<li class="check"><span class="ion-ios-checkmark-circle"></span>5. Gratis Akad Notaris (PPJB, AJB, SHM)</li>
						    			</ul>
						    		</div>
						    		<div class="col-md-4">
						    			<ul class="features">
						    				<li class="check"><span class="ion-ios-checkmark-circle"></span>luas 126 dan 112 meter persegi</li>
						    				<li class="check"><span class="ion-ios-checkmark-circle"></span>Sertifikat yang akan di dapat adalah SHM</li>
						    			</ul>
						    		</div>
						    	</div>
						    </div>

						    <div class="tab-pane fade" id="pills-manufacturer" role="tabpanel" aria-labelledby="pills-manufacturer-tab">
						      <p>Capital Gain : Anda akan mendapatkan keuntungan dari kenaikan harga tanah di Kavling tersebut..</p>
									<p>Prospek Jelas : Prospek kedepannya sudah jelas berada dalam pusat pengembangan kota baru, kota Kab.Gowa. Investasi Tanah Kavling yang tidak ada ruginya.</p>
						    </div>

						    <div class="tab-pane fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">
						      <div class="row">
							   		<div class="col-md-7">
							   			<h3 class="head">Coming Soon</h3>
							   			
							   		</div>
							   		<div class="col-md-5">
							   			<h3 class="head">Lokasi yang tersedia</h3>

							   		</div>
							   	</div>
						    </div>
						  </div>
						</div>
		      </div>
				</div>
      </div>
    </section>
<?php $this->load->view("tampilan/luar/footer")?>