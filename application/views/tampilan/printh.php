<script>
  function printDiv() {
      var divToPrint = document.getElementById('areaToPrint');
      newWin = window.open("");
      newWin.document.write(divToPrint.outerHTML);
      newWin.print();
      newWin.close();
 }
</script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<div class="container">
<br><br>
    <div>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Jeti</th>
                <th>Buyer</th>
                <th>COB</th>
                <th>LAYCAN</th>
                <th>Nama Tongkang</th>                            
                <!-- <th>Barge Tongkang</th>-->
                <th>Tujuan</th>
                <!-- <th>Total Muat</th>-->
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
                    <div class="badge badge-pill badge-info" style ="background-color: grey; color: blue;" >ON PROSES</div>
                  <?php } else if ($l->status==2) {?>
                    <div class="badge badge-pill badge-success" style ="background-color: grey; color: green;">DONE</div>
                  <?php } else {?>
                    <div class="badge badge-pill badge-danger" style ="background-color: grey; color: red;">NOT PROSES</div>
                  <?php }?>
                </td> 
            </tr>
            <?php }?>
        </tbody>
    </table>
    </div>
</div>
<script>
      window.print()
</script>
