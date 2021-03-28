<?php
$postData = array(
    'username' => isset($_GET['username']) ? $_GET['username'] : die(),
    'password' => isset($_GET['username']) ? $_GET['password'] : die()
);

$ch = curl_init('http://localhost:8080/login/');
curl_setopt_array($ch, array(
    CURLOPT_POST => TRUE,
    CURLOPT_RETURNTRANSFER => TRUE,
    CURLOPT_HTTPHEADER => array('Content-Type: application/json'),
    CURLOPT_POSTFIELDS => json_encode($postData)
));

$response = curl_exec($ch);
if($response === FALSE){
    die(curl_error($ch));
}
$responseData = json_decode($response, TRUE);
curl_close($ch);
echo $responseData['published'];
