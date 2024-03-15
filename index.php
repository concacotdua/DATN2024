<?php
session_start();
ob_start();
include_once "model/connect.php";
include_once "model/danhmucall.php";
include_once "model/tintuc.php";
include_once "model/gioithieu.php";
include_once "model/global.php";


include_once "model/user.php";
include_once "views/header.php";

if (isset($_GET['act']) && ($_GET['act'])) {
    switch ($_GET['act']) {

        case 'dangnhap':
            if (isset($_POST["dangnhap"]) && ($_POST["dangnhap"])) {
                $user = $_POST["user"];
                $pass = $_POST["pass"];
                $pass = md5($pass);
                $kq = check_user($user, $pass);

                if (is_array($kq) && (count($kq))) {
                    extract($kq);
                    if ($role == 1) {
                        $_SESSION["s_user"] = $kq;
                        header('location: admincp/index.php');
                    } elseif ($role == 0) {
                        $_SESSION["s_user"] = $kq;
                        header('location: index.php');
                    } elseif ($_SESSION['trang'] == "noidungtintuc") {
                        header('location: index.php?act=noidungtintuc&idnews=' . $_SESSION['idnews'] . '#binhluan');
                    } else {
                        header('location: index.php');
                    }
                } else {
                    $tb = 'Tài khoản không tồn tại';
                    $_SESSION["tb_dangnhap"] = $tb;
                    header('location: index.php?act=login&txttb=' . $tb);
                }
            }
            break;
        case 'login':
            include_once "login.php";
            break;
        case 'register':
            include_once 'register.php';
            break;
        case 'adduser':
            if (isset($_POST["dangky"]) && ($_POST["dangky"])) {
                $email = $_POST["email"];
                $username = $_POST["username"];
                $password = $_POST["password"];
                $password = md5($password);
                user_dangky($email, $username, $password);
            }
            include_once 'login.php';
            break;
        case 'myaccount':
            if (isset($_SESSION["s_user"]) && (count($_SESSION["s_user"]) > 0)) {
                include_once "views/myaccount.php";
            }

            break;
        case 'myaccount_confirm':
            if (isset($_SESSION["s_user"]) && (count($_SESSION["s_user"]) > 0)) {
                include_once "views/myaccount_confirm.php";
            }
            break;
        case 'updateuser':
            if (isset($_POST["capnhat"]) && ($_POST["capnhat"])) {
                $email = $_POST["email"];
                $name = $_POST["name"];
                $address = $_POST["address"];
                $phone = $_POST["phone"];
                $gioithieu = $_POST["gioithieu"];
                $id_user = $_POST["id_user"];
                $role = 0;
                user_upd($name, $address, $email, $role, $phone, $gioithieu, $id_user);
                header("location: index.php?act=myaccount_confirm");
            }
            break;

        case 'gioithieu';
            // $hienthi = get_dm();
            if (!isset($_GET['iddmnews'])) {
                $iddm = 0;
                $titlepage = '';
            } else {
                $iddm = $_GET['iddmnews'];
                $titlepage = get_loai_dm($iddm);
            }
            $tinhot = get_tin_hot($iddm, 4);
            $dmtin = get_dmnews();
            $html_gt = get_about();
            include_once 'views/gioithieu.php';
            break;
        case 'tintuc';
            // xử lý dữ liệu
            $kyw = "";
            $titlepage = "";
            if (!isset($_GET['iddmnews'])) {
                $iddm = 0;
                $titlepage = '';
            } else {
                $iddm = $_GET['iddmnews'];
                $titlepage = get_loai_dm($iddm);
            }
            // tìm kiếm gần đúng tiêu đề tin 
            if (isset($_POST["timkiem"]) && ($_POST["timkiem"])) {
                $kyw = $_POST["kyw"];
                $titlepage = "Kết quả từ khóa tìm kiếm của bạn : " . $kyw;
            }
            // hiển thị tin tức 
            $dmtin = get_dmnews();
            $tinnew = get_tin_new($iddm, $kyw, 6);
            $treding = get_trend(3);
            $tinhot = get_tin_hot($iddm, 4);
            $rightcontent = get_right_tin(6);
            // output 
            include_once 'views/tintuc.php';
            break;
        case 'noidungtintuc';
            if (isset($_GET['idnews']) && ($_GET['idnews'] > 0)) {
                $id_news = $_GET['idnews'];
                $ndct = get_tintuc_byid($id_news);
                $dmtin = get_dmnews();
                $iddm = $ndct['iddm'];
                $ndlq = get_tin_lienquan($iddm, $id_news, 4);
                $rightcontent = get_right_tin(5);
                include_once 'views/tintucdetails.php';
            } else {
                include_once 'views/home.php';
            }
            break;

        case 'thongtinchitiet':
            include_once 'views/thongtinchitiet.php';
            break;
        case 'lienhe':
            include_once 'views/lienhe.php';
            break;
        case 'dichvu':
            if (!empty($_GET['file'])) {
                $filename = basename($_GET['file']);
                $filepath = DOWNLOAD_PATH . $filename;
                if (!empty($filename) && file_exists($filepath)) {
                    header('Content-Description: File Transfer');
                    header('Content-Type: application/octet-stream');
                    header('Content-Disposition: attachment; filename="' . $filename . '"');
                    header('Expires: 0');
                    header('Cache-Control: must-revalidate');
                    header('Pragma: public');
                    header('Content-Length: ' . filesize($filepath));

                    // Output the file
                    readfile($filepath);
                    exit;
                } else {
                    echo "File not found.";
                }
            }
            include_once 'views/dichvu.php';
            break;
        case 'logout':
            if (isset($_SESSION["s_user"]) && (count($_SESSION["s_user"]) > 0)) {
                unset($_SESSION["s_user"]);
            }
            header('location: index.php');
            break;
        default:
            include_once "views/home.php";
            break;
    }
} else {
    include_once "views/home.php";
}

include_once "views/footer.php";
