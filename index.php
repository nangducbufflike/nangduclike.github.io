<?php
require_once '_config.php';
if ($duysexy == false) {
    header('location: /auth/login');
    die();
} else if($user_level == 0){
    header('location: /profile/update-info');
    die();
} else {
    header('location: /home');
    die();
}
?>