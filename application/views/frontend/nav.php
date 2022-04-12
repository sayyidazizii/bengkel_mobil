<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <div class="container px-5">
                    <a class="navbar-brand" href="<?php echo base_url('/Home') ?>" style="font-family:arial;">
                     <?php
                            $query = $this->db->query("SELECT * FROM bengkel WHERE id = 1 ");
                            foreach ($query->result() as $row) {
                            ?>
                                <img class="img-fluid" src="<?= base_url('assets/img/') . $row->logo ?>" style="position:relative;width:20%;height:20;">
                            <?php } ?>
                    Vistoe</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                           
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url('/Home') ?>">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url('/Frontend/paket') ?>">Riwayat Servis</a></li>
                            <?php  if($this->session->userdata('is_login') == true){?>
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url('/Frontend/pesanan/'.$this->session->userdata('id_pelanggan')) ?>">Buat Pengaduan</a></li>
                            <?php } ?>
                            <?php  if($this->session->userdata('is_login') != true){?>
                            <li class="nav-item btn btn-primary "><a class="text-light text-decoration-none" href="<?php echo base_url('/Auth') ?>">
                            <i class="fas fa-sign-in-alt fa-sm fa-fw mr-2 text-gray-400"></i>Login</a></li>
                            <?php } ?>

                            <?php  if($this->session->userdata('is_login') == true){?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownPortfolio" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo ($this->session->userdata('username')) ?></a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownPortfolio">
                                    <li><a class="dropdown-item" href="<?php echo base_url('/Home/profil') ?>">Profil</a></li>
                                    <li><a class="dropdown-item" href="<?php echo base_url('/Mekanik/resetpass') ?>/<?php echo $_SESSION['id_mekanik']?>">Ubah Password</a></li>
                                <!-- Button trigger modal -->
                                    <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Log out
                                    </a>
                                </ul>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </nav>




            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Ready to Leave?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                Select "Logout" below if you are ready to end your current session.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <a href="<?php echo base_url('/Auth/logout') ?>"><button type="button" class="btn btn-primary">Log out</button></a>
                </div>
                </div>
            </div>
            </div>