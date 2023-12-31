<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title><?php echo $title; ?></title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/select2/dist/css/select2.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/components.css">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">

            <!-- this->load->topbar  -->
            <?php $this->load->view('/topbar'); ?>
            <!-- this->load->topbar  -->


            <!-- this->load->menu  -->
            <?php $this->load->view('/menu'); ?>
            <!-- this->load->menu  -->


            <!-- This->Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1><?php echo $title; ?></h1>
                    </div>
                    <?php

                    echo validation_errors('<div class="alert alert-danger">', '</div>')

                    ?>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <!-- <form method="POST" action="<?php echo site_url('user/add'); ?>" enctype="multipart/form-data"> -->
                                <?php echo form_open('user/add') ?>
                                <div class="card-body">
                                    <!-- <input type="hidden" id="id_anggota" name="id_anggota" value=""> -->
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Pilih User</label>
                                            <select class="form-control select2" name="id_users">
                                                <option value=""> Pilih User</option>
                                                <?php foreach ($users as $key) { ?>
                                                    <!-- <option value="<?= $key->id_users ?>"><?= $key->nama_panjang ?></option> -->

                                                    <option value="<?= $key->id_users ?>" <?= ($key->id_users == set_value('id_users')) ? 'selected="selected"' : ''; ?>><?= $key->nama_panjang ?></option>

                                                <?php } ?>
                                            </select>
                                        </div>

                                        <!-- <div class="form-group">
                                            <label>User</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="id_users" >
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary" data-toggle="modal" data-target="#users">
                                                        <i class="fas fa-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div> -->

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Username</label>
                                                    <input type="text" class="form-control" name="username" value="<?php echo set_value('username'); ?>">

                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input type="password" class="form-control" name="password" value="<?php echo set_value('password'); ?>">

                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Nama Lengkap</label>
                                                    <input type="text" class="form-control" name="fullname" value="<?php echo set_value('fullname'); ?>">

                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label>User Akses</label>
                                                    <select class="form-control" name="user_akses">
                                                        <option value="">Pilih</option>
                                                        <option value="0" <?php echo (set_value('user_akses') == '0') ? " selected=' selected'" : "" ?>>Tidak Ada</option>
                                                        <option value="1" <?php echo (set_value('user_akses') == '1') ? " selected=' selected'" : "" ?>>Admin</option>
                                                        <option value="2" <?php echo (set_value('user_akses') == '2') ? " selected=' selected'" : "" ?>>User</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label class="d-block">User Status</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="user_status" id="user_status1" value="1" <?php echo set_radio('user_status', '1'); ?>>
                                                        <label class="form-check-label" for="user_status1">
                                                            Aktif
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="user_status" id="user_status2" value="0" <?php echo set_radio('user_status', '0'); ?>>
                                                        <label class="form-check-label" for="user_status2">
                                                            Non-Aktif
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer bg-whitesmoke br">
                                    <a href="<?= base_url('user') ?>" class="btn btn-danger">Close</a>
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                </div>
                                <?php echo form_close() ?>
                            </div>
                        </div>
                    </div>

                </section>
            </div>
            <!-- This->Content -->


            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="users">
                <div class="modal-dialog modal-lg" role="document">
                    isi
                </div>
            </div>



            <!-- this->load->footer  -->
            <?php $this->load->view('/footer'); ?>
            <!-- this->load->footer  -->

        </div>
    </div>


    <!-- General JS Scripts -->
    <script src="<?php echo base_url(); ?>assets/modules/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/popper.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/tooltip.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="<?php echo base_url(); ?>assets/modules/select2/dist/js/select2.full.min.js"></script>

    <!-- Template JS File -->
    <script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>

</body>

</html>