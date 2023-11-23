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
                  <h4 class="card-title">Penginputan Data User</h4>
                  <p class="card-description">
                  </p>
                  <form class="forms-sample" method="post" action="<?php echo base_url();?>fungsi/insert_pendapatan">
                    <!-- <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label" for="exampleSelectGender">Waktu</label>
                          <div class="col-sm-9">
                            <input type="Date" class="Date form-control" placeholder="dd/mm/yyyy"/ name="tgl_in" required>
                          </div>
                        </div>
                      </div>
                    </div> -->
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label">Nama User</label>
                          <div class="col-sm-6">
                            <div class="input-group-prepend">
                              <span class="input-group-text"></span>
                                <input type="text" onfocus="this.placeholder = ''" class="form-control" id="exampleInputName1" name="namau" placeholder="Nama User"aria-describedby="basic-addon1"  required>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label"> Sumber</label>
                          <div class="col-sm-6">
                            <!-- <div class="input-group mb-3">
                              <div class="input-group-prepend">
                              </div>
                              <select name="namaj" class="custom-select" id="inputGroupSelect01">
                                <option selected>Choose...</option>
                                <?php foreach($pilihjeti as $l){ $v++;
                          if ($user['akses'] == '0' || $l->nama_jeti==$user['akses']) { ?>
                                <option value="<?php echo $l->nama_jeti;?>"> <?php echo $l->nama_jeti;?> </option>
                                <?php }}; ?>
                              </select>
                            </div> -->
                            <div class="input-group-prepend">
                              <span class="input-group-text"></span>
                                <input type="text" onfocus="this.placeholder = ''" class="form-control" id="exampleInputName1" name="namas" value="<?php echo $user['name'];?>" placeholder="Sumber" aria-describedby="basic-addon1">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label">Film</label>
                          <div class="col-sm-6">
                            <div class="input-group-prepend">
                              <span class="input-group-text"></span>
                                <!-- <input type="text" onfocus="this.placeholder = ''" class="form-control" id="exampleInputName1" name="sumber" placeholder="Sumber"aria-describedby="basic-addon1" required > -->
                                <select name="sumber" placeholder="sumber" class="custom-select" id="inputGroupSelect03" required>
                                <option value=""></option>
                                <?php foreach($datafilm as $fl){ $i++;
                           ?>
                                <option value="<?php echo $fl->id_film;?>"><?php echo $fl->date;?>||<?php echo $fl->nama_f;?></option>
<!--                                 <option value="FAST & FURIOUS 9">FAST & FURIOUS 9</option>
                                <option value="WE HAVE A GHOST">WE HAVE A GHOST</option>
                                <option value="MEGAN">MEGAN</option>
                                <option value="Missing">Missing</option>
                                <option value="Inside">Inside</option>
                                <option value="The Menu">The Menu</option>
                                <option value="Ambush">Ambush</option> -->
                                <?php }?>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label">No Tlp</label>
                          <div class="col-sm-6">
                            <div class="input-group-prepend">
                              <span class="input-group-text"></span>
                                <input type="text" onfocus="this.placeholder = ''" class="form-control" id="exampleInputName1" name="notlp" placeholder="Notlp"aria-describedby="basic-addon1" value="" required>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label">Keterangan</label>
                          <div class="col-sm-6">
                            <div class="input-group-prepend">
                              <span class="input-group-text"></span>
                                <input type="text" value="-" onfocus="this.placeholder = ''" class="form-control" id="exampleInputName1" name="ket" placeholder="ket"aria-describedby="basic-addon1" required >
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label">PAX</label>
                          <div class="col-sm-6">
                            <div class="input-group-prepend">
                              <select name="pax" class="custom-select" id="inputGroupSelect01">
                                <option value="1">1</option>
                                <option value="2">2</option> 
                                <option value="3">3</option> 
                                <option value="4">4</option> 
                                <option value="5">5</option> 
                                <option value="6">6</option> 
                                <option value="7">7</option> 
                                <option value="8">8</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                  </form> -->
                </div>
                <div class="card">  
                  <div class="card-body">
                    <h4 class="card-title">Payment group</h4>
                    <p class="card-description">
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label">Metode pembayaran</label>
                          <div class="col-sm-6">
                            <div class="input-group-prepend">
                              <select name="metodp" class="custom-select" id="inputGroupSelect01">
                                <option value="CASH" selected>CASH</option>
                                <option value="TRANSFER">TRANSFER</option>
                                <option value="CASH TO ROOM">CASH TO ROOM</option>
                                <option value="COMPLIMENT">COMPLIMENT</option> 
                                 
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label">Status</label>
                          <div class="col-sm-6">
                            <div class="input-group-prepend">
                              <select name="status" class="custom-select" id="inputGroupSelect01">
                                <option value="0" selected>NOT PROSES</option>
                                <option value="1">ON PROSES</option>
                                <option value="2">DONE</option> 
                              </select>
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