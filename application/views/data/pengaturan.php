
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
                    <form  class="form" action="<?php echo base_url();?>fungsiuser/uploadfoto/" method="post" enctype="multipart/form-data" id="" method="post" enctype="multipart/form-data">
                    <div class="form-body">
                      <div class="form-group">
                        <label for="upload">Upload foto</label>
                        <input type="file" name="image" id="uploaduji" class="form-control-file">
                        <input type="hidden" name="nameimg" id="namagambar">
                        <br />
                        <div id="upload-demo-i-uji" >
                          <img src="<?= base_url('assets/')?>theme-assets/images/logo/no_image.jpg" style="width: 25%;">
                        </div>
                      </div>
                    </div>
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
