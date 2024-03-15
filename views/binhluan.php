<?php
session_start();
ob_start();
include_once '../model/connect.php';
include_once '../model/binhluan.php';

if (isset($_GET['idnews'])) {
    $page_id = $_GET['idnews'];
}
if (isset($_POST['guibinhluan'])) {
    $page_id = $_POST['idnews'];
    $noidung = $_POST['noidung'];
    $ngaycmt = date('Y/m/d H:i:s');
    $username = $_SESSION['s_user']['name'];
    insert_binhluan($username, $page_id, $noidung, $ngaycmt);
}

$dsbl = listbl();
$html_bl = "";
foreach ($dsbl as $bl) {
    extract($bl);
    $html_bl .= '<div>
    <div class="d-flex justify-content-between align-items-center">
      <p class="mb-1">
        ' . $parent_id . ' <span class="small">- ' . $ngaycmt . '</span>
      </p>
    </div>
        <p class="small mb-0">
        ' . $noidung . '
        </p>
    </div>';
}
?>

<h1> Bình Luận </h1>
<?php
if (isset($_SESSION['s_user']) && (count($_SESSION['s_user']) > 0)) {
?>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="hidden" name="idnews" value="idnews">
    <textarea name="noidung" id="" cols="100%" rows="5"></textarea>
    <br>
    <button type="submit" name="guibinhluan">Gửi bình luận</button>
</form>
<?php } else {
    $_SESSION['trang'] = "noidungtintuc";
    $_SESSION['idnews'] = $_GET['idnews'];
    echo "<a href='../index.php?act=login' target='_parent'>Bạn phải đăng nhập mới có thể bình luận!</a><br>";
}
?>

<div class="comments">
    <?= $html_bl ?>
</div>