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
                  <h4 class="card-title">Penginputan Data Keuangan</h4>
                  <p class="card-description">
                    ----
                  </p>
                  <form class="forms-sample" method="post" action="<?php echo base_url();?>uang/updateuang/<?php echo $id;?>">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label" for="exampleSelectGender">Waktu</label>
                          <div class="col-sm-9">
                            <input type="Date" class="Date form-control" placeholder="dd/mm/yyyy"/ name="waktu" value="<?php echo $data[0]->tanggal;?>" required>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label">Transaksi</label>
                          <div class="col-sm-6">
                            <div class="input-group-prepend">
                              <span class="input-group-text"></span>
                                <!-- <input type="text" onfocus="this.placeholder = ''" class="form-control" id="exampleInputName1" name="rank" placeholder="Rank" aria-describedby="basic-addon1" required > -->
                                <select name="transaksi" placeholder="transaksi" class="custom-select" id="inputGroupSelect02" required>
                                  <option value="<?php echo $data[0]->transaksi;?>" selected><?php echo $data[0]->transaksi;?></option>
                                <option value=""></option>
                                <option value="Pemasukan">Pemasukan</option>
                                <option value="Pengeluaran">Pengeluaran</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label">Kategori</label>
                          <div class="col-sm-6">
                            <div class="input-group-prepend">
                              <span class="input-group-text"></span>
                                <!-- <input type="text" onfocus="this.placeholder = ''" class="form-control" id="exampleInputName1" name="rank" placeholder="Rank" aria-describedby="basic-addon1" required > -->
                                <select name="jenis" placeholder="jenis" class="custom-select" id="inputGroupSelect02" required>
                                  <option value="<?php echo $data[0]->jenis;?>" selected><?php echo $data[0]->jenis;?></option>
                                <option value=""></option>
                                <option value="akomodasi">akomodasi</option>
                                <option value="gaji">gaji</option>
                                <option value="penjualan">penjualan</option>
                                <option value="keperluan kantor">keperluan kantor</option>
                                <option value="Pengembalian dana">Pengembalian dana</option>
                                
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label">Nominal</label>
                          <div class="col-sm-6">
                            <div class="input-group-prepend">
                              <span class="input-group-text">Rp</span>
                                <input type="text" onfocus="this.placeholder = ''" class="form-control" value="<?php echo $data[0]->nominal;?>" id="exampleInputName1" name="nominal" placeholder=""aria-describedby="basic-addon1"  required>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label">Via</label>
                          <div class="col-sm-6">
                            <div class="input-group-prepend">
                              <span class="input-group-text"></span>
                                <!-- <input type="text" onfocus="this.placeholder = ''" class="form-control" id="exampleInputName1" name="rank" placeholder="Rank" aria-describedby="basic-addon1" required > -->
                                <select name="via" placeholder="via" class="custom-select" id="inputGroupSelect02" required>
                                <option value="<?php echo $data[0]->via;?>" selected><?php echo $data[0]->via;?></option>
                                <option value="TUNAI">TUNAI</option>
                                <option value="BRI">BRI</option>
                                <option value="BNI">BNI</option>
                                <option value="BCA">BCA</option>
                                <option value="MANDIRI">MANDIRI</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Keterangan</label>
                          <div class="col-sm-9">
                            <div class="input-group-prepend">
                              <span class="input-group-text"></span>
                                <input type="text" onfocus="this.placeholder = ''" class="form-control" id="exampleInputName1" name="ket" placeholder="ket"aria-describedby="basic-addon1" value="<?php echo $data[0]->keterangan;?>" required >
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