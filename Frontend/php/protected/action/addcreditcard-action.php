<?php
$postData = array(
    'name' => ['name'],
	'cardnumber' => ['cardnumber'],
	'cardmonth' => ['cardmonth'],
	'cardyear' => ['cardyear'],
	'cvc' => ['cvc'],

);
$ch = curl_init('http://localhost:8080/addcreditcard/');
curl_setopt_array($ch, array(
    CURLOPT_POST => TRUE,
    CURLOPT_RETURNTRANSFER => TRUE,
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json'
    ),
    CURLOPT_POSTFIELDS => json_encode($postData)
));

$response = curl_exec($ch);
if($response === FALSE){
    die(curl_error($ch));
}
$responseData = json_decode($response, TRUE);
curl_close($ch);
echo $responseData['published'];