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
            <?php if( $this->session->flashdata("flashHapus","dihapus")):?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              Data <strong>Berhasil!</strong> Di Hapus <?php $this->session->flashdata("flash");?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php endif; ?>
            <?php if( $this->session->flashdata("flashupdate","diubah")):?>
            <div class="alert alert-info alert-dismissible fade show" role="alert">
              Data <strong>Berhasil!</strong> Di Ubah <?php $this->session->flashdata("flash");?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php endif; ?>
          </div>

          <div class="row">
            <div class="col-md-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">DATA USER AKSES</p>
                  <div class="table-responsive">
                    <table id="example" class="table table-responsive-sm">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>email</th>
                            <th>foto</th>
                            <th>Izin id</th>
                            <th>status</th>
                            <th>izin</th>
                            <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($last_transaction as $l){ $v++;?>
                        <tr>
                            <td><?php echo $v; ?> </td>
                            <td><?php echo $l->name;?></td>
                            <td><?php echo $l->email;?></td>
                            <td><?php echo $l->gambar;?></td>
                            <td>
                              <?php if ($l->role_id=='1') {?>
                                <span  class="badge badge-info">Super Admin</span >
                              <?php } elseif ($l->role_id=='2') {?>
                                <span  class="badge badge-info">Admin</span >
                              <?php } else {  ?>
                                <span  class="badge badge-danger">User</span > 
                              <?php };?>
                            </td>
                            <td><?php if ($l->is_active=='1') {?>
                                <span  class="badge badge-info">Active</span >
                              <?php } else {  ?>
                                <span  class="badge badge-danger">Not Avtive</span > 
                              <?php };?>
                            </td>
                            <td><?php if ($l->akses=='0') {?>
                                <span  class="badge badge-info">SEMUA</span >
                                <?php } else { ?>
                                <span  class="badge badge-danger">Tertentu</span >
                                <?php };?> 

                            </td>
                            <td>
                            <a href="<?php echo base_url();?>fungsiuser/ubah/<?php echo $l->id;?>" class="badge badge-pill badge-primary" role="button" ><i class="fa fa-trash-o">Edit</i></a>
                            <a href="#myModalLabel<?php echo $l->id;?>" class="badge badge-pill badge-danger" data-id="" role="button" data-toggle="modal"><i class="fa fa-trash-o">Hapus</i></a>
                            </td>  
                        </tr>
                        <div class="modal small fade" id="myModalLabel<?php echo $l->id;?>" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                       <h3 id="myModalLabel">Konfirmasi Hapus</h3>

                                  </div>
                                  <div class="modal-body">
                                      <p class="error-text"><i class="fa fa-warning modal-icon"></i>Apakah Anda yakin ingin menghapus? <?php echo $l->name;?>
                                          <br>Ini tidak dapat dibatalkan.</p>
                                  </div>
                                  <div class="modal-footer">
                                     <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Batal</button>
                                     <a href="<?php echo base_url();?>fungsiuser/hapus/<?php echo $l->id;?>" class="btn btn-danger"  id="modalDelete" >Delete</a>
                                  </div>
                              </div>
                          </div>
                        </div>
                        <?php }?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php $this->load->view("tampilan/footer")?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
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
  <script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable();
} );
  </script>
</body>

<div class="modal small fade" id="myModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
               <h3 id="myModalLabel">Konfirmasi Hapus</h3>

          </div>
          <div class="modal-body">
              <p class="error-text"><i class="fa fa-warning modal-icon"></i>Apakah Anda yakin ingin menghapus?
                  <br>Ini tidak dapat dibatalkan.</p>
          </div>
          <div class="modal-footer">
             <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Batal</button>
             <a href="<?php echo base_url();?>fungsiuser/hapus/<?php echo $idc;?>" class="btn btn-danger"  id="modalDelete" >Delete</a>
          </div>
      </div>
  </div>
</div>
</html>

