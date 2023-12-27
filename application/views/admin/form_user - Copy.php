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
                                <?php echo form_open('user/add') ?>
                                <div class="card-body">
                                    <!-- <input type="hidden" id="id_anggota" name="id_anggota" value=""> -->
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Nomor Identitas</label>
                                            <input type="text" class="form-control" name="nip_nik" value="<?php echo set_value('nip_nik'); ?>" autofocus>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Username</label>
                                                    <input type="text" class="form-control" name="username" value="<?php echo set_value('nip_nik'); ?>">

                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input type="text" class="form-control" name="password" value="<?php echo set_value('password'); ?>">

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
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Pendidikan Tertinggi</label>
                                                    <select class="form-control pendidikan" name="pendidikan" value="<?php echo set_value('pendidikan'); ?>">
                                                        <option value="">Pilih</option>
                                                        <option value="Bawah_sma">Di Bawah SMA</option>
                                                        <option value="SMA">SMA</option>
                                                        <option value="Associate">Associate</option>
                                                        <option value="Bachelor">Bachelor</option>
                                                        <option value="Master">Master</option>
                                                        <option value="Doctoral">Doctoral</option>
                                                    </select>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="form-label">Jenis Kelamin</label>
                                                    <div class="selectgroup selectgroup-pills">
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="gender" value="L" class="selectgroup-input" <?php echo set_radio('gender', 'L', TRUE); ?>>
                                                            <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-male"></i> Laki-Laki</span>
                                                        </label>
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="gender" value="P" class="selectgroup-input" <?php echo set_radio('gender', 'P', TRUE); ?>>
                                                            <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-female"></i> Perempuan</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>No Hp</label>
                                                    <input type="text" class="form-control" name="nohp" value="<?php echo set_value('nohp'); ?>">

                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Agama</label>
                                                    <select class="form-control agama" name="agama" value="<?php echo set_value('agama'); ?>">
                                                        <option value="">Pilih</option>
                                                        <option value="Islam">Islam</option>
                                                        <option value="Kristen">Kristen</option>
                                                        <option value="Hindu">Hindu</option>
                                                        <option value="Budha">Budha</option>
                                                    </select>
                                                    <!-- <div class="form-group">
                                        <label>Hobi</label>
                                        <input type="text" class="form-control inputtags" data-role="tagsinput" name="hobi">
                                    </div> -->
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Hobi</label>
                                                    <input type="text" class="form-control" name="hobi" value="<?php echo set_value('hobi'); ?>">

                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Terhitung Mulai Tanggal Dinas</label>
                                                    <input type="date" class="form-control" name="tmt_kerja" value="<?php echo set_value('tmt_kerja'); ?>">

                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Jabatan SK</label>
                                                    <select class="form-control jabatan" name="jabatan" value="<?php echo set_value('jabatan'); ?>">
                                                        <option value="">Pilih</option>
                                                        <option value="Teknisi">Teknisi</option>
                                                        <option value="IT">IT</option>
                                                    </select>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Unit</label>
                                                    <select class="form-control unit" name="unit" value="<?php echo set_value('unit'); ?>">
                                                        <option value="">Pilih</option>
                                                        <option value="Sarpras">Sarpras</option>
                                                        <option value="IT">IT</option>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group mb-0">
                                                    <label>Alamat</label>
                                                    <textarea class="form-control" name="alamat" value="<?php echo set_value('alamat'); ?>"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>User Akses</label>
                                                    <select class="form-control unit" name="unit" value="<?php echo set_value('unit'); ?>">
                                                        <option value="">Pilih</option>
                                                        <option value="0">Tidak Ada</option>
                                                        <option value="1">Admin</option>
                                                        <option value="2">User</option>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="d-block">User Status</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="user_status" id="user_status1" value="1">
                                                        <label class="form-check-label" for="user_status1">
                                                            Aktif
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="user_status" id="user_status2" value="0">
                                                        <label class="form-check-label" for="user_status2">
                                                            Non-Aktif
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Foto</label>
                                            <input type="file" class="form-control" name="foto" value="<?php echo set_value('foto'); ?>">
                                        </div>


                                    </div>

                                </div>
                                <div class="modal-footer bg-whitesmoke br">
                                    <a href="<?= base_url('user') ?>" class="btn btn-danger">Close</a>
                                    <button type="submit" class="btn btn-success" id="btnSave" onclick="save()">Simpan</button>
                                </div>
                                <?php echo form_close() ?>
                            </div>
                        </div>
                    </div>

                </section>
            </div>
            <!-- This->Content -->



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

    <!-- Template JS File -->
    <script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>

</body>

</html>