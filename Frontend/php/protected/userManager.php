<?php 
function IsUserLoggedIn() {
	return $_COOKIE  != null && array_key_exists('login_token', $_COOKIE);
}

function UserLogout() {
	if (isset($_COOKIE['login_token'])) {
    unset($_COOKIE['login_token']);
    setcookie('login_token', '', time() - 3600, '/');
}
	header('Location: index.php');
}

function UserLogin($username, $password) {
	$query = "SELECT id, birthdate, city, country, email, genpoint, house_number, isadmin, isregistered, password, real_name, sex, street, username, zip_code FROM users WHERE username = :username AND password = :password";
	$params = [
		':username' => $username,
		':password' => sha1($password)
	]; 

	require_once DATABASE_CONTROLLER;
	$record = getRecord($query, $params);
	if(!empty($record)) {
		$_SESSION['id'] = $record['id'];
		$_SESSION['birthdate'] = $record['birthdate'];
		$_SESSION['city'] = $record['city'];
		$_SESSION['country'] = $record['country'];
		$_SESSION['email'] = $record['email'];
		$_SESSION['genpoint'] = $record['genpoint'];
		$_SESSION['house_number'] = $record['house_number'];
		$_SESSION['isadmin'] = $record['isadmin'];
		$_SESSION['isregistered'] = $record['isregistered'];
		$_SESSION['password'] = $record['password'];
		$_SESSION['real_name'] = $record['real_name'];
		$_SESSION['sex'] = $record['sex'];
		$_SESSION['street'] = $record['street'];
		$_SESSION['username'] = $record['username'];
		$_SESSION['zip_code'] = $record['zip_code'];
		header('Location: index.php');
	}
	return false;
}

function UserRegister($birthdate, $city, $country, $email, $genpoint, $house_number, $isadmin, $isregistered, $password, $real_name, $sex, $street, $username, $zip_code) {
	$query = "SELECT id FROM users email = :email";
	$query2 = "UPDATE users SET isregistered=1 WHERE id = :id OR email = :email";
	$params = [ ':email' => $email ];

	require_once DATABASE_CONTROLLER;
	$record = getRecord($query, $params);
	if(empty($record)) {
		$query = "INSERT INTO users (birthdate, city, country, email, genpoint, house_number, isadmin, isregistered, password, real_name, sex, street, username, zip_code) VALUES (:birthdate, :city, :country, :email, :genpoint, :house_number, :isadmin, :isregistered, :password, :real_name, :sex, :street, :username, :zip_code)";
		$params = [
			':birthdate' => $birthdate,
			':city' => $city,
			':country' => $country,
			':email' => $email,
			':genpoint' => $genpoint,
			':house_number' => $house_number,
			':isadmin' => $isadmin,
			':isregistered' => $isregistered,
			':password' => sha1($password),
			':real_name' => $real_name,
			':sex' => $sex,
			':street' => $street,
			':username' => $username,
			':zip_code' => $zip_code
		];

		if(executeDML($query, $params)) 
				executeDML($query2);
				header('Location: index.php?P=login');
	} 
	return false;
}

?>