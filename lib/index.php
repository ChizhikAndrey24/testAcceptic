<?php
// подключение файла конфигурации
include 'config.php';
include_once 'lib/Smarty.class.php';

$smarty = new Smarty();

$smarty->assign('site_name', $site_name);

$smarty -> compile_check = false;

$smarty->display('index.tpl');