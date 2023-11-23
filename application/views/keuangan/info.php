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
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                  <div class="mr-md-3 mr-xl-5">
                    <h2>Budgeting</h2>
                    <p class="mb-md-0">Your Information.</p>
                  </div>
                  <div class="d-flex justify-content-between align-items-end flex-wrap">
                  <!-- <button type="button" onclick="window.location.href='<?php echo base_url();?>welcome/pengeluaran'" class="btn btn-light bg-white btn-icon mr-3 mt-2 mt-xl-0">
                    <i class="mdi mdi-minus text-muted" ></i>
                  </button> -->
                  <button type="button" onclick="window.location.href='<?php echo base_url();?>uang/pemasukan'" class="btn btn-light bg-white btn-icon mr-3 mt-2 mt-xl-0">
                    <i class="mdi mdi-plus text-muted" ></i>
                  </button>
                </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body dashboard-tabs p-0">
                  <ul class="nav nav-tabs px-4" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Bulanan</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="sales-tab" data-toggle="tab" href="#sales" role="tab" aria-controls="sales" aria-selected="false">Tahun</a>
                    </li>
                  </ul>
                  <div class="tab-content py-0 px-0">
                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                      <div class="d-flex flex-wrap justify-content-xl-between">
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-arrow-down-bold-hexagon-outline icon-lg mr-3 text-primary"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Uang Masuk</small>
                             <h5 class="mr-2 mb-0"><?php echo "Rp " . number_format((int)$jumlahdoi,0,",","."); ?></h5>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-arrow-up-bold-hexagon-outline mr-3 icon-lg text-danger"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Uang Keluar</small>
                             <h5 class="mr-2 mb-0"><?php echo "Rp " . number_format((int)$jumlahdoikeluar,0,",","."); ?></h5>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-chart-bar mr-3 icon-lg text-success"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Total Transaksi</small>
                             <h5 class="mr-2 mb-0"><?php echo $total_transaksi;?></h5>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-currency-usd mr-3 icon-lg text-warning"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Total Uang</small>
                             <h5 class="mr-2 mb-0"><?php echo "Rp " . number_format((int)$jumlahdoi-$jumlahdoikeluar,0,",","."); ?></h5>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="sales" role="tabpanel" aria-labelledby="sales-tab">
                      <div class="d-flex flex-wrap justify-content-xl-between">
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-arrow-down-bold-hexagon-outline icon-lg mr-3 text-primary"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Uang Masuk</small>
                             <h5 class="mr-2 mb-0"><?php echo "Rp " . number_format((int)$jumlahdoitahun,0,",","."); ?></h5>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-arrow-up-bold-hexagon-outline mr-3 icon-lg text-danger"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Uang Keluar</small>
                             <h5 class="mr-2 mb-0"><?php echo "Rp " . number_format((int)$jumlahdoikeluartahun,0,",","."); ?></h5>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-chart-bar mr-3 icon-lg text-success"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Total Transaksi</small>
                             <h5 class="mr-2 mb-0"><?php echo $total_transaksi_tahun;?></h5>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-currency-usd mr-3 icon-lg text-warning"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Total uang</small>
                             <h5 class="mr-2 mb-0"><?php echo "Rp " . number_format((int)$jumlahdoitahun-$jumlahdoikeluartahun,0,",","."); ?></h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 stretch-card">
              <div class="card">

                <div class="card-body">
                  <p class="card-title">Data Penjualan</p>
                  <div class="table-responsive">
                    <table id="example" class="table table-responsive-sm">
                        <thead>

                        <tr>
                            <th>#</th>
                            <th>Waktu</th>
                            <th>Keterangan</th>
                            <th>Transaksi</th>
                            <th>Jenis</th>
                            <th>Nominal</th>
                            <th>Via</th>
                            <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($last_transaction as $l){ $v++;
                          if ($user['akses'] =! '0') {?>
                        <tr>
                            <td><?php echo $v; ?> </td>
                            <td><?php echo $l->tanggal;?></td>
                            <td><?php echo $l->keterangan;?></td>
                            <td>
                              <?php if ($l->transaksi=='Pemasukan') {?>
                                <a class="badge badge-pill badge-success">Pemasukan</a>
                              <?php } else if($l->transaksi=='Pengeluaran') {?>
                                <a class="badge badge-pill badge-danger" >Pengeluaran</a>
                              <?php } ;?>
                            </td>
                            <!-- <td><?php echo $l->transaksi;?></td> -->
                            <td><?php echo $l->jenis;?></td>
                            <td><?php echo "Rp " . number_format((int)$l->nominal,0,",","."); ?></td>
                            <td><?php echo $l->via;?></td>
                            <td>
                            <a href="<?php echo base_url();?>uang/ubah/<?php echo $l->id;?>" class="badge badge-pill badge-primary" role="button" ><i class="fa fa-trash-o">Edit</i></a>
                            <a href="#myModal<?php echo $l->id;?>"  class="badge badge-pill badge-danger" data-id="<?php echo $l->id; $idc=$l->id;?>" role="button" data-toggle="modal"><i class="fa fa-trash-o">Hapus</i></a> 
                            </td> 
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
                                     <a href="<?php echo base_url();?>uang/hapus/<?php echo $l->id;?>" class="btn btn-danger"  id="modalDelete" >Delete</a>
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

