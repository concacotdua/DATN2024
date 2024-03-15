<?php

function dsdanhmuc()
{
    $sql = "SELECT * FROM dm_tintuc ORDER BY iddm DESC";
    return pdo_query($sql);
}
function danhmuc_list($keyw)
{
    $sql = "SELECT * FROM dm_tintuc WHERE 1";
    if ($keyw != "") {
        $sql .= " AND loaitintuc like '%" . $keyw . "%'";
    } else {
        $sql .= " ORDER BY iddm DESC ";
    }
    return pdo_query($sql);
}
function show_danhmuc($dmtintuc)
{
    $html_dmlist = '';
    $i = 1;
    foreach ($dmtintuc as $item) {
        extract($item);
        $linkdel = '<a href="index.php?act=danhmucdel&iddeldm=' . $iddm . '" class="btn btn-danger" onclick="return confirm(\'Bạn chắc chắn muốn xóa danh mục này?\')"><i class="bi bi-trash"> Xóa</i></a>';
        $linkedit = '<a href="index.php?act=updatedmform&ideditdm=' . $iddm . '" class="btn btn-success"><i class="bi bi-pencil"> Sửa</i></a>';

        $html_dmlist .= '<tr>
        <th scope="row">' . $i . '</th>
        <th class="fw-italic">' . $loaitintuc . '</th>
        <td class="fw-bold">' . $trangthai . '</td>
        <td class="fw-bold">' . $ngaytao . '</td>
        <td>' . $linkdel . ' | ' . $linkedit . '</td>
    </tr>';
        $i++;
    }
    return $html_dmlist;
}

function danhmuc_add($loaidm, $status, $ngaytao)
{
    $sql = "INSERT INTO dm_tintuc(loaitintuc,trangthai,ngaytao) VALUES (?,?,?)";
    pdo_execute($sql, $loaidm, $status, $ngaytao);
}

function danhmuc_del($id)
{
    $sql = "DELETE FROM dm_tintuc WHERE iddm=" . $id;
    pdo_execute($sql);
}

function danhmuc_upd($loaidm, $status, $ngaytao, $iddm)
{
    $pdo = new PDO("mysql:host=localhost;dbname=website_mvc;charset=utf8", "root", "");
    if (!$pdo) {
        die("Connection failed");
    }
    $sql = "UPDATE dm_tintuc SET loaitintuc=?, trangthai=?, ngaytao=? WHERE iddm=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$loaidm, $status, $ngaytao, $iddm]);
}
function get_danhmuc_byid($iddm)
{
    $sql = "SELECT * FROM dm_tintuc WHERE iddm=?";
    return pdo_query_one($sql, $iddm);
}