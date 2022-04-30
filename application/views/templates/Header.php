<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="<?= base_url() ?>assets/img/logo1.png">
  <title>
    <?php echo $judul; ?>
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700%7CRoboto+Slab:400,700%7CMaterial+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?= base_url() ?>assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
</head>

<body>
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="<?= base_url() ?>assets/img/sidebar-1.jpg">
      <div class="logo">
        <a class="simple-text logo-normal">
          <img class="img" src="<?= base_url() ?>assets/img/logo1.png" alt="logoweb" width="35">
        </a>
        <a href="<?= base_url() ?>" class="simple-text logo-normal">
          NET APP
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item ">
            <a class="nav-link" href="<?= base_url() ?>dashboard">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?= base_url() ?>aplikasi">
              <i class="material-icons">widgets</i>
              <p>Aplikasi</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?= base_url() ?>aplikasimasuk">
              <i class="material-icons">shopping_bag</i>
              <p>Aplikasi Masuk</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?= base_url() ?>aplikasikeluar">
              <i class="material-icons">local_mall</i>
              <p>Aplikasi Keluar</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?= base_url() ?>orderaplikasi">
              <i class="material-icons">shopping_cart</i>
              <p>Order Aplikasi</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?= base_url() ?>riwayattransaksi">
              <i class="material-icons">payments</i>
              <p>Riwayat Transaksi</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?= base_url() ?>riwayatorder">
              <i class="material-icons">payments</i>
              <p>Riwayat Order</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?= base_url() ?>kelolauser">
              <i class="material-icons">assignment</i>
              <p>Kelola User</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;"><?php echo $judul; ?></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>

        </div>
      </nav>