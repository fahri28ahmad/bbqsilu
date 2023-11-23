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
                  <h4 class="card-title">Ubah user</h4>
                  <p class="card-description">
                    -
                  </p>
                  <form class="forms-sample" method="post" action="<?php echo base_url();?>fungsiuser/update/<?php echo $id;?>">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label">Nama</label>
                          <div class="col-sm-6">
                            <div class="input-group-prepend">
                              <span class="input-group-text"></span>
                                <input type="text" onfocus="this.placeholder = ''" class="form-control" id="exampleInputName1" name="nama" placeholder="Nama"aria-describedby="basic-addon1" value="<?php echo $data[0]->name;?>">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label">Email</label>
                          <div class="col-sm-6">
                            <div class="input-group-prepend">
                              <span class="input-group-text"></span>
                                <input type="email" onfocus="this.placeholder = ''" class="form-control" id="exampleInputName1" name="email" placeholder="email"aria-describedby="basic-addon1" value="<?php echo $data[0]->email;?>">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label">izin id</label>
                          <div class="col-sm-6">
                            <div class="input-group-prepend">
                                <select name="role_id" class="custom-select" id="inputGroupSelect01">
                                <option value="<?php echo $data[0]->role_id;?>" selected><?php if ($data[0]->role_id==1){
                                  echo "Super Admin";} elseif ($data[0]->role_id==2){ echo "Admin";} else { echo "User";}?></option>
                                <?php if ($data[0]->role_id!=1) {?>
                                  <option value="1">Super Admin</option>
                                <?php } if ($data[0]->role_id!=2) {?>
                                <option value="2">Admin</option>
                                <?php } if ($data[0]->role_id!=3) {?>
                                <option value="3">User</option>
                                <?php } ?>
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
                              <select name="is_active" class="custom-select" id="inputGroupSelect01">
                                <option value="<?php echo $data[0]->is_active;?>" selected><?php if ($data[0]->is_active==0){
                                  echo "Tidak Aktif";} else { echo "Aktif";}?></option>
                                <?php if ($data[0]->is_active!=0) {?>
                                  <option value="0">Tidak Aktif</option>
                                <?php } if ($data[0]->is_active!=1) {?>
                                <option value="1">Aktif</option>
                                <?php } ?>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label">IZIN AKSES</label>
                          <div class="col-sm-6">
                            <div class="input-group-prepend">
                              <select name="akses" class="custom-select" id="inputGroupSelect01">
                                <option value="<?php echo $data[0]->akses;?>" selected><?php if ($data[0]->akses=='0'){
                                  echo "Semua";} else { echo $data[0]->akses;}?></option>
                                <?php if ($data[0]->akses!='0') {?>
                                  <option value="0">Semua</option>
                                <?php } ?>
                                <option value="1"> Tertentu </option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" value="upload" class="btn btn-primary mr-2">Simpan</button>
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
