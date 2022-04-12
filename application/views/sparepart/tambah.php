<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
    <title>Dashboard</title>
</head>

<body>
    <div class="d-flex" id="wrapper">

        <!-- sidebar -->
        <?php $this->load->view('layout/sidebar') ?>

        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->

            <!-- navbar -->
            <?php $this->load->view('layout/navbar') ?>

            <!-- Page content-->
            <div class="container-fluid">
                <h1 class="mt-4">Tambah Sparepart</h1>
                <p class="text-primary"><?php echo $_SESSION['username'] ?></p>
                <div class="container" style="width:100vw;">
                    <form action="<?php echo base_url('Sparepart/tambahdata') ?>" method="POST">
                        <div class="container" style="width:50vw">
                            <div class="row">

                                <div class="col">
                                    <label class="form-label">Jenis Mobil</label>
                                    <select class="form-select mb-3" name="id_jenis">
                                        <option value="0">pilih jenis mobil</option>
                                        <?php
                                        foreach ($jenis as $row) {
                                        ?>
                                            <option value="<?php echo $row->id_jenis ?>"><?php echo $row->nama_jenis ?></option>
                                        <?php } ?>
                                    </select>
                                    <label class="form-label">Nama Part</label>
                                    <input class="form-control" type="nama_part" name="nama_part" required>
                                    <label class="form-label">Harga Satuan</label>
                                    <input class="form-control mb-3" type="number" name="harga_satuan" required>
                                </div>

                                <div class="col">
                                    <label class="form-label">Spesifikasi</label>
                                    <textarea class="form-control mb-3" type="text" name="spesifikasi" required></textarea>
                                    <label class="form-label">Jumlah Stock</label>
                                    <input class="form-control mb-3" type="number" name="qty" required>

                                </div>
                            </div>



                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="<?php echo base_url('Mekanik') ?>" class="btn btn-secondary">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('Layout/footer') ?>
    <script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>