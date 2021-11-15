<?php
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'https://apimomo.xyz/sdt.php',
    CURLOPT_USERAGENT => 'API MOMO',
    CURLOPT_SSL_VERIFYPEER => false
));
$sdt_api = curl_exec($curl);
echo $sdt_api;
curl_close($curl);