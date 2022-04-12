<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <center>
            <div class="card shadow mb-3" style="position:relative;margin-top:10%;display: flex;align-items: center;justify-content:center;max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <?php
                        $query = $this->db->query("SELECT * FROM bengkel WHERE id = 1 ");
                        foreach ($query->result() as $row) {
                        ?>
                            <img class="img-fluid rounded-start mt-5" src="<?= base_url('assets/img/') . $row->logo ?>">
                        <?php } ?>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Login</h5>
                            <!-- form -->
                            <form action="<?php echo site_url() ?>/Auth/Auth" method="POST">
                                <!-- alert session -->
                                <?php $pesan = $this->session->flashdata('pesan'); ?>
                                <?php if (isset($pesan)) : ?>
                                    <div class="alert alert-danger">
                                        <strong>Login Gagal</strong>, Username Atau Password salah!!
                                    </div>
                                <?php endif ?>

                                <div class="mb-3">
                                    <label class="form-label">Username</label>
                                    <input type="text" name="username" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" required>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-primary shadow">Login</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

    </div>
    <script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>