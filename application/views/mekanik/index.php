<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
    <title>Dashboard Adminitrator</title>
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
                        Berhasil Tambah Data
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
                        Data Mekanik
                    </div>
                    <div class="container mt-3" style="width:100vw;">
                        <?php
                        if ($_SESSION['level'] == 1) {
                        ?>
                            <a href="<?php echo base_url('Mekanik/tambahuser') ?>" class="btn btn-primary mb-3">Tambah Mekanik</a>
                        <?php
                        }
                        ?>


                        <table class="table table-bordered">
                            <tr class="text-center">
                                <th>Id Mekanik</th>
                                <th>Username</th>
                                <th>password</th>
                                <th>Level</th>
                                <?php
                                if ($_SESSION['level'] == 1) {
                                ?>
                                    <th>Aksi</th>
                                <?php
                                }
                                ?>
                            </tr>
                            <?php
                            $count = 0;
                            foreach ($data as $row) {
                                $count = $count + 1;
                            ?>
                                <tr class="text-center">
                                    <td><?php echo $row->id_mekanik ?></td>
                                    <td><?php echo $row->username ?></td>
                                    <td><?php echo $row->password ?></td>
                                    <td><?php echo $row->no_telepon ?></td>
                                    <?php
                                    if ($_SESSION['level'] == 1) {
                                    ?>
                                        <td>
                                            <a href="<?php echo base_url('Mekanik/edituser') ?>/<?php echo $row->id_mekanik ?>" class="btn btn-warning">edit</a>
                                            <a href="<?php echo base_url('Mekanik/hapus') ?>/<?php echo $row->id_mekanik ?>" class="btn btn-danger">Hapus</a>
                                        </td>
                                    <?php
                                    }
                                    ?>
                                </tr>
                            <?php
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('Layout/footer')?>
    <script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>