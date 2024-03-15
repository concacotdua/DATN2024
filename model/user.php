<?php
function getuserinfo($user, $pass)
{
    $sql = "SELECT id_user FROM tbl_user WHERE username=? AND password=?";
    return pdo_query($sql, $user, $pass);
}

function user_dangky($email, $username, $password)
{
    $sql = "INSERT INTO tbl_user(email,username,password) VALUES (?, ?, ?)";
    pdo_execute($sql, $email, $username, $password);
}
function check_user($user, $pass)
{
    $sql = "SELECT * FROM tbl_user WHERE username=? AND password=?";
    return pdo_query_one($sql, $user, $pass);
}

function get_user($id_user)
{
    $sql = "SELECT * FROM tbl_user WHERE id_user=?";
    return pdo_query_one($sql, $id_user);
}
function user_upd($name, $address, $email, $role, $phone, $gioithieu, $id_user)
{
    // Establish your PDO connection (assuming it's available in your code)
    $pdo = new PDO("mysql:host=localhost;dbname=website_mvc;charset=utf8", "root", "");

    // Check connection
    if (!$pdo) {
        die("Connection failed");
    }

    $sql = "UPDATE tbl_user SET name=?, address=?, email=?, role=?, phone=?, gioithieu=? WHERE id_user=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$name, $address, $email, $role, $phone, $gioithieu, $id_user]);
}
