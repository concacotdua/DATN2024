<?php
// require_once 'connect.php';
function get_content($id_dm, $limi)
{
    $sql = "SELECT * FROM tbl_content WHERE 1";
    if ($id_dm > 0) {
        $sql .= " AND id_dm" . $id_dm;
    }
    $sql .= " ORDER BY id_content DESC limit " . $limi;
    return pdo_query($sql);
}
function get_about()
{
    $sql = "SELECT * FROM gioithieu";
    return pdo_query($sql);
}
function get_nd()
{
    $sql = "SELECT * FROM gioithieu ORDER BY id_about DESC";
    return pdo_query($sql);
}
function get_gthieu($html_gt)
{
    $pagegthieu = '';
    foreach ($html_gt as $pgt) {
        extract($pgt);
        if ($trangthai == 1) {
            $htst = '<p class="text-capitalize">Ngày đăng : ' . $ngaydang . '</p>';
        } else {
            $htst = '';
        }
        $pagegthieu .= '<h1 class="mb-4">' . $tieude . '</h1>
        <div class="content">
            ' . $htst . '
            <img loading="lazy" decoding="async" src="assets/img/about/' . $img . '" class="img-fluid w-100 mb-4"
            alt="Author Image">
            <p>' . $noidung . '</p>
            <blockquote>
                <p>' . $ghichu . '</p>
            </blockquote>

        </div>';
    }
    return $pagegthieu;
}

// gioi thieu admin quan ly 
function get_gioithieu_byid($idabout)
{
    $sql = "SELECT * FROM gioithieu WHERE id_about=?";
    return pdo_query_one($sql, $idabout);
}
function gioithieu_list($keyw, $limi)
{
    $sql = "SELECT * FROM gioithieu WHERE 1";
    if ($keyw != "") {
        $sql .= " AND tieude like '%" . $keyw . "%'";
    } else {
        $sql .= " ORDER BY id_about DESC Limit " . $limi;
    }
    return pdo_query($sql);
}

function show_gioithieu($dmgioithieu)
{
    $html_gioithieu = '';
    $i = 1;
    foreach ($dmgioithieu as $item) {
        extract($item);
        $linkdel = '<a href="index.php?act=delgioithieu&iddel=' . $id_about . '" class="btn btn-danger" onclick="return confirm(\'Bạn chắc chắn muốn xóa tin này?\')"><i class="bi bi-trash"> Xóa</i></a>';
        $linkedit = '<a href="index.php?act=gioithieuupdateform&idedit=' . $id_about . '" class="btn btn-success"><i class="bi bi-pencil"> Sửa</i></a>';

        $html_gioithieu .= '<tr>
        <th scope="row">' . $i . '</th>
        <th scope="row"><a href=""><img src="' . IMG_PATH_ADMIN . $img . '" alt="' . $tieude . '" style="width:40px;"></a></th>
        <th class="fw-italic">' . $tieude . '</th>
        <td class="fw-bold">' . $ngaydang . '</td>
        <td>' . $linkdel . ' | ' . $linkedit . '</td>
    </tr>';
        $i++;
    }
    return $html_gioithieu;
}
function add_gioithieu($tieude, $noidung, $ghichu, $hinhanh, $ngaydang)
{
    $sql = "INSERT INTO gioithieu(tieude,noidung,img,ghichu,ngaydang) VALUES (?,?,?,?,?)";
    pdo_execute($sql, $tieude, $noidung, $ghichu, $hinhanh, $ngaydang);
}
function gioithieudel($id)
{
    $sql = "DELETE FROM gioithieu WHERE id_about=" . $id;
    pdo_execute($sql);
}
function update_gt($tieude, $noidung, $ghichu, $hinhanh, $ngaydang, $idabout)
{
    $pdo = new PDO("mysql:host=localhost;dbname=website_mvc;charset=utf8", "root", "");
    // Check connection
    if (!$pdo) {
        die("Connection failed");
    }

    if (!empty($hinhanh)) {
        $sql = "UPDATE gioithieu SET tieude=?,noidung=?,ghichu=?,img=?,ngaydang=? WHERE id_about=?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$tieude, $noidung, $ghichu, $hinhanh, $ngaydang, $idabout]);
    } else {
        $sql = "UPDATE gioithieu SET tieude=?,noidung=?,ghichu=?,ngaydang=? WHERE id_about=?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$tieude, $noidung, $ghichu, $ngaydang, $idabout]);
    }
}
