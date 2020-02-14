<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Perawat</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?> ">
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Be+Vietnam&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">

    <!-- fontawesome download dulu taroh di luar foldernya -->
    <link rel="stylesheet" href=" <?php echo base_url('assets/fontawesome-free-5.10.2-web/css/all.css') ?> ">
    <!-- data table -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/sendiri.css') ?>">

</head>


<body>
    <div id="wrapper">
        <nav class="navbar navbar-default">
            <!-- tampilan untuk navbar header mobile -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target=".sidebar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Sistem Pakar</a>
            </div>
        </nav>
        <!-- sidebar -->
        <nav class="navbar-default navbar-side">

            <div class="sidebar-collapse">
                <!-- icon user -->
                <div class="user">
                    <img src="<?php echo base_url('assets/img/'.foto_sidebar("Perawat")) ?>" alt="" class="img-circle">
                    <h3><?php echo nama_sidebar("Perawat") ?></h3>
                    <p><?php echo level_sidebar("Perawat") ?></p>
                </div>

                <ul class="nav" id="main-menu">
                    <li><a href="<?php echo base_url('perawat/dashboard') ?>"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="<?php echo base_url('perawat/pasien') ?>"><i class="fas fa-file-medical"></i>
                            Pasien</a></li>
                    <li><a href="<?php echo base_url('perawat/diagnosis') ?>"><i class="fas fa-sticky-note"></i>
                            Diagnosis</a>
                    </li>
                    <li><a href="<?php echo base_url('perawat/pengetahuan') ?>"><i class="fas fa-book-medical"></i></>
                            Penyakit</a></li>
                    <li><a onclick="return confirm('Yakin keluar?')" href="<?php echo base_url('perawat/logout') ?>"><i class="fas fa-sign-out-alt"></i> Logout</a>
                    </li>

                </ul>
            </div>
        </nav>

        <!-- content -->
        <!-- page-wrapper untuk warna abu-abu, page-inner untuk yang warna putih -->
        <div id="page-wrapper">
            <div id="page-inner">