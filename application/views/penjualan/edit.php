<?php $this->load->view("tampilan/head")?>

<body> 
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php $this->load->view("tampilan/partical")?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <?php $this->load->view("tampilan/slidebar")?>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <?php if( $this->session->flashdata("flash") ):?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              Data <strong>Berhasil!</strong> Disimpan <?php $this->session->flashdata("flash");?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
          <?php endif; ?>
          </div>
          <div class="row"> 
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Ubah Data Penjualan</h4>
                  <p class="card-description">
                    -
                  </p>
                  <form class="forms-sample" method="post" action="<?php echo base_url();?>penjualan/updatepenjualan/<?php echo $id;?>">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label" for="exampleSelectGender">Waktu </label>
                          <div class="col-sm-6">
                            <input type="Date" class="Date form-control" placeholder="dd/mm/yyyy"/ name="waktu" value="<?php echo $data[0]->waktu;?>">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label">Nama User</label>
                          <div class="col-sm-6">
                            <div class="input-group-prepend">
                              <span class="input-group-text"></span>
                                <input type="text" onfocus="this.placeholder = ''" class="form-control" id="exampleInputName1" name="namau" value="<?php echo $data[0]->nama_user;?>" placeholder="Nama User"aria-describedby="basic-addon1"  required>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label">Blok Aqila</label>
                          <div class="col-sm-6">
                            <div class="input-group-prepend">
                              <span class="input-group-text"></span>
                                <input type="text" onfocus="this.placeholder = ''" class="form-control" value="<?php echo $data[0]->blok;?>" id="exampleInputName1" name="namablk" value="AQ# BLOK # NO.# " placeholder="Sales" aria-describedby="basic-addon1">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label">Kontrak </label>
                          <div class="col-sm-6">
                            <div class="input-group-prepend">
                              <span class="input-group-text"></span>
                                <!-- <input type="text" onfocus="this.placeholder = ''" class="form-control" id="exampleInputName1" name="sumber" placeholder="Sumber"aria-describedby="basic-addon1" required > -->
                                <select name="Kontrak" placeholder="Kontrak" class="custom-select" id="inputGroupSelect03" required>
                                <option value="<?php echo $data[0]->kontrak;?>"><?php echo $data[0]->kontrak;?> TAHUN</option>
                                <option value="1">1 TAHUN</option>
                                <option value="2">2 TAHUN</option>
                                <option value="3">3 TAHUN</option>
                                <option value="4">4 TAHUN</option>
                                <option value="5">5 TAHUN</option>
                                <option value="6">6 TAHUN</option>
                                <option value="7">7 TAHUN</option>
                                <option value="8">8 TAHUN</option>
                                <option value="9">9 TAHUN</option>
                                <option value="10">10 TAHUN</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label">Jatuh Tempo</label>
                          <div class="col-sm-6">
                            <div class="input-group-prepend">
                              <span class="input-group-text"></span>
                                <input type="text" onfocus="this.placeholder = ''" class="form-control" value="<?php echo $data[0]->jatuh_tempo;?>" id="exampleInputName1" name="tempo" value="TGL # " placeholder="Sales" aria-describedby="basic-addon1">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label">Kredit</label>
                          <div class="col-sm-6">
                            <div class="input-group-prepend">
                              <span class="input-group-text"></span>
                                <input type="text" onfocus="this.placeholder = ''" class="form-control" value="<?php echo $data[0]->kredit;?>" id="exampleInputName1" name="kredit" placeholder="Rp."aria-describedby="basic-addon1" value="" required>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label">MARKETER</label>
                          <div class="col-sm-6">
                            <div class="input-group-prepend">
                              <span class="input-group-text"></span>
                                <input type="text" onfocus="this.placeholder = ''" class="form-control" value="<?php echo $data[0]->sales;?>" id="exampleInputName1" name="market" placeholder="MARKETER"aria-describedby="basic-addon1" required >
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label">Angsuran terakhir</label>
                          <div class="col-sm-6">
                            <div class="input-group-prepend">
                              <span class="input-group-text"></span>
                                <input type="text" value="<?php echo $data[0]->angsuran_t;?>" onfocus="this.placeholder = ''" class="form-control" id="exampleInputName1" name="angt" placeholder="terakhir"aria-describedby="basic-addon1" value="" required>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label">
                            Sisah Angsuran</label>
                          <div class="col-sm-6">
                            <div class="input-group-prepend">
                              <span class="input-group-text"></span>
                                <input type="text" value="<?php echo $data[0]->angsuran_s;?>" onfocus="this.placeholder = ''" class="form-control" id="exampleInputName1" name="angs" placeholder="sisah"aria-describedby="basic-addon1" required >
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label">Tunggakan</label>
                          <div class="col-sm-6">
                            <div class="input-group-prepend">
                              <span class="input-group-text"></span>
                                <input type="text" value="<?php echo $data[0]->tunggakan;?>" onfocus="this.placeholder = ''" class="form-control" id="exampleInputName1" name="tunggakan" placeholder="terakhir"aria-describedby="basic-addon1" value="" required>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        
        <?php $this->load->view("tampilan/footer")?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <!-- endinject -->
  <!-- inject:js -->
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
  <script src="<?php echo base_url();?>public/vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="<?php echo base_url();?>public/vendors/chart.js/Chart.min.js"></script>
  <script src="<?php echo base_url();?>public/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="<?php echo base_url();?>public/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?php echo base_url();?>public/js/off-canvas.js"></script>
  <script src="<?php echo base_url();?>public/js/hoverable-collapse.js"></script>
  <script src="<?php echo base_url();?>public/js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?php echo base_url();?>public/js/dashboard.js"></script>
  <script src="<?php echo base_url();?>public/js/data-table.js"></script>
  <script src="<?php echo base_url();?>public/js/jquery.dataTables.js"></script>
  <script src="<?php echo base_url();?>public/js/dataTables.bootstrap4.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
