<?php
// подключение файла конфигурации
include 'config.php';
include_once 'lib/Smarty.class.php';

$smarty = new Smarty();

$smarty->assign('site_name', $site_name);
$smarty->assign('auto', $auto);
$smarty->assign('reg', $reg);
$smarty->assign('date', $date);

$smarty->display('signup.tpl');