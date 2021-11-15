<?php
require_once '../../_config.php';
$banking_code     = $_POST['tranid'];
$user_username    = $_POST['noidung'];
$banking_amount   = $_POST['tien'];
$banking_transfer = $_POST['nguoichuyen'];
$idapi            = $_POST['idapi'];
$key              = $_POST['api_key'];
$banking_status   = 1;
$banking_time     = time();

$check1 = md5($site_mmo_partner_id . $site_mmo_partner_key);
$check2 = md5($idapi . $key);
if ($key != '') {
    if ($check1 == $check2) {
        mysqli_query($conn, "UPDATE table_user SET user_point = user_point + '$banking_amount' WHERE user_username = '$user_username'");
        mysqli_query($conn, "INSERT INTO table_banking(banking_username, banking_code, banking_type, banking_transfer, banking_amount, banking_content, banking_status, banking_time) 
            VALUES ('$user_username', '$banking_code', 'Chuyển khoản Mommo', '$banking_transfer', '$banking_amount', 'Nạp tiền thành công', '$banking_status', '$banking_time')");
    }
}
?>