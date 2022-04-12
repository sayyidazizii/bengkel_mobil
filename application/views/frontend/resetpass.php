<?php $this->load->view('Frontend/top') ?>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <?php $this->load->view('Frontend/nav') ?>
        <div class="container">
            <!-- Page content-->
            <div class="container-fluid">
                <h1 class="mt-4">Ubah Password</h1>
                <div class="container mt-5" style="width:100vw;">
                    <form action="<?php echo base_url('Mekanik/editpass') ?>" method="POST">
                        <div class="container" style="width:50vw">
                            <label class="form-label" hidden>Id Mekanik</label>
                            <input class="form-control" type="text" name="id_mekanik" value="<?php echo $mekanik->id_mekanik ?>" hidden>
                            <input class="form-control" type="text" name="username" value="<?php echo $mekanik->username ?>" hidden>
                            <label class="form-label">Username</label>
                            <input class="form-control" type="text" name="username" value="<?php echo $mekanik->username ?>" readonly>
                            <label class="form-label ">Password</label>
                            <input class="form-control mb-3" type="password" name="password" value="<?php echo $mekanik->password ?>" required>
                            <label class="form-label ">No telepon</label>
                            <input class="form-control mb-3" type="text" name="no_telepon" value="<?php echo $mekanik->no_telepon ?>" readonly>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="<?php echo base_url('Home') ?>" class="btn btn-secondary">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <!-- Footer-->
    <?php $this->load->view('Frontend/footer') ?>
    <!-- Bootstrap core JS-->
    <?php $this->load->view('Frontend/bottom') ?>