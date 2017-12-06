<?php
$access_token = 'gvbkkk2B0S6Mvemx0uPh4VAkXw3q0VCLAYZA2Iy2syKpooxvn+NmvQG5lH81dh6yXLqq2YkAvuEPAdNGjmH/vNgPUu3Ej5rMRdr7js6VACQ6taTJeUmQHRd4eQEWneKnEnR2NxDcirQSjsH/Rktx6AdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;