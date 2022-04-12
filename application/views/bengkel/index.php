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
                <!-- alert -->
                <?php $tambah = $this->session->flashdata('tambah'); ?>
                <?php if (isset($tambah)) : ?>
                    <div class="alert alert-success mt-2">
                        Berhasil Tambah User
                    </div>
                <?php endif ?>
                <?php $edit = $this->session->flashdata('edit'); ?>
                <?php if (isset($edit)) : ?>
                    <div class="alert alert-warning mt-2">
                        Data Berhasil di edit
                    </div>
                <?php endif ?>
                <?php $hapus = $this->session->flashdata('hapus'); ?>
                <?php if (isset($hapus)) : ?>
                    <div class="alert alert-danger mt-2">
                        Data Berhasil Hapus
                    </div>
                <?php endif ?>
                <!-- end alert -->
                <div class="card shadow mt-5">
                    <div class="card-header">
                        Data Profil Bengkel
                    </div>
                    <div class="container mt-3" style="width:100vw;">
                        <div class="container">
                            <?php
                            foreach ($data as $row) {
                            ?>
                                <center>
                                    <p class="bold" hidden><?php echo $row->id ?></p>
                                    <p class="fw-bold">Logo</p>
                                    <img class="mb-3" src="<?php echo base_url('assets/img/') . $row->logo ?>" style="position:relative;width:10%;height:10%">
                                    <p class="fw-bold">Nama Bengkel</p>
                                    <p class="bold"><?php echo $row->nama ?></p>
                                    <p class="fw-bold">Alamat</p>
                                    <p class="bold"><?php echo $row->alamat ?></p>
                                </center>
                            <?php } ?>
                        </div>
                        <a href="<?php echo base_url('Bengkel/edit')?>/<?php echo $row->id?>" class="btn btn-warning mb-3 fw-bold">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('Layout/footer') ?>
    <script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>