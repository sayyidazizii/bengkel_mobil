  <!-- Sidebar-->
  <div class="border-end bg-white" id="sidebar-wrapper">
    <div class="list-group list-group-flush ">
      <a class="list-group-item list-group-item-action list-group-item-light p-5 text-center bg-primary text-light fw-bolder" href="<?php echo base_url('Dashboard') ?>">
        <?php
        $query = $this->db->query("SELECT * FROM bengkel WHERE id = 1 ");
        foreach ($query->result() as $row) {
        ?>
          <img class="img-top mb-3" src="<?= base_url('assets/img/') . $row->logo ?>" style="position:relative;width:30%;height:30%;">
          <br>
          <?php echo $row->nama ?></a>
    <?php } ?>



    <div class="accordion accordion-flush" id="accordionFlushExample">
      <a href="<?php echo base_url('Dashboard') ?>" class="text-decoration-none">
        <ul class="list-group list-group-flush mb-2 mt-2 text-center">
          <li class="list-group-item">Beranda</li>
        </ul>
      </a>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingOne">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            Bengkel
          </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">
            <a href="<?php echo base_url('Mobil') ?>" class="text-decoration-none">
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Jenis Mobil</li>
              </ul>
            </a>
            <a href="<?php echo base_url('Sparepart') ?>" class="text-decoration-none">
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Sparepart</li>
              </ul>
            </a>
            <a href="<?php echo base_url('Sparepart') ?>" class="text-decoration-none">
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Barang Masuk</li>
              </ul>
            </a>
            <a href="<?php echo base_url('Sparepart') ?>" class="text-decoration-none">
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Barang Keluar</li>
              </ul>
            </a>
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingcus">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsecus" aria-expanded="false" aria-controls="flush-collapsecus">
            Customer
          </button>
        </h2>
        <div id="flush-collapsecus" class="accordion-collapse collapse" aria-labelledby="flush-headingcus" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">
            <a href="<?php echo base_url('Customer') ?>" class="text-decoration-none">
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Data Customer</li>
              </ul>
            </a>
            <a href="<?php echo base_url('Customer/mobil') ?>" class="text-decoration-none">
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Mobil</li>
              </ul>
            </a>
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
            Service
          </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">
            <a href="<?php echo base_url('Service') ?>" class="text-decoration-none">
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Data Service</li>
              </ul>
            </a>
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            Transaksi
          </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">
            <a href="<?php echo base_url('Transaksi') ?>" class="text-decoration-none">
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Data transaksi</li>
              </ul>
            </a>
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingfour">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
            Laporan
          </button>
        </h2>
        <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">
            <a href="<?php echo base_url('Laporan') ?>" class="text-decoration-none">
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Data Laporan</li>
              </ul>
            </a>
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingfive2">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefive2" aria-expanded="false" aria-controls="flush-collapsefive2">
            User
          </button>
        </h2>
        <div id="flush-collapsefive2" class="accordion-collapse collapse" aria-labelledby="flush-headingfive2" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">
            <a href="<?php echo base_url('User') ?>" class="text-decoration-none">
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Petugas</li>
              </ul>
            </a>
            <a href="<?php echo base_url('Mekanik') ?>" class="text-decoration-none">
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Mekanik</li>
              </ul>
            </a>
            <a href="<?php echo base_url('user/supplier') ?>" class="text-decoration-none">
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Supplier</li>
              </ul>
            </a>

          </div>
        </div>
      </div>


      <div class="accordion-item">
        <a href="<?php echo base_url('Dashboard/profil') ?>" class="text-decoration-none">
          <ul class="list-group list-group-flush mb-2 mt-2 ">
            <li class="list-group-item">Login as : <?php echo $_SESSION['username'] ?></li>
          </ul>
        </a>
      </div>

    </div>
    </div>
  </div>