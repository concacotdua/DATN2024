<?php

function get_dm()
{
    $sql = "SELECT * FROM tbl_danhmuc ORDER BY stt DESC";
    return pdo_query($sql);
}
function show_dm($hienthi)
{
    $dsdm = '';
    foreach ($hienthi as $show) {
        extract($show);
        $link = 'index.php?act=sanpham2&iddm=' . $id_dm;
        $dsdm .= '<a class="list-group-item list-group-item-action list-group-item-light p-3 text-dark" href="' . $link . '">' . $name . '</a>';
    }
    return $dsdm;
}
function show_nd($content)
{
    $htnoidung = '';
    foreach ($content as $nd) {
        extract($nd);
        $htnoidung .=
            '<header class="mb-4">
         <h1 class="fw-bolder mb-1">' . $tieude . '</h1>
    </header>
    <figure class="mb-4"><img class="img-fluid rounded" src="assets/img/' . $img . '" alt="..." /></figure>
    <!-- Post content-->
    <section class="mb-5">
        <p class="fs-5 mb-4">' . $noidung . '</p>
    </section>';
    }
    return $htnoidung;
}
function get_dmnews()
{
    $sql = "SELECT * FROM dm_tintuc ORDER BY iddm DESC";
    return pdo_query($sql);
}
function show_loaitin($dmtin)
{
    $html_tag = '';
    foreach ($dmtin as $showtag) {
        extract($showtag);
        $linkin = "index.php?act=tintuc&iddmnews=" . $iddm;
        $html_tag .= '<div class="text-start fh5co_tags_all">
            <a href="' . $linkin . '" class="list-group-item list-group-item-action list-group-item-light p-2 text-dark">' . $loaitintuc . '</a>
        </div>';
    }
    return $html_tag;
}

function get_loai_dm($id)
{
    $sql = "SELECT loaitintuc FROM dm_tintuc WHERE iddm=?";
    $kq = pdo_query_value($sql, $id);
    return $kq;
}


// admin
function get_tendm()
{
    $sql = "SELECT * FROM dm_tintuc WHERE 1 ORDER BY loaitintuc";
    return pdo_query($sql);
}
function showdm_ad($dsdm)
{
    $html_dm = '';
    foreach ($dsdm as $ds) {
        extract($ds);
        $html_dm .= '<option value="' . $iddm . '">' . $loaitintuc . '</option>';
    }
    return $html_dm;
}
