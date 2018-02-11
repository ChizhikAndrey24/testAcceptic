<?php
$dbc = mysqli_connect('localhost', 'root', '', 'registration') or die("ERROR");


unset($_COOKIE['username']);
unset($_COOKIE['user_id']);
unset($_COOKIE['email']);
unset($_COOKIE['city']);

setcookie('username', null, -1);
setcookie('user_id', null, -1);
setcookie('email', null, -1);
setcookie('city', null, -1);

$username =  mysqli_real_escape_string($dbc, $_POST['username']);
$password =  mysqli_real_escape_string($dbc, trim($_POST['password']));
if (!empty($username) && !empty($password))
{
	$query = "SELECT * FROM users WHERE username = '$username' AND password = SHA('$password')";
	$data = mysqli_query($dbc, $query);
	if (mysqli_num_rows($data) == 1)
	{
		$row = mysqli_fetch_assoc($data);
		
		setcookie('user_id', $row['user_id'], time()+3600);
		setcookie('email', $row['email'], time()+3600);
		setcookie('username', $row['username'], time()+3600);
		setcookie('city', $row['city'], time()+3600);

		$message = 'Login is successful!';
		//$home_url = 'http://'.$_SERVER['HTTP_HOST'].'/smarty';
		//header('Location: '. $home_url);
	}
	else {
		$message = 'Login is not successful!';
	}
}

header('Content-Type: text/json; charset=utf-8');

echo json_encode($message);