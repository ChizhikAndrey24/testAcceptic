<?php
if (isset($_POST['submit']))
{
	unset($_COOKIE['username']);
	unset($_COOKIE['user_id']);
	unset($_COOKIE['email']);
	unset($_COOKIE['city']);

	setcookie('username', null, -1);
  	setcookie('user_id', null, -1);
	setcookie('email', null, -1);
  	setcookie('city', null, -1);

	$home_url = 'http://'.$_SERVER['HTTP_HOST'].'/acceptic';
	header('Location: '. $home_url);
}