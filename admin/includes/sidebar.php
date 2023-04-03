                 <?php 

                 include '../../includes/connect.php';



                 //Apoteker
if (isset($_SESSION['akses']) && $_SESSION['akses'] == 'apoteker') { $noinduk = $_SESSION['noinduk'];
 ?>
                 <!-- Main Sidebar Container -->
                 <aside class="main-sidebar sidebar-primary elevation-4">
                     <!-- Brand Logo -->
                     <a href="../../index3.html" class="brand-link elevation-4">
                         <img src="../../assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                             class="brand-image img-circle elevation-3" style="opacity: .8">
                         <span class="brand-text font-weight-light">Apotek Senyum </span>
                     </a>
                     <!-- Sidebar -->
                     <div class="sidebar">
                         <!-- Sidebar user (optional) -->
                         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                             <div class="info">
                                 <h4 href="#" class="d-block">Apoteker
                                 </h4>
                             </div>
                         </div>

                         <!-- SidebarSearch Form -->
                         <div class="form-inline">
                             <div class="input-group" data-widget="sidebar-search">
                                 <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                                     aria-label="Search">
                                 <div class="input-group-append">
                                     <button class="btn btn-sidebar">
                                         <i class="fas fa-search fa-fw"></i>
                                     </button>
                                 </div>
                             </div>
                         </div>

                         <!-- Sidebar Menu -->
                         <nav class="mt-2">
                             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                                 data-accordion="false">
                                 <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                                 <li class="nav-item">
                                     <a href="../pages/apoteker/beranda.php" class="nav-link">
                                         <i class="nav-icon fas fa-home"></i>
                                         <p>
                                             Beranda
                                         </p>
                                     </a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="#" class="nav-link">
                                         <i class="nav-icon fas fa-folder"></i>
                                         <p>
                                             Data
                                             <i class="right fas fa-angle-left"></i>
                                         </p>
                                     </a>
                                     <ul class="nav nav-treeview">
                                         <li class="nav-item">
                                             <a href="../barang/data_barang.php" class="nav-link">
                                                 <i class="fa-solid fa-box nav-icon"></i>
                                                 <p>Data Barang</p>
                                             </a>
                                         </li>
                                         <li class="nav-item">
                                             <a href="../barang/penjualan.php" class="nav-link">
                                                 <i class="far fa-circle nav-icon"></i>
                                                 <p>Data Penjualan</p>
                                             </a>
                                         </li>
                                         <li class="nav-item">
                                             <a href="../barang/pembelian.php" class="nav-link">
                                                 <i class="far fa-circle nav-icon"></i>
                                                 <p>Data Pembelian</p>
                                             </a>
                                         </li>
                                     </ul>
                                 </li>
                                 <li class="nav-item">
                                     <a href="#" class="nav-link">
                                         <i class="nav-icon fas fa-file"></i>
                                         <p>
                                             Laporan
                                             <i class="right fas fa-angle-left"></i>
                                         </p>
                                     </a>
                                     <ul class="nav nav-treeview">
                                         <li class="nav-item">
                                             <a href="../../index.html" class="nav-link">
                                                 <i class="fa-solid fa-calendar-days nav-icon"></i>
                                                 <p>Harian
                                                     <i class="right fas fa-angle-left"></i>
                                                 </p>
                                             </a>
                                             <ul class="nav nav-treeview">
                                                 <li class="nav-item">
                                                     <a href="../../index.html" class="nav-link">
                                                         <i class="fa-solid fa-square-poll-vertical nav-icon"></i>
                                                         <p>Penjualan</p>
                                                     </a>
                                                 </li>
                                                 <li class="nav-item">
                                                     <a href="../../index2.html" class="nav-link">
                                                         <i class="fa-solid fa-boxes-stacked nav-icon"></i>
                                                         <p>Inventori Stok Barang</p>
                                                     </a>
                                                 </li>
                                             </ul>
                                         </li>
                                         <li class="nav-item">
                                             <a href="../../index.html" class="nav-link">
                                                 <i class="fa-solid fa-calendar-days nav-icon"> </i>
                                                 <p>
                                                     Pekanan
                                                     <i class="right fas fa-angle-left"></i>
                                                 </p>
                                             </a>
                                             <ul class="nav nav-treeview">
                                                 <li class="nav-item">
                                                     <a href="../../index.html" class="nav-link">
                                                         <i class="fa-solid fa-square-poll-vertical nav-icon"></i>
                                                         <p>Penjualan</p>
                                                     </a>
                                                 </li>
                                                 <li class="nav-item">
                                                     <a href="../../index2.html" class="nav-link">
                                                         <i class="fa-solid fa-boxes-stacked nav-icon"></i>
                                                         <p>Inventori Stok Barang</p>
                                                     </a>
                                                 </li>
                                                 <li class="nav-item">
                                                     <a href="../../index.html" class="nav-link">
                                                         <i class="fa-solid fa-cart-flatbed nav-icon"></i>
                                                         <p>Pembelian</p>
                                                     </a>
                                                 </li>
                                             </ul>
                                         </li>
                                         <li class="nav-item">
                                             <a href="../../index.html" class="nav-link">
                                                 <i class="fa-solid fa-calendar-days nav-icon"></i>
                                                 <p>Bulanan
                                                     <i class="right fas fa-angle-left"></i>
                                                 </p>
                                             </a>
                                             <ul class="nav nav-treeview">
                                                 <li class="nav-item">
                                                     <a href="../../index.html" class="nav-link">
                                                         <i class="fa-solid fa-square-poll-vertical nav-icon"></i>
                                                         <p>Penjualan</p>
                                                     </a>
                                                 </li>
                                                 <li class="nav-item">
                                                     <a href="../../index2.html" class="nav-link">
                                                         <i class="fa-solid fa-boxes-stacked nav-icon"></i>
                                                         <p>Inventori Stok Barang</p>
                                                     </a>
                                                 </li>
                                                 <li class="nav-item">
                                                     <a href="../../index.html" class="nav-link">
                                                         <i class="fa-solid fa-cart-flatbed nav-icon"></i>
                                                         <p>Pembelian</p>
                                                     </a>
                                                 </li>
                                                 <li class="nav-item">
                                                     <a href="../../index.html" class="nav-link">
                                                         <i class="fa-solid fa-clipboard-user nav-icon"></i>
                                                         <p>Kinerja Karyawan</p>
                                                     </a>
                                                 </li>
                                                 <li class="nav-item">
                                                     <a href="../../index.html" class="nav-link">
                                                         <i class="fa-solid fa-chart-column nav-icon"></i>
                                                         <p>Laba Rugi</p>
                                                     </a>
                                                 </li>
                                                 <li class="nav-item">
                                                     <a href="../../index.html" class="nav-link">
                                                         <i class="fa-solid fa-prescription nav-icon"></i>
                                                         <p>Narkotika dan Psikotropika</p>
                                                     </a>
                                                 </li>
                                                 <li class="nav-item">
                                                     <a href="../../index.html" class="nav-link">
                                                         <i class="fa-solid fa-money-check nav-icon"></i>
                                                         <p>Keuangan</p>
                                                     </a>
                                                 </li>
                                             </ul>
                                         </li>
                                         <li class="nav-item">
                                             <a href="../../index.html" class="nav-link">
                                                 <i class="fa-solid fa-calendar-days nav-icon"></i>
                                                 <p>Tahunan
                                                     <i class="right fas fa-angle-left"></i>
                                                 </p>
                                             </a>
                                             <ul class="nav nav-treeview">
                                                 <li class="nav-item">
                                                     <a href="../../index.html" class="nav-link">
                                                         <i class="fa-solid fa-square-poll-vertical nav-icon"></i>
                                                         <p>Penjualan</p>
                                                     </a>
                                                 </li>
                                                 <li class="nav-item">
                                                     <a href="../../index2.html" class="nav-link">
                                                         <i class="fa-solid fa-boxes-stacked nav-icon"></i>
                                                         <p>Inventori Stok Barang</p>
                                                     </a>
                                                 </li>
                                                 <li class="nav-item">
                                                     <a href="../../index.html" class="nav-link">
                                                         <i class="fa-solid fa-cart-flatbed nav-icon"></i>
                                                         <p>Pembelian</p>
                                                     </a>
                                                 </li>
                                                 <li class="nav-item">
                                                     <a href="../../index.html" class="nav-link">
                                                         <i class="fa-solid fa-clipboard-user nav-icon"></i>
                                                         <p>Kinerja Karyawan</p>
                                                     </a>
                                                 </li>
                                                 <li class="nav-item">
                                                     <a href="../../index.html" class="nav-link">
                                                         <i class="fa-solid fa-chart-column nav-icon"></i>
                                                         <p>Laba Rugi</p>
                                                     </a>
                                                 </li>
                                                 <li class="nav-item">
                                                     <a href="../../index.html" class="nav-link">
                                                         <i class="fa-solid fa-money-check nav-icon"></i>
                                                         <p>Keuangan</p>
                                                     </a>
                                                 </li>
                                             </ul>
                                         </li>
                                     </ul>
                                 </li>
                                 <li class="nav-item">
                                     <a href="../barang/stok.php" class="nav-link">
                                         <i class="nav-icon fas fa-chart-pie"></i>
                                         <p>
                                             Kartu Stok
                                         </p>
                                     </a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="../barang/faktur_beli.php" class="nav-link">
                                         <i class="nav-icon fas fa-tree"></i>
                                         <p>
                                             Faktur Pembelian
                                         </p>
                                     </a>
                                 </li>
                                 <li class="nav-item">

                                     <a href="../apoteker/user.php" class="nav-link">
                                         <i class="nav-icon fa-solid fa-users-viewfinder"></i>
                                         <p>
                                             Manajemen User
                                         </p>
                                     </a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="../../pengaturan.php" class="nav-link">
                                         <i class="nav-icon fas fa-edit"></i>
                                         <p>
                                             Pengaturan
                                         </p>
                                     </a>
                                 </li>
                                 <li class="nav-header">ADDONS</li>
                                 <li class="nav-item">
                                     <a href="../calendar.html" class="nav-link">
                                         <i class=""></i>
                                         <p>
                                             User
                                             <span class="badge badge-info right">2</span>
                                         </p>
                                     </a>
                                 </li>
                             </ul>
                         </nav>
                         <!-- /.sidebar-menu -->
                     </div>
                     <!-- /.sidebar -->
                 </aside>
                 <?php }
                //Karyawan
                elseif ($_SESSION['akses'] =='karyawan') { $nip = $_SESSION['nip']; ?>
                 <!-- Main Sidebar Container -->
                 <aside class="main-sidebar sidebar-primary elevation-4">
                     <!-- Brand Logo -->
                     <a href="../../index3.html" class="brand-link elevation-4">
                         <img src="../../assets/dist/img/AdminLTELogo.png" alt="Apotek Senyum Logo"
                             class="brand-image img-circle elevation-3" style="opacity: .8">
                         <span class="brand-text font-weight-light">Apotek Senyum 3</span>
                     </a>
                     <!-- Sidebar -->
                     <div class="sidebar">
                         <!-- Sidebar user (optional) -->
                         <div class="user-panel mt-3 pb-3 mb-3 d-flex">

                             <div class="info">
                                 <h4 href="#" class="d-block">Karyawan</h4>
                             </div>
                         </div>

                         <!-- SidebarSearch Form -->
                         <div class="form-inline">
                             <div class="input-group" data-widget="sidebar-search">
                                 <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                                     aria-label="Search">
                                 <div class="input-group-append">
                                     <button class="btn btn-sidebar">
                                         <i class="fas fa-search fa-fw"></i>
                                     </button>
                                 </div>
                             </div>
                         </div>

                         <!-- Sidebar Menu -->
                         <nav class="mt-2">
                             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                                 data-accordion="false">
                                 <!-- Add icons to the links using the .nav-icon class
                  with font-awesome or any other icon font library -->
                                 <li class="nav-item">
                                     <a href="#" class="nav-link">
                                         <i class="nav-icon fas fa-home"></i>
                                         <p>
                                             Beranda
                                         </p>
                                     </a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="#" class="nav-link">
                                         <i class="nav-icon fas fa-folder"></i>
                                         <p>
                                             Data
                                             <i class="right fas fa-angle-left"></i>
                                         </p>
                                     </a>
                                     <ul class="nav nav-treeview">
                                         <li class="nav-item">
                                             <a href="../barang/data_barang.php" class="nav-link">
                                                 <i class="fa-solid fa-box nav-icon"></i>
                                                 <p>Data Barang</p>
                                             </a>
                                         </li>
                                         <li class="nav-item">
                                             <a href="../barang/penjualan.php" class="nav-link">
                                                 <i class="far fa-circle nav-icon"></i>
                                                 <p>Data Penjualan</p>
                                             </a>
                                         </li>
                                         <li class="nav-item">
                                             <a href="../barang/pembelian.php" class="nav-link">
                                                 <i class="far fa-circle nav-icon"></i>
                                                 <p>Data Pembelian</p>
                                             </a>
                                         </li>
                                     </ul>
                                 </li>
                                 <li class="nav-item">
                                     <a href="#" class="nav-link">
                                         <i class="nav-icon fas fa-file"></i>
                                         <p>
                                             Laporan
                                             <i class="right fas fa-angle-left"></i>
                                         </p>
                                     </a>
                                     <ul class="nav nav-treeview">
                                         <li class="nav-item">
                                             <a href="../../index.html" class="nav-link">
                                                 <i class="fa-solid fa-calendar-days nav-icon"></i>
                                                 <p>Harian
                                                     <i class="right fas fa-angle-left"></i>
                                                 </p>
                                             </a>
                                             <ul class="nav nav-treeview">
                                                 <li class="nav-item">
                                                     <a href="../../index.html" class="nav-link">
                                                         <i class="fa-solid fa-square-poll-vertical nav-icon"></i>
                                                         <p>Penjualan</p>
                                                     </a>
                                                 </li>
                                                 <li class="nav-item">
                                                     <a href="../../index2.html" class="nav-link">
                                                         <i class="fa-solid fa-boxes-stacked nav-icon"></i>
                                                         <p>Inventori Stok Barang</p>
                                                     </a>
                                                 </li>
                                             </ul>
                                         </li>
                                         <li class="nav-item">
                                             <a href="../../index.html" class="nav-link">
                                                 <i class="fa-solid fa-calendar-days nav-icon"> </i>
                                                 <p>
                                                     Pekanan
                                                     <i class="right fas fa-angle-left"></i>
                                                 </p>
                                             </a>
                                             <ul class="nav nav-treeview">
                                                 <li class="nav-item">
                                                     <a href="../../index.html" class="nav-link">
                                                         <i class="fa-solid fa-square-poll-vertical nav-icon"></i>
                                                         <p>Penjualan</p>
                                                     </a>
                                                 </li>
                                                 <li class="nav-item">
                                                     <a href="../../index2.html" class="nav-link">
                                                         <i class="fa-solid fa-boxes-stacked nav-icon"></i>
                                                         <p>Inventori Stok Barang</p>
                                                     </a>
                                                 </li>
                                                 <li class="nav-item">
                                                     <a href="../../index.html" class="nav-link">
                                                         <i class="fa-solid fa-cart-flatbed nav-icon"></i>
                                                         <p>Pembelian</p>
                                                     </a>
                                                 </li>
                                             </ul>
                                         </li>
                                         <li class="nav-item">
                                             <a href="../../index.html" class="nav-link">
                                                 <i class="fa-solid fa-calendar-days nav-icon"></i>
                                                 <p>Bulanan
                                                     <i class="right fas fa-angle-left"></i>
                                                 </p>
                                             </a>
                                             <ul class="nav nav-treeview">
                                                 <li class="nav-item">
                                                     <a href="../../index.html" class="nav-link">
                                                         <i class="fa-solid fa-square-poll-vertical nav-icon"></i>
                                                         <p>Penjualan</p>
                                                     </a>
                                                 </li>
                                                 <li class="nav-item">
                                                     <a href="../../index2.html" class="nav-link">
                                                         <i class="fa-solid fa-boxes-stacked nav-icon"></i>
                                                         <p>Inventori Stok Barang</p>
                                                     </a>
                                                 </li>
                                                 <li class="nav-item">
                                                     <a href="../../index.html" class="nav-link">
                                                         <i class="fa-solid fa-cart-flatbed nav-icon"></i>
                                                         <p>Pembelian</p>
                                                     </a>
                                                 </li>
                                                 <li class="nav-item">
                                                     <a href="../../index.html" class="nav-link">
                                                         <i class="fa-solid fa-clipboard-user nav-icon"></i>
                                                         <p>Kinerja Karyawan</p>
                                                     </a>
                                                 </li>
                                                 <li class="nav-item">
                                                     <a href="../../index.html" class="nav-link">
                                                         <i class="fa-solid fa-chart-column nav-icon"></i>
                                                         <p>Laba Rugi</p>
                                                     </a>
                                                 </li>
                                                 <li class="nav-item">
                                                     <a href="../../index.html" class="nav-link">
                                                         <i class="fa-solid fa-prescription nav-icon"></i>
                                                         <p>Narkotika dan Psikotropika</p>
                                                     </a>
                                                 </li>
                                                 <li class="nav-item">
                                                     <a href="../../index.html" class="nav-link">
                                                         <i class="fa-solid fa-money-check nav-icon"></i>
                                                         <p>Keuangan</p>
                                                     </a>
                                                 </li>
                                             </ul>
                                         </li>
                                         <li class="nav-item">
                                             <a href="../../index.html" class="nav-link">
                                                 <i class="fa-solid fa-calendar-days nav-icon"></i>
                                                 <p>Tahunan
                                                     <i class="right fas fa-angle-left"></i>
                                                 </p>
                                             </a>
                                             <ul class="nav nav-treeview">
                                                 <li class="nav-item">
                                                     <a href="../../index.html" class="nav-link">
                                                         <i class="fa-solid fa-square-poll-vertical nav-icon"></i>
                                                         <p>Penjualan</p>
                                                     </a>
                                                 </li>
                                                 <li class="nav-item">
                                                     <a href="../../index2.html" class="nav-link">
                                                         <i class="fa-solid fa-boxes-stacked nav-icon"></i>
                                                         <p>Inventori Stok Barang</p>
                                                     </a>
                                                 </li>
                                                 <li class="nav-item">
                                                     <a href="../../index.html" class="nav-link">
                                                         <i class="fa-solid fa-cart-flatbed nav-icon"></i>
                                                         <p>Pembelian</p>
                                                     </a>
                                                 </li>
                                                 <li class="nav-item">
                                                     <a href="../../index.html" class="nav-link">
                                                         <i class="fa-solid fa-clipboard-user nav-icon"></i>
                                                         <p>Kinerja Karyawan</p>
                                                     </a>
                                                 </li>
                                                 <li class="nav-item">
                                                     <a href="../../index.html" class="nav-link">
                                                         <i class="fa-solid fa-chart-column nav-icon"></i>
                                                         <p>Laba Rugi</p>
                                                     </a>
                                                 </li>
                                                 <li class="nav-item">
                                                     <a href="../../index.html" class="nav-link">
                                                         <i class="fa-solid fa-money-check nav-icon"></i>
                                                         <p>Keuangan</p>
                                                     </a>
                                                 </li>
                                             </ul>
                                         </li>
                                     </ul>
                                 </li>
                                 <li class="nav-item">
                                     <a href="../barang/stok.php" class="nav-link">
                                         <i class="nav-icon fas fa-chart-pie"></i>
                                         <p>
                                             Kartu Stok
                                         </p>
                                     </a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="../barang/faktur_beli.php" class="nav-link">
                                         <i class="nav-icon fas fa-tree"></i>
                                         <p>
                                             Faktur Pembelian
                                         </p>
                                     </a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="#" class="nav-link">
                                         <i class="nav-icon fas fa-edit"></i>
                                         <p>
                                             Pengaturan
                                         </p>
                                     </a>
                                 </li>
                                 <li class="nav-header">ADDONS</li>
                                 <li class="nav-item">
                                     <a href="../calendar.html" class="nav-link">
                                         <i class=""></i>
                                         <p>
                                             User
                                             <span class="badge badge-info right">2</span>
                                         </p>
                                     </a>
                                 </li>
                             </ul>
                         </nav>
                         <!-- /.sidebar-menu -->
                     </div>
                     <!-- /.sidebar -->
                 </aside> <!-- Control Sidebar -->
                 <aside class="control-sidebar control-sidebar">
                     <!-- Control sidebar content goes here -->
                 </aside>
                 <!-- /.control-sidebar -->
                 <?php }
                 //Supplier
                 elseif ($_SESSION['akses'] =='supplier') { $nrs = $_SESSION['nrs'];?>
                 <!-- Main Sidebar Container -->
                 <aside class="main-sidebar sidebar-primary elevation-4">
                     <!-- Brand Logo -->
                     <a href="../../index3.html" class="brand-link elevation-4">
                         <img src="../../assets/dist/img/AdminLTELogo.png" alt="Apotek Senyum Logo"
                             class="brand-image img-circle elevation-3" style="opacity: .8">
                         <span class="brand-text font-weight-light">Apotek Senyum 3</span>
                     </a>
                     <!-- Sidebar -->
                     <div class="sidebar">
                         <!-- Sidebar user (optional) -->
                         <div class="user-panel mt-3 pb-3 mb-3 d-flex">

                             <div class="info">
                                 <h4 href="#" class="d-block">Supplier</h4>
                             </div>
                         </div>

                         <!-- SidebarSearch Form -->
                         <div class="form-inline">
                             <div class="input-group" data-widget="sidebar-search">
                                 <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                                     aria-label="Search">
                                 <div class="input-group-append">
                                     <button class="btn btn-sidebar">
                                         <i class="fas fa-search fa-fw"></i>
                                     </button>
                                 </div>
                             </div>
                         </div>

                         <!-- Sidebar Menu -->
                         <nav class="mt-2">
                             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                                 data-accordion="false">
                                 <!-- Add icons to the links using the .nav-icon class
                  with font-awesome or any other icon font library -->
                                 <li class="nav-item">
                                     <a href="#" class="nav-link">
                                         <i class="nav-icon fas fa-home"></i>
                                         <p>
                                             Beranda
                                         </p>
                                     </a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="#" class="nav-link">
                                         <i class="nav-icon fas fa-folder"></i>
                                         <p>
                                             Data
                                             <i class="right fas fa-angle-left"></i>
                                         </p>
                                     </a>
                                     <ul class="nav nav-treeview">
                                         <li class="nav-item">
                                             <a href="../barang/data_barang.php" class="nav-link">
                                                 <i class="fa-solid fa-box nav-icon"></i>
                                                 <p>Data Barang</p>
                                             </a>
                                         </li>
                                         <li class="nav-item">
                                             <a href="../barang/penjualan.php" class="nav-link">
                                                 <i class="far fa-circle nav-icon"></i>
                                                 <p>Data Penjualan</p>
                                             </a>
                                         </li>
                                         <li class="nav-item">
                                             <a href="../barang/pembelian.php" class="nav-link">
                                                 <i class="far fa-circle nav-icon"></i>
                                                 <p>Data Pembelian</p>
                                             </a>
                                         </li>
                                     </ul>
                                 </li>
                                 <li class="nav-item">
                                     <a href="../barang/stok.php" class="nav-link">
                                         <i class="nav-icon fas fa-chart-pie"></i>
                                         <p>
                                             Kartu Stok
                                         </p>
                                     </a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="../barang/faktur_beli.php" class="nav-link">
                                         <i class="nav-icon fas fa-tree"></i>
                                         <p>
                                             Faktur Pembelian
                                         </p>
                                     </a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="#" class="nav-link">
                                         <i class="nav-icon fas fa-edit"></i>
                                         <p>
                                             Pengaturan
                                         </p>
                                     </a>
                                 </li>
                                 <li class="nav-header">ADDONS</li>
                                 <li class="nav-item">
                                     <a href="../calendar.html" class="nav-link">
                                         <i class=""></i>
                                         <p>
                                             User
                                             <span class="badge badge-info right">2</span>
                                         </p>
                                     </a>
                                 </li>
                             </ul>
                         </nav>
                         <!-- /.sidebar-menu -->
                     </div>
                     <!-- /.sidebar -->
                 </aside> <!-- Control Sidebar -->
                 <aside class="control-sidebar control-sidebar">
                     <!-- Control sidebar content goes here -->
                 </aside>
                 <!-- /.control-sidebar -->
                 <?php }
                //Pelanggan
                elseif ($_SESSION['akses'] =='pelanggan') { ?>
                 <!-- Main Sidebar Container -->
                 <aside class="main-sidebar sidebar-primary elevation-4">
                     <!-- Brand Logo -->
                     <a href="../../index3.html" class="brand-link elevation-4">
                         <img src="../../assets/dist/img/AdminLTELogo.png" alt="Apotek Senyum Logo"
                             class="brand-image img-circle elevation-3" style="opacity: .8">
                         <span class="brand-text font-weight-light">Apotek Senyum 3</span>
                     </a>
                     <!-- Sidebar -->
                     <div class="sidebar">
                         <!-- Sidebar user (optional) -->
                         <div class="user-panel mt-3 pb-3 mb-3 d-flex">

                             <div class="info">
                                 <h4 href="#" class="d-block">Pelanggan</h4>
                             </div>
                         </div>

                         <!-- SidebarSearch Form -->
                         <div class="form-inline">
                             <div class="input-group" data-widget="sidebar-search">
                                 <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                                     aria-label="Search">
                                 <div class="input-group-append">
                                     <button class="btn btn-sidebar">
                                         <i class="fas fa-search fa-fw"></i>
                                     </button>
                                 </div>
                             </div>
                         </div>

                         <!-- Sidebar Menu -->
                         <nav class="mt-2">
                             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                                 data-accordion="false">
                                 <!-- Add icons to the links using the .nav-icon class
                  with font-awesome or any other icon font library -->
                                 <li class="nav-item">
                                     <a href="#" class="nav-link">
                                         <i class="nav-icon fas fa-home"></i>
                                         <p>
                                             Beranda
                                         </p>
                                     </a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="#" class="nav-link">
                                         <i class="nav-icon fas fa-folder"></i>
                                         <p>
                                             Data
                                             <i class="right fas fa-angle-left"></i>
                                         </p>
                                     </a>
                                     <ul class="nav nav-treeview">
                                         <li class="nav-item">
                                             <a href="../barang/data_barang.php" class="nav-link">
                                                 <i class="fa-solid fa-box nav-icon"></i>
                                                 <p>Data Barang</p>
                                             </a>
                                         </li>
                                         <li class="nav-item">
                                             <a href="../barang/penjualan.php" class="nav-link">
                                                 <i class="far fa-circle nav-icon"></i>
                                                 <p>Data Penjualan</p>
                                             </a>
                                         </li>
                                         <li class="nav-item">
                                             <a href="../barang/pembelian.php" class="nav-link">
                                                 <i class="far fa-circle nav-icon"></i>
                                                 <p>Data Pembelian</p>
                                             </a>
                                         </li>
                                     </ul>
                                 </li>
                                 <li class="nav-item">
                                     <a href="pengaturan.php" class="nav-link">
                                         <i class="nav-icon fas fa-edit"></i>
                                         <p>
                                             Pengaturan
                                         </p>
                                     </a>
                                 </li>
                                 <li class="nav-header">ADDONS</li>
                                 <li class="nav-item">
                                     <a href="../calendar.html" class="nav-link">
                                         <i class=""></i>
                                         <p>
                                             User
                                             <span class="badge badge-info right">2</span>
                                         </p>
                                     </a>
                                 </li>
                             </ul>
                         </nav>
                         <!-- /.sidebar-menu -->
                     </div>
                     <!-- /.sidebar -->
                 </aside> <!-- Control Sidebar -->
                 <aside class="control-sidebar control-sidebar">
                     <!-- Control sidebar content goes here -->
                 </aside>
                 <!-- /.control-sidebar -->
                 <?php
                } ?>