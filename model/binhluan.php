<?php
function insert_binhluan($username, $page_id, $noidung, $ngaycmt)
{
    $sql = "INSERT INTO binhluan (parent_id, page_id, noidung, ngaycmt) VALUES (?,?,?,?)";
    pdo_execute($sql, $username, $page_id, $noidung, $ngaycmt);
}

function listbl()
{
    $sql = "SELECT * FROM binhluan ORDER BY id_cmt DESC";
    return pdo_query($sql);
}
