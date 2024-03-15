<?php
if (isset($_SESSION["s_user"]) && (count($_SESSION["s_user"]) > 0)) {
    extract($_SESSION["s_user"]);
    $html_account = '<li class="nav-item dropdown pe-3">

<a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
  <img src="assets/img/admin.png" style="width: 35px;" alt="" class="rounded-circle img-fluid img-thumbnail">
  <span class="d-none d-md-block dropdown-toggle ps-2">' . $name . '</span>
</a><!-- End Profile Iamge Icon -->

<ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
  <li>
    <a class="dropdown-item d-flex align-items-center" href="../index.php?act=myaccount_confirm">
      <i class="bi bi-person"></i>
      <span>Thông tin cá nhân</span>
    </a>
  </li>
  <li>
    <hr class="dropdown-divider">
  </li>

  <li>
    <a class="dropdown-item d-flex align-items-center" href="../index.php?act=myaccount">
      <i class="bi bi-gear"></i>
      <span>Thay đổi thông tin</span>
    </a>
  </li>
  <li>
    <hr class="dropdown-divider">
  </li>
  <li>
    <a class="dropdown-item d-flex align-items-center" href="../index.php?act=logout">
      <i class="bi bi-box-arrow-right"><span>Thoát</span></i>
    </a>
  </li>
</ul>
</li>';
} else {
    $html_account = '<li><a class="nav-link scrollto" href="../index.php?act=login">Đăng nhập</a></li>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Website Land Q9 Tp.Thủ Đức - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="../assets/img/GISicon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- CSS only -->
    <link href="../bando/libs/bootstrap-5.1.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- icon bootstrap -->
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <!-- JavaScript Bundle with Popper -->
    <script src="../bando/libs/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="../bando/libs/jquery.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <!-- <link rel="stylesheet" href="../bando/libs/leaflet/leaflet.css" />
    <script src="../bando/libs/leaflet/leaflet.js"></script> -->

    <script src="../bando/libs/L.Control.ZoomBar-master/src/L.Control.ZoomBar.js"></script>
    <link rel="stylesheet" href="../bando/libs/L.Control.ZoomBar-master/src/L.Control.ZoomBar.css" />

    <script src="../bando/libs/Leaflet.zoomslider-master/src/L.Control.Zoomslider.js"></script>
    <link rel="stylesheet" href="../bando/libs/Leaflet.zoomslider-master/src/L.Control.Zoomslider.css" />

    <script src="../bando/libs/Leaflet.MousePosition-master/src/L.Control.MousePosition.js"></script>
    <link rel="stylesheet" href="../bando/libs/Leaflet.MousePosition-master/src/L.Control.MousePosition.css" />

    <link rel="stylesheet" href="../bando/libs/geocoder.css" />
    <script src="../bando/libs/geocoder.js"></script>
    <script src="../bando/libs/leaflet-search.js"></script>

    <!-- routing -->
    <script src="https://unpkg.com/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.js"></script>
    <link rel="stylesheet" href="../bando/libs/polyline-measure/line-measure.css" />
    <script src="../bando/libs/polyline-measure/line-measure.js"></script>
    <link rel="stylesheet" href="../bando/libs/leaflet-measure-master/leaflet-measure.css" />

    <script src="../bando/libs/leaflet-measure-master/leaflet-measure.js"></script>
    <script src="../bando/libs/feat.js"></script>

    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.css" />
    <script src="https://kartena.github.io/Proj4Leaflet/lib/proj4-compressed.js"></script>
    <script src="https://kartena.github.io/Proj4Leaflet/src/proj4leaflet.js"></script>

    <!-- <script src="../bando/libs/leaflet-providers.js"></script> -->
    <script src="../bando/libs/leaflet.browser.print.min.js"></script>
    <script src="../bando/libs/leaflet.browser.print.js"></script>

    <link rel="stylesheet" href="bando/libs/jquery-ui-1.12.1/jquery-ui.css">
    <script src="../bando/libs/jquery-ui-1.12.1/external/jquery/jquery.js"></script>
    <script src="../bando/libs/jquery-ui-1.12.1/jquery-ui.js"></script>
    <!-- <link href="../assets/css/style.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="../bando/style.css">
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-dark ">
        <div class="container d-flex align-items-center justify-content-between position-relative">
            <div class="logo">
                <h1 class="text-light"><a href="index.php"><span>QUANG <img src="../assets/img/logo1.png"
                                class="img-fluid"></span>
                    </a></h1>
                <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="../index.php">Trang chủ</a></li>
                    <li><a class="nav-link scrollto" href="../index.php?act=gioithieu">Giới thiệu</a></li>
                    <li><a href="../index.php?act=tintuc">Tin tức</a></li>
                    <li><a href="bando.php">Bản đồ</a></li>
                    <li><a class="nav-link scrollto" href="../index.php?act=lienhe">Liên hệ</a></li>
                    <li><a class="nav-link scrollto" href="../index.php?act=dichvu">Dữ liệu</a></li>
                    <?= $html_account ?>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>

            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->


    <div class="container" style="margin-top:6%;"></div>
    <br>
    <marquee style="font-size: 20px;" width="100%"><b>DEMO WEBSITE THỂ HIỆN THÔNG TIN BIẾN ĐỘNG ĐẤT THÀNH
            PHỐ THỦ ĐỨC</b></marquee>
    <button class="btn btn-secondary mb-2"><i class="bi bi-fullscreen" onclick=fullScreenView()></i></button>
    <div id="map" class="map">
        <button onclick="wms_layers()" type="button" id="wms_layers_btn" class="btn btn-success btn-sm">Lớp
            WMS</button>
        <button onclick="clear_all()" type="button" id="clear_btn" class="btn btn-warning btn-sm">Xóa tất
            cả</button>
        <button onclick="show_hide_querypanel()" type="button" id="query_panel_btn" class="btn btn-success btn-sm">☰
            Mở bảng truy Vấn</button>
        <div id="legend"></div>
        <button onclick="show_hide_legend()" type="button" id="legend_btn" class="btn btn-success btn-sm">☰ Hiển thị
            chú thích</button>
        <button onclick="info()" type="button" id="info_btn" class="btn btn-success btn-sm">☰ Kích hoạt
            GetInfo</button>
    </div>
    <div id="query_tab">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                    type="button" role="tab" aria-controls="nav-home" aria-selected="true">Chọn theo thuộc tính</button>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <label for="layer"><b>Chọn lớp hiển thị</b></label>
                <select id="layer" class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected>Chọn lớp</option>
                </select>
                <br>
                <label for="attributes"><b>Chọn trường thuộc tính</b></label>
                <select id="attributes" class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected>Chọn theo cột</option>
                </select>
                <br>
                <label for="operator"><b>Chọn truy vấn</b></label>
                <select id="operator" class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected>Chọn toán tử</option>
                </select>
                <br>
                <label for="value">Nhập giá trị</label>
                <input type="text" class="form-control form-select-sm" id="value" name="value">
                <br>
                <button onclick="query()" type="button" class="btn btn-danger btn-sm">Tải lớp hiển thị</button>
                <button id="openButton" class="btn btn-info btn-sm">Mở chú thích</button>
            </div>
        </div>

    </div>

    <div id="table_data" style="background-color: aliceblue;"></div>
    <!-- Scrollable modal -->

    <div class="modal fade" id="wms_layers_window" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" id="movableDialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Lớp WMS có sẵn</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table id="table_wms_layers" class="table table-hover">
                    </table>
                </div>
                <div class="modal-footer">
                    <button onclick="close_wms_window()" type="button" class="btn btn-danger btn-sm"
                        data-bs-dismiss="modal">Đóng</button>
                    <button onclick="add_layer()" type="button" id="add_map_btn" class="btn btn-success btn-sm">Thêm lớp
                        vào bản đồ</button>
                </div>
            </div>
        </div>
    </div>




    <script src="../bando/map.js"></script>

</body>

</html>