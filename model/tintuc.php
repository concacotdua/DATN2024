<?php
function get_tin_new($iddm, $kyw, $limi)
{
    $sql = "SELECT * FROM tintuc WHERE 1";
    if ($iddm > 0) {
        $sql .= " AND iddm=" . $iddm;
    }
    if ($kyw != "") {
        $sql .= " AND tieude like '%" . $kyw . "%' ";
    }
    $sql .= " ORDER BY id_news DESC limit " . $limi;
    return pdo_query($sql);
}
function show_tin_new($tinnew)
{
    $html_tinnew = '';
    foreach ($tinnew as $show) {
        extract($show);
        if ($trangthai == 1) {
            $htst = '<div class="most_fh5co_treding_font_123">' . $ngaytao . '</div>';
        } else {
            $htst = '';
        }
        $link = "index.php?act=noidungtintuc&idnews=" . $id_news;
        $html_tinnew .= '<div class="row pb-4">
        <div class="col-md-5">
            <div class="fh5co_hover_news_img">
                <div class="fh5co_news_img">
                <a href="' . $link . '">
                <img src="uploads/' . $img . '"  alt="" class="img-fluid" />
                </a>
                </div>
                <div></div>
            </div>
            
        </div>
        
        <div class="col-md-7 animate-box">
        ' . $htst . ' 
            <a href="' . $link . '" class="fh5co_magna py-2">' . $tieude . '</a>
            <div class="text-decoration-none"> ' . $noidung . '
            </div>
        </div>
    </div>';
    }
    return $html_tinnew;
}

function get_tin_hot($iddm, $limi)
{
    $sql = "SELECT * FROM tintuc WHERE 1";
    if ($iddm > 0) {
        $sql .= " AND iddm=" . $iddm;
    }
    $sql .= " AND iddm=2 ORDER BY id_news DESC limit " . $limi;
    return pdo_query($sql);
}
function show_tin_hot($tinhot)
{
    $html_tinhot = '';
    foreach ($tinhot as $showhot) {
        extract($showhot);
        if ($trangthai == 1) {
            $htst = '<div class="most_fh5co_treding_font_123">' . $ngaytao . '</div>';
        } else {
            $htst = '';
        }
        $link = "index.php?act=noidungtintuc&idnews=" . $id_news;
        $html_tinhot .= '<div class="row pb-3">
        <div class="col-5 align-self-center">
        <a href="' . $link . '">
            <img src="uploads/' . $img . '" alt="img" class="img-fluid" />
        </a>
        </div>
        <div class="col-7 paddding">
            ' . $htst . ' 
            <div class="most_fh5co_treding_font">' . $noidung . '</div>
        </div>
    </div>';
    }
    return $html_tinhot;
}


function get_tintuc_byid($id_news)
{
    $sql = "SELECT * FROM tintuc WHERE id_news=?";
    return pdo_query_one($sql, $id_news);
}
function tintuc_slec_by_tintucsec($id_sec)
{
    $sql = "SELECT t.*, s.doan1 FROM tintuc t JOIN tintuc_sec s ON s.id_sec=t.id_news WHERE t.id_news=? ORDER BY ngaytao DESC";
    return pdo_query($sql, $id_sec);
}
function get_tin_lienquan($iddm, $id_news, $limi)
{
    $sql = "SELECT * FROM tintuc WHERE iddm=? AND id_news<>? ORDER BY id_news DESC limit " . $limi;
    return pdo_query($sql, $iddm, $id_news);
}
function show_tin_lienquan($ndlq)
{
    $html_show_lq = '';
    foreach ($ndlq as $show) {
        extract($show);
        $link = "index.php?act=noidungtintuc&idnews=" . $id_news;
        $html_show_lq .= '<div class="col-lg-4">
        <div class="d-flex justifly-content-center">
            <div class="card" style="width: 18rem;">
                <div class="card-img-top">
                <img class="img-fluid " src="uploads/' . $img . '" alt="Card image cap"">
                </div>
                <div class="card-body">
                    <h5 class="card-title"><a href="' . $link . '">' . $tieude . '</a></h5>
                    <p class="card-text">' . $noidung . '</p>
                </div>
            </div>
        </div>
    </div>';
    }
    return $html_show_lq;
}
// function get_iddm($id_news)
// {
//     $sql = "SELECT iddm FROM tintuc WHERRE id=?";
//     return pdo_query_value($sql, $id_news);
// }


// right content 

