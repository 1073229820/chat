<?php

// phpinfo();
$appid = 'wx519ae64bd8aef605';

$appsecret = 'b87bca4a56e4b417f39e6931ca99f45f';

$url = 'https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid='.$appid.'&secret='.$appsecret;

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$ret = curl_exec($ch);
echo $ret;
curl_close($ch);

