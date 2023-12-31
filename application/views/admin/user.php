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
                                        <!-- <button class="btn btn-success" data-toggle="modal" data-target="#addmodal"><i class="fas fa-plus"></i> Tambah</button> -->
                                        <a href="<?= base_url('user/add') ?>" class="btn btn-success"><i class="fas fa-plus"></i> Tambah</a>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-md" id="table" width="100%">
                                                <thead>
                                                    <tr class="text-center">
                                                        <th>No</th>
                                                        <th>Nama</th>
                                                        <th>User Akses</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="text-center">
                                                    <?php
                                                    $no = 1;
                                                    foreach ($user as $key) { ?>
                                                        <tr>
                                                            <td><?= $no++; ?></td>
                                                            <td><?php echo $key->fullname; ?></td>
                                                            <td>
                                                                <?php $akses = $key->user_akses;
                                                                if ($akses == '1') { ?>
                                                                    <div class="badge badge-info">Administrator</div>
                                                                <?php } else { ?>
                                                                    <div class="badge badge-danger">Inactive</div>
                                                                <?php } ?>
                                                            </td>

                                                            <td>
                                                                <?php $status = $key->user_status;
                                                                if ($status == '1') { ?>
                                                                    <div class="badge badge-success">Active</div>
                                                                <?php } else { ?>
                                                                    <div class="badge badge-danger">Inactive</div>
                                                                <?php } ?>
                                                            </td>
                                                            <!-- <td><?php echo date('d M Y', strtotime($key->tmt_kerja)) ?></td> code tampil berdasar format tanggal -->
                                                            <td style="text-align: center;">
                                                                <a href="<?php echo base_url(); ?>user/detail/<?php echo $key->id_user; ?>" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>
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