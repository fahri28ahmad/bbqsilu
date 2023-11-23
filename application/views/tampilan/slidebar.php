<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url();?>welcome/index">
        <i class="mdi mdi-home menu-icon"></i>
        <span class="menu-title">Beranda</span>
      </a>
    </li>
    
    <?php if ($user['akses']==0) {?>
    <!-- <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url();?>welcome/infojeti">
        <i class="mdi mdi-castle menu-icon"></i>
        <span class="menu-title">Info User</span>
      </a>
    </li> -->
    <?php }?>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url();?>welcome/pemasukan">
        <i class="mdi mdi-send menu-icon"></i>
        <span class="menu-title">Penginputan</span>
      </a>
    </li>
    <?php if ($user['role_id']==1 || $user['role_id']==3) {?>
    
    <?php }?>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url();?>welcome/semuadata">
        <i class="mdi mdi-database menu-icon"></i>
        <span class="menu-title">Data</span>
      </a>
    </li>
    
    <?php if ($user['role_id']==1) {?>
    <!-- <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url();?>welcome/pengaturan">
        <i class="mdi mdi-settings menu-icon"></i>
        <span class="menu-title">Pengaturan</span>
      </a>
    </li> -->
    <!-- <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <i class="mdi mdi-bank menu-icon"></i>
        <span class="menu-title">Penjualan</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>penjualan">Informasi Data Penjualan</a></li>
          <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>penjualan/pemasukan">Pemasukan Data penjualan</a></li>
        </ul>
      </div>
    </li> -->
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic">
        <i class="mdi mdi-cash-usd menu-icon"></i>
        <span class="menu-title">HOD</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic2">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>mod">Informasi Data MOD</a></li>
          <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>mod/pemasukan">Pemasukan Data MOD</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic3" aria-expanded="false" aria-controls="ui-basic">
        <i class="mdi mdi-database menu-icon"></i>
        <span class="menu-title">WA</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic3">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>welcome/appwa">WA</a></li>
          <li class="nav-item"> <a class="nav-link" href="https://app.watzap.id/">Broadcast</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url();?>welcome/userrole">
        <i class="mdi mdi mdi-account-multiple menu-icon"></i>
        <span class="menu-title">user</span>
      </a>
    </li>
    
  <?php }?>
    
  </ul>
</nav>