  <!-- sidebar menu -->
  <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
          <h3>General</h3>
          <ul class="nav side-menu">
              <li><a href=<?php echo base_url('home/dashboard'); ?>><i class="fa fa-dashboard"></i> Dashboard</a>
              </li>
              <li><a href="#"><i class="fa fa-inbox"></i>Data Master<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                      <li><a href=<?php echo base_url('DataMuzzaki/datamuzzaki'); ?>><i class="fa fa-group"></i>Data
                              Muzzaki</a>
                      </li>
                      <li><a href=<?php echo base_url('DataMustahiq/datamustahiq'); ?>><i class="fa fa-group"></i>Data
                              Mustahiq</a>
                      </li>
                      <li><a href=<?php echo base_url('DataBank/databank'); ?>><i class="fa fa-credit-card"></i>Data Bank Yayasan</a>
                      </li>
                  </ul>
              </li>
              <li><a href="#"><i class="fa fa-credit-card"></i>Transaksi<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                      <li><a href=<?php echo base_url('BayarZakat/datatransaksi'); ?>><i class="fa fa-credit-card"></i>Pembayaran ZIS</a>
                      </li>
                      <li><a href=<?php echo base_url('Penyaluran/datapenyaluran'); ?>><i class="fa fa-tags"></i>Penyaluran</a>
                      </li>
                  </ul>
              </li>
              <li><a href=<?php echo base_url('JenisZakat/datajeniszakat'); ?>><i class="fa fa-tags"></i>Zakat</a>
              </li>
              <li><a href=<?php echo base_url('KategoriAsnaf/datakategoriasnaf'); ?>><i class="fa fa-tags"></i>Asnaf</a>
              </li>
              <li><a href="#"><i class="fa fa-tags"></i>Laporan<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                      <li><a href="#"><i class="fa fa-file"></i>Laporan Masuk<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                              <li><a href="<?php echo base_url('Laporan/laporanmasukperzis'); ?>"><i class="fa fa-file"></i>Laporan Pemasukan Per Jenis ZIS</a></li>
                              <li><a href="<?php echo base_url('Laporan/laporanmasukpermuzzaki'); ?>"><i class="fa fa-file"></i>Laporan Pemasukan Pembayaran Muzzaki</a></li>
                          </ul>
                      </li>
                      <li><a href="<?php echo base_url('Laporan/laporankeluar'); ?>"><i class="fa fa-file"></i>Laporan Keluar</a></li>
                      <li><a href="<?php echo base_url('Laporan/laporanpenyaluran'); ?>"><i class="fa fa-file"></i>Laporan Penyaluran</a></li>
                  </ul>
              </li>
          </ul>
      </div>
  </div>
  <!-- /menu footer buttons -->
  </div>
  </div>
  <!-- top navigation -->
  <div class="top_nav">
      <div class="nav_menu">
          <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
          </div>
          <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                  <li class="nav-item dropdown open" style="padding-left: 15px;">
                      <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                          <?php $session = session() ?>
                          <img src="<?php echo base_url('theme'); ?>/production/images/user.png" alt=""><?php echo $session->get('Nama_amil') ?>
                      </a>
                      <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href=<?php echo base_url('SendEmail'); ?>><i class="fa fa-envelope pull-right"></i> Kirim email</a>
                          <a class="dropdown-item" href=<?php echo base_url('/authamil/logout'); ?>><i class="fa fa-sign-out pull-right"></i> Logout</a>
                      </div>
                      <!--<div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href=<?php //echo base_url('/auth/login'); 
                                                        ?>><i
                                  class="fa fa-sign-in pull-right"></i> Login</a>
                      </div>!-->
                  </li>


              </ul>
          </nav>
      </div>
  </div>

  <!-- /top navigation -->