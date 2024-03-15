<?php
if (isset($_SESSION["s_user"]) && (count($_SESSION["s_user"]) > 0)) {
  extract($_SESSION["s_user"]);
  //     $html_account = '<li><a class="nav-link scrollto" href="index.php?act=myaccount">' . $name . '</a></li>
  // <li><a class="btn btn-danger" href="index.php?act=logout">Thoát</a></li>';

  $html_account = '<li class="nav-item dropdown pe-3">

<a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
  <img src="assets/img/admin.png" style="width: 35px;" alt="" class="rounded-circle img-fluid img-thumbnail">
  <span class="d-none d-md-block dropdown-toggle ps-2">' . $name . '</span>
</a>

<ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
  <li>
    <a class="dropdown-item d-flex align-items-center" href="index.php?act=myaccount_confirm">
      <i class="bi bi-person"></i>
      <span>Thông tin cá nhân</span>
    </a>
  </li>
  <li>
    <hr class="dropdown-divider">
  </li>

  <li>
    <a class="dropdown-item d-flex align-items-center" href="index.php?act=myaccount">
      <i class="bi bi-gear"></i>
      <span>Thay đổi thông tin</span>
    </a>
  </li>
  <li>
    <hr class="dropdown-divider">
  </li>
  <li>
    <a class="dropdown-item d-flex align-items-center" href="index.php?act=logout">
      <i class="bi bi-box-arrow-right"><span>Thoát</span></i>
    </a>
  </li>
</ul>
</li>';
} else {
  $html_account = '<li><a class="nav-link scrollto" href="index.php?act=login">Đăng nhập</a></li>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Website Land Q9 Tp.Thủ Đức - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/GISicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- map -->
    <link href="bando/libs/bootstrap-5.1.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="bando/libs/jquery-ui-1.12.1/jquery-ui.css">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- <link href="assets/css/style_1.css" rel="stylesheet" type="text/css"> -->

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-dark ">
        <div class="container d-flex align-items-center justify-content-between position-relative">
            <div class="logo">
                <h1 class="text-light"><a href="index.php"><span>QUANG<img src="assets/img/logo1.png"
                                class="img-fluid"></span>
                    </a></h1>
                <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="index.php">Trang chủ</a></li>
                    <li><a class="nav-link scrollto" href="index.php?act=gioithieu">Giới thiệu</a></li>
                    <li><a href="index.php?act=tintuc">Tin tức</a></li>
                    <li><a href="views/bando.php">Bản đồ</a></li>
                    <li><a class="nav-link scrollto" href="index.php?act=lienhe">Liên hệ</a></li>
                    <li><a class="nav-link scrollto" href="index.php?act=dichvu">Dữ liệu</a></li>
                    <?= $html_account ?>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>

            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->