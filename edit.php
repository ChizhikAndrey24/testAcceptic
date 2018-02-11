<?php
$dbc = mysqli_connect('localhost', 'root', '', 'registration') or die("ERROR");

$email =  mysqli_real_escape_string($dbc, trim($_POST['email']));
$city =  mysqli_real_escape_string($dbc, trim($_POST['city']));
$user_id = $_COOKIE['user_id'];  

unset($_COOKIE['username']);
unset($_COOKIE['user_id']);
unset($_COOKIE['email']);
unset($_COOKIE['city']);

setcookie('username', null, -1);
setcookie('user_id', null, -1);
setcookie('email', null, -1);
setcookie('city', null, -1);


if (!empty($email) && !empty($city))
{
	$query = "UPDATE users SET email = '$email', city = '$city' WHERE user_id = '$user_id'";
	$data = mysqli_query($dbc, $query);
	mysqli_close($dbc);
}
else {$message = 'Enter all info';}

$dbc = mysqli_connect('localhost', 'root', '', 'registration') or die("ERROR");

$query1 = "SELECT * FROM users WHERE user_id = '$user_id'";
	
$data1 = mysqli_query($dbc, $query1);
if (mysqli_num_rows($data1) == 1)
{
	$row = mysqli_fetch_assoc($data1);

	setcookie('user_id', $row['user_id'], time()+3600);
	setcookie('email', $row['email'], time()+3600);
	setcookie('username', $row['username'], time()+3600);
	setcookie('city', $row['city'], time()+3600);
	$message = 'Updating is successful!';

	mysqli_close($dbc);

	//$home_url = 'http://'.$_SERVER['HTTP_HOST'].'/smarty';
	//header('Location: '. $home_url);
}
else $message = 'Updating is not successful!';

header('Content-Type: text/json; charset=utf-8');

echo json_encode($message);