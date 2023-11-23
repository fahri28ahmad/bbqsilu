<?php $this->load->view("head");?>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <!-- partial -->
      <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="center">
            	<h4>Print</h4>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Pencarian</p>
                  <div class="table-responsive">
                    <table id="recent-purchases-listing" class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Jeti</th>
                            <th>Buyer</th>
                            <th>COB</th>
                            <th>LAYCAN</th>
                            <th>Nama Tongkang</th>                            
                            <!-- <th>Barge Tongkang</th>                             -->
                            <th>Tujuan</th>
                            <!-- <th>Total Muat</th> -->
                            <th>status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $v=0;foreach($income as $l){ $v++;?>
                        <tr>
                            <td><?php echo $v; ?> </td>
                            <td><?php echo $l->nama_j;?></td>
                            <td><?php echo $l->buyer;?></td>
                            <td><?php echo $l->cob;?> MT</td>
                            <td><?php echo $l->tgl_in;?><BR><?php echo $l->tgl_a;?></td>
                            <td><?php echo $l->nama_t;?></td>
                            <!-- <td><?php echo $l->barge_t;?></td> -->
                            <td><?php echo $l->tujuan;?></td>
                            <!-- <td><?php echo $l->total_m;?> MT</td> -->
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
  <script>
    function printDiv() {
        var divToPrint = document.getElementById('areaToPrint');
        newWin = window.open("");
        newWin.document.write(divToPrint.outerHTML);
        newWin.print();
        newWin.close();
   }
</script>
  <!-- End custom js for this page-->
</body>

</html>