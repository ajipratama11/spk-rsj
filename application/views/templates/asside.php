<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="<?= base_url() ?>assets/admin/images/ch.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Assembling</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

        <li class="nav-item">
          <a href="<?= base_url('Beranda'); ?>" class="nav-link">
            <i class="nav-icon fa fa-dashboard"></i>
            <p>
              Beranda
            </p>
          </a>
        </li>
        <?php $jabatan = $this->session->userdata('jabatan'); ?>
        <?php if ($jabatan == 1 || $jabatan == 5) { ?>
        <li class="nav-item">
          <a href="<?= base_url('Data/tabel_rekdis'); ?>" class="nav-link">
            <i class="nav-icon fa fa-book"></i>
            <p>
              Data Rekam Medis
            </p>
          </a>
        </li>
        <?php } ?>
        <?php if ($jabatan == 1 || $jabatan == 5) { ?>
        <li class="nav-item">
          <a type="button" data-toggle="modal" data-target="#modalRekdis" class="nav-link">
            <i class="nav-icon fa fa-edit"></i>
            <p>
              Cek Ketidaklengkapan
            </p>
          </a>
        </li>
        <?php } ?>
        <?php if ($jabatan == 1 || $jabatan == 5) { ?>
        <li class="nav-item">
          <a href="<?= base_url('Akun'); ?>" class="nav-link">
            <i class="nav-icon fa fa-user"></i>
            <p>
              Data Petugas
            </p>
          </a>
        </li>
        <?php } ?>
        <li class="nav-item has-treeview">
          <a href="<?= base_url('Laporan/laporan') ?>" class="nav-link">
            <i class="nav-icon fa fa-file"></i>
            <p>
              Laporan
            </p>
          </a>
        </li>
        <?php if ($jabatan == 1 || $jabatan == 5) { ?>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-trash"></i>
            <p>
              Data Terhapus
              <i class="fa fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('Data/formterhapus'); ?>" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Data Rekam Medis</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('Laporan/formterhapus'); ?>" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Data Laporan</p>
              </a>
            </li>
          </ul>
        </li>
        <?php } ?>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
<div class="modal fade" id="modalRekdis" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Cek Nomor Rekam Medis</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo base_url('Laporan/cek_rm'); ?>" method="post" enctype="multipart/form-data">

                                <div class="form-group row">
                                    <label for="fname" class="col-sm-4  control-label col-form-label">Masukkan Nomor Rekam Medis</label>
                                    <div class="col-sm-8">
                                        <input type="text" style="border-radius: 10px;" name="no_rm" class="form-control" id="username" placeholder="Nomor Rekam Medis" required>
                                    </div>
                                </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Cek</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>