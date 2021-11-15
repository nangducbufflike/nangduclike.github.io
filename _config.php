<?php
session_start();
error_reporting(1);
date_default_timezone_set('Asia/Ho_Chi_Minh');
/* connect mysql */
$conn = mysqli_connect('localhost', 'tanglikexyz', 'tanglikexyz', 'tanglikexyz') or die('Không thể kết nối đến cơ sở dữ liệu, vui lòng thử lại.');
mysqli_set_charset($conn, "utf8");
include_once 'Mailer/PHPMailerAutoload.php';

$check_site            = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM table_site WHERE site_id = '1'"));
$site_id               = $check_site['site_id'];
$site_title            = $check_site['site_title'];
$site_logo             = $check_site['site_logo'];
$site_name             = $check_site['site_name'];
$site_keyword          = $check_site['site_keyword'];
$site_domain           = $check_site['site_domain'];
$site_fb_token         = $check_site['site_fb_token'];
$site_facebook         = $check_site['site_facebook'];
$site_zalo             = $check_site['site_zalo'];
$site_fanpage          = $check_site['site_fanpage'];
$site_mail_username    = $check_site['site_mail_username'];
$site_mail_password    = $check_site['site_mail_password'];
$site_mmo_partner_id   = $check_site['site_mmo_partner_id'];
$site_mmo_partner_key  = $check_site['site_mmo_partner_key'];
$site_card_partner_id  = $check_site['site_card_partner_id'];
$site_card_partner_key = $check_site['site_card_partner_key'];
$site_status           = $check_site['site_status'];
$site_time             = $check_site['site_time'];




$duysexy = false;
if (isset($_SESSION['login']) && $_SESSION['login'] == 'ok') {
    $check_user     = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM table_user WHERE user_username = '" . $_SESSION['user_username'] . "'"));
    $user_id        = $check_user['user_id'];
    $user_token     = $check_user['user_token'];
    $user_username  = $check_user['user_username'];
    $user_fullname  = $check_user['user_fullname'];
    $user_phone     = $check_user['user_phone'];
    $user_email     = $check_user['user_email'];
    $user_fb        = $check_user['user_fb'];
    $user_point     = $check_user['user_point'];
    $user_ip        = $check_user['user_ip'];
    $user_level     = $check_user['user_level'];
    $user_blocked   = $check_user['user_blocked'];
    $user_time_last = $check_user['user_time_last'];
    $user_time      = $check_user['user_time'];
    $user_total     = $check_user['user_total charge'];
     $user_total_nap     = $check_user['user_point'];
    
    $duysexy        = true;
    if ($user_level == 0) {
        $user_level_type = 'Khách!';
    } else if ($user_level == 1) {
        $user_level_type = 'Thành viên';
    } else if ($user_level == 2) {
        $user_level_type = 'Công tác viên';
    } else if ($user_level == 3) {
        $user_level_type = 'Đại lí';
    } else if ($user_level == 4) {
        $user_level_type = 'Quản trị viên';
    }
    
}

function sendmail($mail_nhan, $ten_nhan, $chu_de, $noi_dung, $bcc){
    $mail = new PHPMailer();
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = $site_mail_username;
    $mail->Password = $site_mail_password;
    $mail->SMTPSecure = 'TLS';
    $mail->Port = 587;
    $mail->setFrom($site_mail_username, $bcc);
    $mail->addAddress($mail_nhan, $ten_nhan);
    $mail->addReplyTo($site_mail_username, $bcc);
    $mail->isHTML(true);
    $mail->Subject = "$chu_de";
    $mail->Body    = $noi_dung;
    $mail->CharSet = 'UTF-8';
    $send = $mail->send();
    return $send;
}


function generateRandomString($length) {
    $characters       = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString     = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function useragent($useragent) {
    $str = substr($useragent, strpos($useragent, '(') + -9);
    $str = substr($str, -60, strpos($str, ')'));
    return $str;
}

function setSession($user_id, $user_username)
{
    $_SESSION['login']         = 'ok';
    $_SESSION['user_id']       = $user_id;
    $_SESSION['user_username'] = $user_username;
}

function logout()
{
    session_start();
    session_destroy();
    header('location: /');
}

function curl($url,$cookie){
    $ch = @curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "Accept-Language: en-us,en;q=0.5";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Expect:'
    ));
    $page = curl_exec($ch);
    curl_close($ch);
    return $page;
}

function check_string($data)
{
    return str_replace(array('<',"'",'>','?','/',"\\",'--','eval(','<php'),array('','','','','','','','',''),htmlspecialchars(addslashes(strip_tags($data))));
}
function random($string, $int)
{  
    return substr(str_shuffle($string), 0, $int);
}
?>