function get_right_tin($limi)
{
    $sql = "SELECT * FROM tintuc WHERE iddm=5 ORDER BY id_news DESC limit " . $limi;
    return pdo_query($sql);
}
function show_right_tin($rightcontent)
{
    $html_show_right = '';
    foreach ($rightcontent as $right) {
        extract($right);
        $link = "index.php?act=noidungtintuc&idnews=" . $id_news;
        $html_show_right .= '<div class="row">
                                    <div class="col-lg-6 mb-4">
                                        <img src="uploads/' . $img . '" alt="" class="rounded img-fluid">
                                    </div>
                                    <div class="col-lg-6 mt-4">
                                        <h5 class="font-italic text-wrap text-left"><a href="' . $link . '">' . $tieude . '</a></h5>
                                    </div>                     
                            </div>';
    }
    return $html_show_right;
}
function get_trend($limi)
{
    $sql = "SELECT * FROM tintuc WHERE iddm=4 ORDER BY id_news DESC limit " . $limi;
    return pdo_query($sql);
}
function show_trend_tin($treding)
{
    $html_trending_tin = '';
    foreach ($treding as $tre) {
        extract($tre);
        $link = "index.php?act=noidungtintuc&idnews=" . $id_news;
        $html_trending_tin .= '<div class="col-lg-4">
                                <div class="single-bottom mb-35">
                                    <div class="trend-bottom-img mb-30">
                                        <img src="uploads/' . $img . '" alt="" class="rounded img-fluid">
                                    </div>
                                    <div class="trend-bottom-cap">
                                        <span class="color2">' . $tieude . '</span>
                                            <h5 class="font-italic text-wrap text-left">
                                            <a href="' . $link . '">' . $noidung . '</a>
                                            </h5>
                                    </div>
                                </div>
                            </div>';
    }
    return $html_trending_tin;
}
// ADMIN ------------------------------------------------------------
function add_tintuc($tieude, $noidung, $ndchitiet, $hinhanh, $ngaytao, $iddm)
{
    $sql = "INSERT INTO tintuc(tieude,noidung,ndchitiet,img,ngaytao,iddm) VALUES (?,?,?,?,?,?)";
    pdo_execute($sql, $tieude, $noidung, $ndchitiet, $hinhanh, $ngaytao, $iddm);
}
function pdo_update($tieude, $noidung, $ndchitiet, $hinhanh, $ngaytao, $id_dm, $id_news)
{
    $pdo = new PDO("mysql:host=localhost;dbname=website_mvc;charset=utf8", "root", "");
    // Check connection
    if (!$pdo) {
        die("Connection failed");
    }

    if (!empty($hinhanh)) {
        $sql = "UPDATE tintuc SET tieude=?,noidung=?,ndchitiet=?,img=?,ngaytao=?,iddm=? WHERE id_news=?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$tieude, $noidung, $ndchitiet, $hinhanh, $ngaytao, $id_dm, $id_news]);
    } else {
        $sql = "UPDATE tintuc SET tieude=?,noidung=?,ndchitiet=?,ngaytao=?,iddm=? WHERE id_news=?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$tieude, $noidung, $ndchitiet, $ngaytao, $id_dm, $id_news]);
    }
}

function del_tintuc($id)
{
    $sql = "DELETE FROM tintuc WHERE id_news=?";
    pdo_execute($sql, $id);
}



function get_img($id)
{
    $sql = "SELECT * FROM tintuc WHERE id_news=?";
    $getimg = pdo_query_one($sql, $id);
    return $getimg['img'];
}
// ---------------------------------hàm lấy tất cả tin tức--------------------------------
function get_tin_all($limi)
{
    $sql = "SELECT * FROM tintuc ORDER BY id_news DESC limit " . $limi;
    return pdo_query($sql);
}
// ---------------------------------hàm hiển thị số trang---------------------------------

function get_dstintuc($keyw, $limi)
{

    $sql = "SELECT * FROM tintuc WHERE 1";
    if ($keyw != "") {
        $sql .= " AND tieude like '%" . $keyw . "%'";
    } else {
        $sql .= " ORDER BY id_news DESC Limit " . $limi;
    }
    return pdo_query($sql);
}

function showlist_admin($tin_list)
{
    $html_tinlist = '';
    $i = 1;
    foreach ($tin_list as $item) {
        extract($item);
        $linkdel = '<a href="index.php?act=deltintuc&iddel=' . $id_news . '" class="btn btn-danger" onclick="return confirm(\'Bạn chắc chắn muốn xóa tin này?\')"><i class="bi bi-trash"> Xóa</i></a>';
        $linkedit = '<a href="index.php?act=updatetintucform&idedit=' . $id_news . '" class="btn btn-success"><i class="bi bi-pencil"> Sửa</i></a>';

        $html_tinlist .= '<tr>
        <th scope="row">' . $i . '</th>
        <th scope="row"><a href=""><img src="' . IMG_PATH_ADMIN . $img . '" alt="' . $tieude . '" style="width:40px;"></a></th>
        <th class="fw-italic">' . $tieude . '</th>
        <td class="fw-bold">' . $ngaytao . '</td>
        <td>' . $linkdel . ' | ' . $linkedit . '</td>
    </tr>';
        $i++;
    }
    return $html_tinlist;
}
function showdm_admin($dsdm, $id_dm)
{
    $html_dm = '';
    foreach ($dsdm as $ds) {
        extract($ds);
        if ($iddm === $id_dm) {
            $slc = "selected";
        } else {
            $slc = "";
        }
        $html_dm .= '<option value="' . $iddm . '"' . $slc . '>' . $loaitintuc . '</option>';
    }
    return $html_dm;
}
