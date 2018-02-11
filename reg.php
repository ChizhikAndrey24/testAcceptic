<?php
$dbc = mysqli_connect('localhost', 'root', '', 'registration') or die("ERROR");

$username =  mysqli_real_escape_string($dbc, $_POST['username']);
$password =  mysqli_real_escape_string($dbc, trim($_POST['password']));

$rep_password =  mysqli_real_escape_string($dbc, trim($_POST['rep_password']));

$email =  mysqli_real_escape_string($dbc, trim($_POST['email']));

$city =  mysqli_real_escape_string($dbc, trim($_POST['city']));

if (!empty($username) && !empty($password) && !empty($rep_password)
 && !empty($email) && !empty($city) && ($password==$rep_password))
{
	$query = "SELECT * FROM users WHERE username = '$username'";
	$data = mysqli_query($dbc, $query);
	if (mysqli_num_rows($data) == 0)
	{
		$query = "INSERT INTO users (username, password, email, city)
		 VALUES ('$username', SHA('$password'), '$email', '$city')";
		mysqli_query($dbc, $query);
		$message = 'Registration is successful!';
		mysqli_close($dbc);
	}
	else {$message = 'Login already exists';}
}
else {echo "Enter all info";}


unset($_COOKIE['username']);
unset($_COOKIE['user_id']);
unset($_COOKIE['email']);
unset($_COOKIE['city']);

setcookie('username', null, -1);
setcookie('user_id', null, -1);
setcookie('email', null, -1);
setcookie('city', null, -1);

header('Content-Type: text/json; charset=utf-8');

echo json_encode($message);