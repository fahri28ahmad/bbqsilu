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
            <?php if( $this->session->flashdata("flash","dihapus")):?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              Data <strong>Berhasil!</strong> Di Hapus <?php $this->session->flashdata("flash");?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php endif; ?>
            <?php if( $this->session->flashdata("flash","diubah")):?>
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
                  <p class="card-title">CARGO STOCK AVAILABLE</p>
                  <div class="table-responsive">
                    <table id="example" class="table table-responsive-md">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>JETTY</th>                            
                            <th>LOCATION</th>
                            <th>ESTIMASI CARGO (MT)</th>
                            <th>GAR/KALORI</th>
                            <?php if ($user['role_id']==1 || $user['role_id']==3) {?>
                            <th>aksi</th>
                            <?php }?>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($infojeti as $l){ $v++;
                          if ($user['akses'] == '0' || $l->nama_jeti==$user['akses']) {?>
                        <tr>
                            <td><?php echo $l->id; ?> </td>
                            <td><?php echo $l->nama_jeti;?></td>
                            <td><?php echo $l->lokasi;?></td>
                            <td><?php echo $l->total_;?></td> 
                            <td><?php echo $l->gar;?></td>
                            <?php if ($user['role_id']==1 || $user['role_id']==3) {?>
                            <td>
                              <a href="<?php echo base_url();?>welcome/ubahjety/<?php echo $l->id;?>" class="badge badge-pill badge-primary" role="button" ><i class="fa fa-trash-o">Edit</i></a>
                            <a href="#myModal<?php echo $l->id;?>"  class="badge badge-pill badge-danger" data-id="<?php echo $l->id; $idc=$l->id;?>" role="button" data-toggle="modal"><i class="fa fa-trash-o">Hapus</i></a>
                            </td> 
                          <?php } ?>
                        </tr>
                        <div class="modal small fade" id="myModal<?php echo $l->id;?>" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                       <h3 id="myModalLabel">Konfirmasi Hapus <?php echo $l->id;?></h3>

                                  </div>
                                  <div class="modal-body">
                                      <p class="error-text"><i class="fa fa-warning modal-icon"></i>Apakah Anda yakin ingin menghapus? 
                                          <br>Ini tidak dapat dibatalkan.</p>
                                  </div>
                                  <div class="modal-footer">
                                     <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Batal</button>
                                     <a href="<?php echo base_url();?>welcome/hapusjety/<?php echo $l->id;?>" class="btn btn-danger"  id="modalDelete" >Delete</a>
                                  </div>
                              </div>
                          </div>
                        </div>
                        <?php }}?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <?php if ($user['role_id']==1 || $user['role_id']==3) {?>
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Penginputan Jetty</h4>
                  <p class="card-description">
                    -
                  </p>
                  <form class="forms-sample" method="post" action="<?php echo base_url();?>fungsi/insert_jetty">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label">Nama Jetty</label>
                          <div class="col-sm-6">
                            <div class="input-group-prepend">
                              <span class="input-group-text"></span>
                                <input type="text" onfocus="this.placeholder = ''" class="form-control" id="exampleInputName1" name="namaj" placeholder="Input Nama jetty"aria-describedby="basic-addon1">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label">Lokasi</label>
                          <div class="col-sm-6">
                            <div class="input-group-prepend">
                              <span class="input-group-text"></span>
                                <input type="text" onfocus="this.placeholder = ''" class="form-control" id="exampleInputName1" name="lokasi" placeholder="Input Lokasi"aria-describedby="basic-addon1">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label">Stok</label>
                          <div class="col-sm-6">
                            <div class="input-group-prepend">
                              <span class="input-group-text"></span>
                                <input type="text" onfocus="this.placeholder = ''" class="form-control" id="exampleInputName1" name="stok" placeholder="Input Stok"aria-describedby="basic-addon1">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-6 col-form-label">Gar</label>
                          <div class="col-sm-6">
                            <div class="input-group-prepend">
                              <span class="input-group-text"></span>
                                <input type="text" onfocus="this.placeholder = ''" class="form-control" id="exampleInputName1" name="gar" placeholder="Gar"aria-describedby="basic-addon1">
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
            <?php }?>
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
               <h3 id="myModalLabel">Konfirmasi Hapus<script>$(this).attr("data-id")</script></h3>

          </div>
          <div class="modal-body">
              <p class="error-text"><i class="fa fa-warning modal-icon"></i>Apakah Anda yakin ingin menghapus? 
                  <br>Ini tidak dapat dibatalkan.</p>
          </div>
          <div class="modal-footer">
             <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Batal</button>
             <a href="<?php echo base_url();?>welcome/hapus/data-id" class="btn btn-danger"  id="modalDelete" >Delete</a>
          </div>
      </div>
  </div>
</div>
</html>

