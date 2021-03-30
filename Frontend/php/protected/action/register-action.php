<?php
$postData = array(
    'username' => ['username'],
    'password' => ['password'],
	'email' => ['email'],
    'real_name' => ['real_name'],
    'sex' => ['sex'],
    'birthdate' => ['birthdate'],
	'zip_code' => ['zip_code'],
    'city' => ['city'],
    'street' => ['street'],
	'house_number' => ['house_number'],
    'country' => ['country']
);
$ch = curl_init('http://localhost:8080/register/');
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