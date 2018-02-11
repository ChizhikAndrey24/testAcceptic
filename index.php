<?php
// подключение файла конфигурации
include 'config.php';
include_once 'lib/Smarty.class.php';

$smarty = new Smarty();

$smarty->assign('site_name', $site_name);
$smarty->assign('auto', $auto);
$smarty->assign('reg', $reg);
$smarty->assign('date', $date);
$smarty->assign('author', $author);

if (empty($username))
{
	$smarty->display('index.tpl');
}
else
{
	$smarty->assign('username', $username);
	$smarty->assign('email', $email);
	$smarty->assign('city', $city);
	$smarty->display('myprofile.tpl');
}
