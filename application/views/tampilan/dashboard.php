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
          <!-- <div class="row">
            <?php if( $this->session->flashdata("flash") ):?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              Data <strong>Berhasil!</strong> Di Hapus <?php $this->session->flashdata("flash");?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php endif; ?>
          </div> -->
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                  <div class="mr-md-3 mr-xl-5">
                    <h2>Welcome, <?php echo $user['name']; ?></h2>
                    <p class="mb-md-0">Informasi Data Silu.</p>
                  </div>
                  <div class="d-flex">
                    <i class="mdi mdi-home text-muted hover-cursor"></i>
                    <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
                    <p class="text-primary mb-0 hover-cursor">Analytics</p>
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-end flex-wrap">
                  <button type="button" class="btn btn-light bg-white btn-icon mr-3 d-none d-md-block ">
                    <i class="mdi mdi-download text-muted"></i>
                  </button>
                  <button type="button" class="btn btn-light bg-white btn-icon mr-3 mt-2 mt-xl-0">
                    <i class="mdi mdi-clock-outline text-muted"></i>
                  </button>
                  <button type="button" class="btn btn-light bg-white btn-icon mr-3 mt-2 mt-xl-0">
                    <a href="<?php echo base_url();?>welcome/pemasukan"><i class="mdi mdi-plus text-muted"></i></a>
                  </button>
                  <button class="btn btn-primary mt-2 mt-xl-0">Download report</button>
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
                      <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Ringkasan</a>
                    </li>
                    <!-- <li class="nav-item">
                      <a class="nav-link" id="sales-tab" data-toggle="tab" href="#sales" role="tab" aria-controls="sales" aria-selected="false">Sumber</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="purchases-tab" data-toggle="tab" href="#purchases" role="tab" aria-controls="purchases" aria-selected="false">Data Prospek</a>
                    </li> -->
                  </ul>
                  <div class="tab-content py-0 px-0">
                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                      <div class="d-flex flex-wrap justify-content-xl-between">
                        <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-target mr-3 icon-lg text-primary"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Persentasi Capaian</small>
                            <h5 class="mr-2 mb-0"><?php echo number_format((int)$datamember[0]->jumlah/30*100 ,1,",","."); ?>%</h5>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-check mr-3 icon-lg text-success"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Capaian Penjualan</small>
                            <h5 class="mr-2 mb-0"><?php echo $datamember[0]->jumlah; ?></h5>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-target mr-3 icon-lg text-info"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Target Penjualan</small>
                            <h5 class="mr-2 mb-0">30</h5>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-database mr-3 icon-lg text-danger"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Total Prospek (Database)</small>
                            <h5 class="mr-2 mb-0"><?php echo number_format((int)$total_transaksi,0,",",".");?></h5>
                          </div>
                        </div>
                        <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-flag mr-3 icon-lg text-success"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Target Prospek</small>
                            <h5 class="mr-2 mb-0"><?php echo number_format((int)30,0,",","."); ?></h5>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="sales" role="tabpanel" aria-labelledby="sales-tab">
                      <div class="d-flex flex-wrap justify-content-xl-between">
                        <?php foreach($datasumber as $ds){ $i++;
                           ?>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="<?php echo $ds->icon;?>"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted"><?php echo $ds->sumber; ?></small>
                            <h5 class="mr-2 mb-0"><?php echo $ds->jumlah; ?></h5>
                          </div>
                        </div>
                        <?php }?>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="purchases" role="tabpanel" aria-labelledby="purchases-tab">
                      <div class="d-flex flex-wrap justify-content-xl-between">
                        <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-phone-missed mr-3 icon-lg text-danger"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Not Respon</small>
                            <h5 class="mr-2 mb-0"><?php echo $datamember[4]->jumlah; ?></h5>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-wechat mr-3 icon-lg text-primary"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Respon</small>
                            <h5 class="mr-2 mb-0"><?php echo $datamember[3]->jumlah; ?></h5>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-eye mr-3 icon-lg text-success"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Rencana Cek Lokasi</small>
                            <h5 class="mr-2 mb-0"><?php echo $datamember[2]->jumlah; ?></h5>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-download mr-3 icon-lg text-warning"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Rencana Pembayaran</small>
                            <h5 class="mr-2 mb-0"><?php echo $datamember[1]->jumlah; ?></h5>
                          </div>
                        </div>
                        <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-flag mr-3 icon-lg text-success"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">PPJB/Closing</small>
                            <h5 class="mr-2 mb-0"><?php echo $datamember[0]->jumlah; ?></h5>
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
            
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Member </h4>
                  <div class="table-responsive">
                    <table id="example2" class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Nama
                          </th>
                          <th>
                            No Tlp
                          </th>
                          <th>
                            Jumlah<br>BBQ
                          </th>
                          <th>
                            Gratis
                          </th>
                          <th>
                            Gratis<br>Dipakai
                          </th>
                        </tr>
                      </thead>
                      <tbody>

                        <?php foreach($datamember as $js){ $i++;
                           ?>
                        <tr>
                          <td class="py-1">
                            <img src="<?php echo base_url();?>/images/faces/face1.jpg" alt="image"/>
                          </td>
                          <td><?php echo $js->nama;?></td>
                          <td><?php echo $js->notlp;?></td>
                          <td><?php echo $js->jumlah%8;?></td>
                          <td><?php echo floor($js->jumlah/8);?></td>
                          <td><?php echo '-';?></td>

                        </tr>
                        <?php }?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title" style="color: red;">Sales Target Harian</h4>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Sales
                          </th>
                          <th>
                            Nama Sales
                          </th>
                          <th>
                            Target Prospek
                          </th>
                          <th>
                            Hasil prospek
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($datasales as $js){ $i++;
                           ?>
                        <tr>
                          <td class="py-1">
                            <img src="<?php echo base_url();?>/images/faces/face1.jpg" alt="image"/>
                          </td>
                          <td></td>
                          <td>10</td>
                          <td></td>
                        </tr>
                        <?php }?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title" style="color: blue;">Sales Target Bulan</h4>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Sales
                          </th>
                          <th>
                            Nama Sales
                          </th>
                          <th>
                            Target Prospek
                          </th>
                          <th>
                            Hasil prospek
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($datasales as $js){ $i++;
                           ?>
                        <tr>
                          <td class="py-1">
                            <img src="<?php echo base_url();?>/images/faces/face1.jpg" alt="image"/>
                          </td>
                          <td></td>
                          <td>29</td>
                           <td></td>
                        </tr>
                        <?php }?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
          <div class="row">
            <div class="col-md-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Data user Member</p>
                  <div class="table-responsive">
                    <table id="example1" class="table table-responsive-sm">
                      <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <!-- <th>Tanggal <br>Dan Film</th> -->
                            <th>Notlp</th>
                            <!-- <th>Sumber</th> -->
                            <!-- <th>Rank</th> -->
                            <!-- <th>Sales</th> -->
                            <!-- <th>Status</th> -->
                            <th>Keterangan</th>
                            <th>status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($last_transaction as $l){ $v++;
                           ?>
                        <tr>
                            <td><?php echo $v; ?> </td>
                            <td><?php echo $l->nama;?></td>
                            <!-- <td><?php echo $l->date;?><br><?php echo $l->nama_f;?></td> -->
                            <!-- <td><?php echo $l->tgl_in;?><br><?php echo $l->sumber;?></td> -->
                            <td><?php echo $l->notlp;?></td>
                            <!-- <td><?php echo $l->sumber;?></td> -->
                            <!-- <td><?php echo $l->rank;?></td> -->
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
                        </tr>
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
    $('#example1, #example2').DataTable();
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
             <a href="<?php echo base_url();?>welcome/hapus/<?php echo $idc;?>" class="btn btn-danger"  id="modalDelete" >Delete</a>
          </div>
      </div>
  </div>
</div>
</html>

