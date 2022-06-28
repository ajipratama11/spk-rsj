<nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    

    <!-- SEARCH FORM -->
    

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-bell-o"></i>
          <strong><?php echo $this->session->userdata('username') ?></strong>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
          <a type="button" data-toggle="modal" data-target="#modalAkun" class="dropdown-item">
            <i class="fa fa-envelope mr-2"></i> Ubah Password
          </a>
          <div class="dropdown-divider"></div>
          
         
          <a href="<?= base_url('Logout') ?>" class="dropdown-item dropdown-footer">Logout</a>
        </div>
      </li>
   
    </ul>
  </nav>
  <div class="modal fade" id="modalAkun" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Ubah Password</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo base_url('Akun/ubahPassword'); ?>" method="post" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-4  control-label col-form-label">Masukkan Password lama</label>
                                    <div class="col-sm-8">
                                        <input type="text" style="border-radius: 10px;" name="passwordlama" class="form-control" id="username" placeholder="password lama" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-4  control-label col-form-label">Masukkan Password Baru</label>
                                    <div class="col-sm-8">
                                        <input type="text" style="border-radius: 10px;" name="passwordbaru" class="form-control" id="username" placeholder="password baru" required>
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