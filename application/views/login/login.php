<?php $this->load->view("tampilan/head")?>
<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <center>
                <a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>aset/logo/silulogo250.png" alt="logo"></a>
                </center>
              </div><!-- 
              <h4>Hello! let's get started</h4> -->
              <h6 class="font-weight-light">Masuk untuk melanjutkan.</h6>
              <?= $this->session->flashdata('message'); ?>
              <form class="pt-3" action="<?= base_url('auth');  ?>" method="post">
                <div class="form-group">
                  <input type="text" id="name" name="name" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Nama user" value="<?= set_value('name');?>">
                  <?= form_error('name', '<small class="text-dager pl-3">', '</small>');  ?>
                </div>
                <div class="form-group">
                  <input type="password" id="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Kata sandi">
                  <?= form_error('password', '<small class="text-dager pl-3">', '</small>');  ?>
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">MASUK</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <!-- <a href="#" class="auth-link text-black">Forgot password?</a> -->
                </div>            
                <div class="text-center mt-4 font-weight-light">
                  Tidak punya akun ? <a href="<?php echo base_url();?>auth/register" class="text-primary">Buat</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <!-- endinject -->
</body>