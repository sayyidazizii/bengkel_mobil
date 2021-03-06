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
                <h1 class="mt-4">Edit Jenis Mobil</h1>
                <p class="text-primary"><?php echo $_SESSION['username'] ?></p>
                <div class="container" style="width:100vw;">
                    <form action="<?php echo base_url('Mobil/editdata') ?>" method="POST">
                        <div class="container" style="width:50vw">
                        <label class="form-label" hidden>ID Jenis</label>
                            <input class="form-control" type="text" name="id" value="<?php echo $jenis->id?>" required readonly hidden>
                            <label class="form-label">Nama Jenis</label>
                            <input class="form-control" type="text" name="nama_jenis" value="<?php echo $jenis->nama_jenis?>" required>
                            <label class="form-label">Jumlah Jenis</label>
                            <input class="form-control mb-3" type="text" name="jumlah_jenis" value="<?php echo $jenis->jumlah_jenis?>" required>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="<?php echo base_url('Mobil')?>" class="btn btn-secondary">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('Layout/footer')?>
    <script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>