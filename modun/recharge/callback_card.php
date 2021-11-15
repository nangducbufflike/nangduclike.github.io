<?php
require_once '../../_config.php';
$card_status        = $_POST['status'];
$card_code          = $_POST['request_id'];
$banking_transfer   = $_POST['value'];
$card_amount        = $_POST['amount'];
$card_pin           = $_POST['code'];
$card_serial        = $_POST['serial'];
$card_type          = $_POST['telco'];
$card_code          = $_POST['trans_id'];
$card_callback_sign = $_POST['callback_sign'];
$card_time       = time();
if ($card_callback_sign != '') {
    if ($card_status == 1) {
        mysqli_query($conn, "UPDATE table_user SET user_point + '$card_amount' WHERE card_code = '$card_code'");
        mysqli_query($conn, "INSERT INTO table_card(card_username, card_code, card_type, card_amount, card_serial, card_pin, card_value, card_content, card_status, card_time) 
            VALUES ('$user_username', '$card_code', '$card_type', '$card_amount', '$card_serial', '$card_pin', '$card_value', 'Nạp thẻ thành công', '$card_status', '$card_time')");
    } else {
        mysqli_query($conn, "INSERT INTO table_card(card_username, card_code, card_type, card_amount, card_serial, card_pin, card_value, card_content, card_status, card_time) 
            VALUES ('$user_username', '$card_code', '$card_type', '$card_amount', '$card_serial', '$card_pin', '$card_value', 'Nạp thẻ thất bại', '$card_status', '$card_time')");
    }
}
?>