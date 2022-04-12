<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
    <title>Login Administrator</title>
</head>

<body>
    <div class="container">
        <div class="container w-100" style="position:relative;margin-top:10%;display: flex;align-items: center;justify-content:center">
            <div class="card text">
                <div class="card-body shadow">
                    <!-- form -->
                    <form action="<?php echo site_url() ?>/officer/Auth" method="POST">
                        <h2 class="text-center mb-3 " style="font-family:Lato">Login</h2>
                        <center>
                            <?php
                            $query = $this->db->query("SELECT * FROM bengkel WHERE id = 1 ");
                            foreach ($query->result() as $row) {
                            ?>
                                <img class="img-top mb-3" src="<?= base_url('assets/img/') . $row->logo ?>" style="position:relative;width:20%;height:20;">
                                <br>
                            <?php } ?>
                        </center>


                        <!-- alert session -->
                        <?php $pesan = $this->session->flashdata('pesan'); ?>
                        <?php if (isset($pesan)) : ?>
                            <div class="alert alert-danger">
                                Login Gagal ,<strong> Username Atau Password salah!!</strong>
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
    <script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>