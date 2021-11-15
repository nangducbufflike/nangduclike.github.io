<?php
require_once '../../_config.php';
if ($_REQUEST) {
    $return = array(
        'error' => 0
    );
    $type   = $_REQUEST['type'];
    if ($type === 'recharge-card') {
        $card_type   = htmlspecialchars(addslashes($_POST['card_type']));
        $card_amount = htmlspecialchars(addslashes($_POST['card_amount']));
        $card_serial = htmlspecialchars(addslashes($_POST['card_serial']));
        $card_pin    = htmlspecialchars(addslashes($_POST['card_pin']));
        $card_status = 1;
        $card_time   = time();
        
        $dataPost               = array();
        $dataPost['partner_id'] = $site_card_partner_id;
        $dataPost['request_id'] = rand(100000, 999999);
        $dataPost['telco']      = $card_type;
        $dataPost['amount']     = $card_amount;
        $dataPost['serial']     = $card_serial;
        $dataPost['code']       = $card_pin;
        $dataPost['command']    = 'charging';
        $sign                   = creatSign($site_card_partner_key, $dataPost);
        $dataPost['sign']       = $sign;
        $data                   = http_build_query($datapost);
        $ch                     = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://thesieure.com/chargingws/v2");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dataPost);
        $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        curl_setopt($ch, CURLOPT_REFERER, $actual_link);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result2 = curl_exec($ch);
        $result  = json_decode($result2);
        curl_close($ch);
        if ($result->status == 99) {
            $return['error'] = 1;
            $return['msg']   = 'Gửi thẻ thành công, hệ thống sẽ duyệt trong ít phút.';
            die(json_encode($return));
        } else if ($result->status == 1) {
            $return['error'] = 1;
            $return['msg']   = 'Nạp thẻ thành công.';
            die(json_encode($return));
        } else if ($result->status == 2) {
            $return['error'] = 1;
            $return['msg']   = 'Nạp sai mệnh giá.';
            die(json_encode($return));
        } else if ($result->status == 3) {
            $return['error'] = 1;
            $return['msg']   = 'Vui lòng kiểm tra lại serial, mã thẻ.';
            die(json_encode($return));
        } else if ($result->status == 4) {
            $return['error'] = 1;
            $return['msg']   = 'Hệ thống đang bảo trì.';
            die(json_encode($return));
        } else {
            if (mysqli_query($conn, "INSERT INTO table_card(card_username, card_code, card_type, card_amount, card_serial, card_pin, card_value, card_content, card_status, card_time) 
            VALUES ('$user_username', '$card_code', '$card_type', '$card_amount', '$card_serial', '$card_pin', '$card_value', '$card_content', '$card_status', '$card_time')")) {
                $return['msg'] = ''.$result->message.'';
                die(json_encode($return));
            } else {
                $return['error'] = 1;
                $return['msg']   = 'Có gì đó không ổn.';
                die(json_encode($return));
            }
        }
        
    }
}

function creatSign($site_card_partner_key, $params)
{
    $data               = array();
    $data['request_id'] = $params['request_id'];
    $data['code']       = $params['code'];
    $data['partner_id'] = $params['partner_id'];
    $data['serial']     = $params['serial'];
    $data['telco']      = $params['telco'];
    $data['command']    = $params['command'];
    ksort($data);
    $sign = $site_card_partner_key;
    foreach ($data as $item) {
        $sign .= $item;
    }
    return md5($sign);
}
?>