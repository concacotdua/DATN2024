<?php
session_start();
ob_start();
if (isset($_SESSION['s_user']) && (is_array($_SESSION['s_user'])) && (count($_SESSION['s_user']) > 0)) {
        $admin = $_SESSION['s_user'];
        require_once "../model/global.php";
        require_once "../model/admin_danhmuc.php";
        require_once "../model/danhmucall.php";
        require_once "../model/connect.php";
        require_once "../model/tintuc.php";
        require_once "../model/gioithieu.php";


        require_once "inc/header.php";
        require_once "inc/sidebar.php";
        if (isset($_GET['act'])) {
                // $act = $_GET['act'];
                switch ($_GET['act']) {

                        case 'tintuclist':
                                $keyw = "";
                                if (isset($_POST['timkiem'])) {
                                        $keyw = $_POST['keyw'];
                                } else {
                                        $keyw = "";
                                }
                                $tin_list = get_dstintuc($keyw, 100);
                                require_once "view/tintuclist.php";
                                break;
                        case 'updatetintucform':
                                if (isset($_GET['idedit']) && ($_GET['idedit']) > 0) {
                                        $id_news = $_GET['idedit'];
                                        $tt = get_tintuc_byid($id_news);
                                }
                                // trở về ds tin tức
                                $dsdm = get_dmnews();
                                require_once "view/tintucupdate.php";
                                break;
                        case 'updatetintuc':
                                if (isset($_POST["updtt"])) {
                                        $tieude = $_POST['tieude'];
                                        $noidung = $_POST['noidung'];
                                        $ndchitiet = $_POST['ndchitiet'];
                                        $hinhanh = $_FILES["hinh"]["name"];
                                        if ($hinhanh != "") {
                                                // uploads hinh anh
                                                $target_file = IMG_PATH_ADMIN . $hinhanh;
                                                move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
                                        } else {
                                                $hinhanh = "";
                                        }
                                        $ngaytao = $_POST['ngaytao'];
                                        $id_dm = $_POST['iddm'];
                                        $id_news = $_POST['idupd'];
                                        pdo_update($tieude, $noidung, $ndchitiet, $hinhanh, $ngaytao, $id_dm, $id_news);
                                }
                                $tin_list = get_tin_all(100);
                                require_once "view/tintuclist.php";
                                break;

                        case 'deltintuc':
                                if (isset($_GET['iddel']) && ($_GET['iddel']) > 0) {
                                        // lấy hình ảnh
                                        $id = $_GET['iddel'];
                                        $ttct = get_tintuc_byid($id);
                                        if (is_array($ttct)) {
                                                extract($ttct);
                                                $tenfile = $img;
                                                $img_path = IMG_PATH_ADMIN . get_img($id);
                                                if (file_exists($img)) {
                                                        unlink($img);
                                                }
                                                del_tintuc($id);
                                        }
                                }
                                $tin_list = get_tin_all(100);
                                require_once "view/tintuclist.php";
                                break;
                        case 'tintucadd':
                                $dsdm = get_dmnews();
                                require_once "view/tintucadd.php";
                                break;
                        case 'addtintuc':
                                if (isset($_POST["addtin"])) {
                                        $tieude = $_POST["tieude"];
                                        $noidung = $_POST["noidung"];
                                        $ndchitiet = $_POST["ndchitiet"];
                                        $ngaytao = $_POST["ngaytao"];
                                        // $trangthai = $_POST["trangthai"];
                                        $iddm = $_POST["iddm"];
                                        // lấy tên file
                                        $hinhanh = $_FILES["img"]["name"];
                                        if ($hinhanh != "") {
                                                // uploads hinh anh
                                                $target_file = IMG_PATH_ADMIN . $hinhanh;
                                                move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
                                        }
                                        // add vào database
                                        add_tintuc($tieude, $noidung, $ndchitiet, $hinhanh, $ngaytao, $iddm);
                                        $tb = "Bạn đã thêm thành công";
                                }
                                $dsdm = get_dmnews();
                                header('location: index.php?act=tintuclist');

                                break;

                        case 'danhmuclist':
                                $keyw = "";
                                if (isset($_POST['timkiem'])) {
                                        $keyw = $_POST['keyw'];
                                } else {
                                        $keyw = "";
                                }
                                $dmtintuc = danhmuc_list($keyw);
                                require_once "view/danhmuclist.php";
                                break;
                        case 'danhmucadd':
                                $listdm = dsdanhmuc();
                                require_once "view/danhmucadd.php";
                                break;
                        case 'adddanhmuc':
                                if (isset($_POST["themdanhmuc"])) {
                                        $loaidm = $_POST["loaitintuc"];
                                        $ngaytao = $_POST["ngaytao"];
                                        $status = $_POST["trangthai"];
                                        // add vào database
                                        danhmuc_add($loaidm, $status, $ngaytao);
                                        $tb = "Bạn đã thêm thành công";
                                }
                                $listdm = dsdanhmuc();
                                header('location: index.php?act=danhmuclist');

                        case 'updatedmform':
                                if (isset($_GET['ideditdm']) && ($_GET['ideditdm']) > 0) {
                                        $iddm = $_GET['ideditdm'];
                                        $dm = get_danhmuc_byid($iddm);
                                }
                                // trở về ds danh mục
                                $listdm = dsdanhmuc();
                                require_once "view/danhmucupdate.php";
                                break;
                        case 'danhmucupdate':
                                if (isset($_POST["capnhatdanhmuc"])) {
                                        $loaidm = $_POST['loaitintuc'];
                                        $status = $_POST['trangthai'];
                                        $ngaytao = $_POST['ngaytao'];
                                        $iddm = $_POST['idcate'];
                                        danhmuc_upd($loaidm, $status, $ngaytao, $iddm);
                                }
                                $dmtintuc = danhmuc_list("");
                                require_once "view/danhmuclist.php";
                                break;
                        case 'danhmucdel':
                                if (isset($_GET['iddeldm']) && ($_GET['iddeldm']) > 0) {
                                        $id = $_GET['iddeldm'];
                                        danhmuc_del($id);
                                }
                                $dmtintuc = danhmuc_list("");
                                require_once "view/danhmuclist.php";
                                break;
                        case 'gioithieulist':
                                $keyw = "";
                                if (isset($_POST['timkiem'])) {
                                        $keyw = $_POST['keyw'];
                                } else {
                                        $keyw = "";
                                }
                                $dmgioithieu = gioithieu_list($keyw, 10);
                                require_once "view/gioithieulist.php";
                                break;
                        case 'gioithieuadd':
                                $lisgt = get_nd();
                                require_once "view/gioithieuadd.php";
                                break;
                        case 'addgioithieu':
                                if (isset($_POST["addgt"])) {
                                        $tieude = $_POST["tieude"];
                                        $noidung = $_POST["noidung"];
                                        $ghichu = $_POST["ghichu"];
                                        $ngaydang = $_POST["ngaydang"];
                                        // lấy tên file
                                        $hinhanh = $_FILES["img"]["name"];
                                        if ($hinhanh != "") {
                                                // uploads hinh anh
                                                $target_file = IMG_PATH_ADMIN . $hinhanh;
                                                move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
                                        }
                                        // add vào database
                                        add_gioithieu($tieude, $noidung, $ghichu, $hinhanh, $ngaydang);
                                        $tb = "Bạn đã thêm thành công";
                                }
                                $lisgt = get_nd();
                                header('location: index.php?act=gioithieulist');
                                break;
                        case 'delgioithieu':
                                if (isset($_GET['iddel']) && ($_GET['iddel']) > 0) {
                                        $id = $_GET['iddel'];
                                        gioithieudel($id);
                                }
                                $dmgioithieu = gioithieu_list("", 10);
                                require_once "view/gioithieulist.php";
                                break;
                        case 'gioithieuupdateform':
                                if (isset($_GET['idedit']) && ($_GET['idedit']) > 0) {
                                        $id_about = $_GET['idedit'];
                                        $gt = get_gioithieu_byid($id_about);
                                }
                                // trở về ds danh mục
                                $dmgioithieu = gioithieu_list("", 10);
                                require_once "view/gioithieuupdate.php";
                                break;
                        case 'updategioithieu':
                                if (isset($_POST["capnhatgioithieu"])) {
                                        $tieude = $_POST['tieude'];
                                        $noidung = $_POST['noidung'];
                                        $ghichu = $_POST['ghichu'];
                                        $hinhanh = $_FILES["hinh"]["name"];
                                        if ($hinhanh != "") {
                                                // uploads hinh anh
                                                $target_file = IMG_PATH_ADMIN . $hinhanh;
                                                move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
                                        } else {
                                                $hinhanh = "";
                                        }
                                        $ngaydang = $_POST['ngaydang'];
                                        $idabout = $_POST['idabout'];
                                        update_gt($tieude, $noidung, $ghichu, $hinhanh, $ngaydang, $idabout);
                                }
                                $dmgioithieu = gioithieu_list("", 10);
                                require_once "view/gioithieulist.php";
                                break;
                        case 'forms-thanhphan':
                                require_once "view/forms-thanhphan.php";
                                break;
                        case 'forms-bocuc':
                                require_once "view/forms-bocuc.php";
                                break;
                        case 'forms-chinhsua':
                                require_once "view/forms-chinhsua.php";
                                break;
                        case 'forms-xacthuc':
                                require_once "view/forms-xacthuc.php";
                                break;
                        case 'bangdulieu':
                                require_once "view/bangdulieu.php";
                                break;
                        case 'bangtonghop':
                                require_once "view/bangtonghop.php";
                                break;
                        case 'apexcharts':
                                require_once "view/charts-apex.php";
                                break;
                        case 'chartjs':
                                require_once "view/chart-js.php";
                                break;
                        case 'echarts':
                                require_once "view/charts-e.php";
                                break;
                        case 'icons-boots':
                                require_once "view/icons-boots.php";
                                break;
                        case 'icons-remix':
                                require_once "view/icons-remix.php";
                                break;
                        case 'icons-box':
                                require_once "view/icons-box.php";
                                break;
                        case 'logout':
                                if (isset($_SESSION["s_user"]) && (count($_SESSION["s_user"]) > 0)) {
                                        unset($_SESSION["s_user"]);
                                        header('location: ../index.php');
                                }
                                break;

                        default:
                                require_once "view/dashboard.php";
                }
        } else {
                require_once "view/dashboard.php";
        }
} else {
        header('location: login.php');
}

require_once "inc/footer.php";
