    <!-- Sidebar -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="node_modules/admin-lte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Inventori Barang</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="node_modules/admin-lte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block"><?php echo  $this->session->userdata('username');?></a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-item">
            <a href="<?= base_url('Dashboard_admin');?>" class="nav-link  <?php
            if($this->uri->segment(1) == 'Dashboard_admin'){
              echo 'active';
            }
            elseif($this->uri->segment(1) == 'Dashboard_petugas'){
              echo 'active';
            } else{
              PHP_EOL;
            }
          ?>">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Dashboard

          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="<?= base_url('Barang');?>" class="nav-link  <?php
            if($this->uri->segment(1) == 'Barang'){
              echo 'active';
            } else{
              PHP_EOL;
            }
          ?>">
          <i class="nav-icon fi fi-tr-canned-food"></i>
          <p>
            Barang
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link <?php
            if($this->uri->segment(1) == 'Stok'){
              echo 'active';
            } else{
              PHP_EOL;
            }
          ?>">
          <i class="nav-icon fi fi-tr-warehouse-alt"></i>
          <p>
            Stok Barang

          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link <?php
            if($this->uri->segment(1) == 'Supplier'){
              echo 'active';
            } else{
              PHP_EOL;
            }
          ?>">
          <i class="nav-icon fi fi-tr-supplier-alt"></i>
          <p>
            Supplier

          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link <?php
            if($this->uri->segment(1) == 'Pembelian'){
              echo 'active';
            } else{
              PHP_EOL;
            }
          ?>">
          <i class="fi fi-tr-cart-shopping-fast"></i>
          <p>
            Pembelian

          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link <?php
            if($this->uri->segment(1) == 'Penjualan'){
              echo 'active';
            } else{
              PHP_EOL;
            }
          ?>">
          <i class="fi fi-tr-point-of-sale-bill"></i>
          <p>
            Penjualan

          </p>
        </a>
      </li>


    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>