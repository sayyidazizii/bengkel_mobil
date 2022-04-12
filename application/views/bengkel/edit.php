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
                        Edit Profil Bengkel
                    </div>
                    <div class="container mt-3" style="width:100vw;">
                        <div class="container">
                        <?php echo form_open("bengkel/tambah", array('enctype'=>'multipart/form-data')); ?>
                            <div class="container" style="width:50vw">
                                <label class="form-label" hidden>Id </label>
                                <input class="form-control" type="text" name="id" value="<?php echo $bengkel->id ?>" hidden>
                                <label class="form-label">logo</label>
                                <input class="form-control" type="file" name="logo" />
                                <label class="form-label">Nama Bengkel</label>
                                <input class="form-control" type="text" name="nama" value="<?php echo set_value('nama'); ?>" required>
                                <label class="form-label ">Alamat</label>
                                <input class="form-control mb-3" type="text" name="alamat" value="<?php echo set_value('alamat'); ?>" required>
                                <input class="btn btn-primary mb-3" type="submit" name="submit" value="Simpan">
                                <a href="<?php echo base_url('Bengkel')?> " class="btn btn-secondary mb-3">Batal</a>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('Layout/footer') ?>
    <script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>