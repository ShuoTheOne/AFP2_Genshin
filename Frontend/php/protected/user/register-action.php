<?php
$postData = array(
    'username' => $_POST['username'],
    'password' => $_GET['password'],
	'email' => $_GET['email'],
    'real_name' => $_GET['real_name'],
    'sex' => $_GET['sex'],
    'birthdate' => $_GET['birthdate'],
	'zip_code' => $_GET['zip_code'],
    'city' => $_GET['city'],
    'street' => $_GET['street'],
	'house_number' => $_GET['house_number'],
    'country' => $_GET['country']
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