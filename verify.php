<?php
$access_token = 'dOrzZ4DxUtMvANUr6xCtRdcnJAFBureubYXufw6ZLY2YDxVwQjqzhLrljne+F3ghnGIVmCpWTeUuoUPUQIRn5QrL/LCxTFJ2RIN1FshwdF7+OwGqBhcGsfspcMTiJW0nj/wRVy66+80eGe3AP2vOZAdB04t89/1O/w1cDnyilFU=
';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>