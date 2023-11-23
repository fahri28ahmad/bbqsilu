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
                  <p class="card-title">All Data</p>
                  <div class="table-responsive">
                    <table id="example" class="table table-responsive-sm">
                        <thead>

                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>No Tlp</th>
                            <th>Tanggal<br>dan film</th>
                            <!-- <th>Sumber</th> -->
                            <th>Via</th>
                            <!-- <th>Sumber</th> -->
                            <th>Keterangan</th>
                            <th>status</th>
                            <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($last_transaction as $l){ $v++;
                          if ($user['akses'] == '0' || $l->sales==$user['name']) {?>
                        <tr>
                            <td><?php echo $v; ?> </td>
                            <td><?php echo $l->nama;?></td>
                            <td><?php echo $l->notlp;?></td>
                            <!-- <td><?php echo $l->tgl_in;?><br><?php echo $l->sumber;?></td> -->
                            <td><?php echo $l->date;?><br><?php echo $l->nama_f;?></td>
                            
                            <!-- <td><?php echo $l->sumber;?></td> -->
                            <td><?php echo $l->metod_p;?></td>
                            <!-- <td><?php echo $l->sales;?></td> -->
                            <!-- <td><?php echo $l->status;?></td> -->
                            <td><?php echo $l->keterangan;?></td>
                            <td>
                              <?php if ($l->status==1) {?>
                                <a class="badge badge-pill badge-info">ON PROSES</a>
                              <?php } else if ($l->status==2) {?>
                                <a class="badge badge-pill badge-success" >DONE</a>
                              <?php } else {?>
                                <a class="badge badge-pill badge-danger" >NOT PROSES</a>
                              <?php }?>
                            </td>
                            <?php if ($user['role_id']==1 || $l->sales==$user['name']) {?>
                            <td>
                            <a href="<?php echo base_url();?>welcome/ubah/<?php echo $l->id;?>" class="badge badge-pill badge-primary" role="button" ><i class="fa fa-trash-o">Edit</i></a>
                            <a href="#myModal<?php echo $l->id;?>"  class="badge badge-pill badge-danger" data-id="<?php echo $l->id; $idc=$l->id;?>" role="button" data-toggle="modal"><i class="fa fa-trash-o">Hapus</i></a> 
                            </td>
                            <?php }?>  
                        </tr>
                        <div class="modal small fade" id="myModal<?php echo $l->id;?>" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                     <a href="<?php echo base_url();?>welcome/hapus/<?php echo $l->id;?>" class="btn btn-danger"  id="modalDelete" >Delete</a>
                                  </div>
                              </div>
                          </div>
                        </div>
                        <?php }}?>
                      </tbody>
                    </table>
                  </div>
                  <?php if ($user['role_id']==1 ) { 
                    // $this->load->view("tampilan/Print");
                    }?>
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

