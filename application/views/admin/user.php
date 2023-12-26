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
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/modules/datatables/datatables.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">

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


                        <div class="section-header-breadcrumb">
                            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                            <div class="breadcrumb-item"><?php echo $title; ?></div>
                        </div>
                    </div>

                    <div class="section-body">
                        <h2 class="section-title"><?php echo $title; ?></h2>

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <button class="btn btn-success" data-toggle="modal" data-target="#addmodal"><i class="fas fa-plus"></i> Tambah</button>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-md" id="table" width="100%">
                                                <thead>
                                                    <tr class="text-center">
                                                        <th>No</th>
                                                        <th>NPK/NIP</th>
                                                        <th>Nama</th>
                                                        <th>Jabatan</th>
                                                        <th>Unit</th>
                                                        <th>TMT</th>
                                                        <th>No Handphone</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="text-center">
                                                    <?php
                                                    $no = 1;
                                                    foreach ($user as $key) { ?>
                                                        <tr>
                                                            <td><?= $no++; ?></td>
                                                            <td><?php echo $key->nip_nik; ?></td>
                                                            <td><?php echo $key->fullname; ?></td>
                                                            <td><?php echo $key->jabatan; ?></td>
                                                            <td><?php echo $key->unit; ?></td>
                                                            <td><?php echo date('d M Y', strtotime($key->tmt_kerja)) ?></td> <!-- code tampil berdasar format tanggal -->
                                                            <td><?php echo $key->nope; ?></td>
                                                            <td style="text-align: center;">
                                                                <a href="<?php echo base_url(); ?>user/edit/<?php echo $key->id_user; ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                                                <a href="<?php echo base_url(); ?>user/delete/<?php echo $key->id_user; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
            </div>
            <!-- This->Content -->

            <!-- add modal -->
            <div class="modal fade" tabindex="-1" role="dialog" id="addmodal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalTitle"></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo site_url('user/add'); ?>" method="POST">
                                <!-- <input type="hidden" id="id_anggota" name="id_anggota" value=""> -->
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Nomor Identitas</label>
                                        <input type="text" class="form-control" name="nip_nik" required autofocus>

                                    </div>
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control" name="username">

                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="text" class="form-control" name="password">

                                    </div>
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input type="text" class="form-control" name="fullname">

                                    </div>
                                    <div class="form-group">
                                        <label>Pendidikan Tertinggi</label>
                                        <select class="form-control pendidikan" name="pendidikan">
                                            <option value="">Pilih</option>
                                            <option value="Bawah_sma">Di Bawah SMA</option>
                                            <option value="SMA">SMA</option>
                                            <option value="Associate">Associate</option>
                                            <option value="Bachelor">Bachelor</option>
                                            <option value="Master">Master</option>
                                            <option value="Doctoral">Doctoral</option>
                                        </select>

                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Jenis Kelamin</label>
                                        <div class="selectgroup selectgroup-pills">
                                            <label class="selectgroup-item">
                                                <input type="radio" name="gender" value="L" class="selectgroup-input">
                                                <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-male"></i> Laki-Laki</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="gender" value="P" class="selectgroup-input">
                                                <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-female"></i> Perempuan</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>No Hp</label>
                                        <input type="text" class="form-control" name="nohp">

                                    </div>
                                    <div class="form-group">
                                        <label>Agama</label>
                                        <select class="form-control agama" name="agama">
                                            <option value="">Pilih</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Budha">Budha</option>
                                        </select>

                                    </div>
                                    <!-- <div class="form-group">
                                        <label>Hobi</label>
                                        <input type="text" class="form-control inputtags" data-role="tagsinput" name="hobi">
                                    </div> -->
                                    <div class="form-group">
                                        <label>Hobi</label>
                                        <input type="text" class="form-control" name="hobi">

                                    </div>
                                    <div class="form-group">
                                        <label>Terhitung Mulai Tanggal Dinas</label>
                                        <input type="date" class="form-control" name="tmt_kerja">

                                    </div>

                                    <div class="form-group">
                                        <label>Jabatan SK</label>
                                        <select class="form-control jabatan" name="jabatan">
                                            <option value="">Pilih</option>
                                            <option value="Teknisi">Teknisi</option>
                                            <option value="IT">IT</option>
                                        </select>

                                    </div>
                                    <div class="form-group">
                                        <label>Unit</label>
                                        <select class="form-control unit" name="unit">
                                            <option value="">Pilih</option>
                                            <option value="Sarpras">Sarpras</option>
                                            <option value="IT">IT</option>
                                        </select>

                                    </div>

                                    <div class="form-group mb-0">
                                        <label>Alamat</label>
                                        <textarea class="form-control" name="alamat"></textarea>

                                    </div>

                                    <div class="form-group">
                                        <label>User Akses</label>
                                        <select class="form-control unit" name="unit">
                                            <option value="">Pilih</option>
                                            <option value="0">Tidak Ada</option>
                                            <option value="1">Admin</option>
                                            <option value="2">User</option>
                                        </select>

                                    </div>

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

                                    <div class="form-group">
                                        <label>Foto</label>
                                        <input type="file" class="form-control" name="foto">

                                    </div>


                                </div>
                            </form>
                        </div>
                        <div class="modal-footer bg-whitesmoke br">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success" id="btnSave" onclick="save()">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- add modal -->


            <!-- edit modal -->
            <!-- <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="addmodal">
                <div class="modal-dialog modal-lg" role="document">
                    isi
                </div>
            </div> -->
            <!-- edit modal -->


            <!-- detail modal -->
            <!-- <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="addmodal">
                <div class="modal-dialog modal-lg" role="document">
                    isi
                </div>
            </div> -->
            <!-- detail modal -->


            <!-- this->load->footer  -->
            <?php $this->load->view('/footer'); ?>
            <!-- this->load->footer  -->

        </div>
    </div>


    <!-- General JS Scripts -->
    <script src="<?php echo base_url(); ?>assets/modules/jquery.min.js"></script>
    <!-- <script src="<?php echo base_url(); ?>assets/modules/popper.js"></script> -->
    <!-- <script src="<?php echo base_url(); ?>assets/modules/tooltip.js"></script> -->
    <script src="<?php echo base_url(); ?>assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/modules/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="<?php echo base_url(); ?>assets/modules/datatables/datatables.min.js"></script>

    <!-- Template JS File -->
    <script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>

    <script>
        var tabelData = $('#table');

        $(document).ready(function() {
            tabelData.DataTable({ // -> tabel
                "processing": true,
                "columnDefs": [{
                    "target": [-1],
                    "orderable": false
                }]
            });
        });
    </script>

</body>

</html>