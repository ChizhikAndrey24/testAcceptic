<?php
/* Smarty version 3.1.30, created on 2018-02-11 17:07:23
  from "Z:\home\localhost\www\acceptic\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a805c2bb8e8e9_82527876',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a139bd1a9fa1118fa1d692e75de188a9b306a124' => 
    array (
      0 => 'Z:\\home\\localhost\\www\\acceptic\\templates\\index.tpl',
      1 => 1518358528,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a805c2bb8e8e9_82527876 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

  <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"><?php echo '</script'; ?>
>
  <link href="css/style.css" rel="stylesheet" type="text/css"><!--Подключение стилей-->
	<title><?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
</title>
</head>
<body>
	<header class="header_site">
		<span><?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
</span>
	</header>

	<menu>
		<div class="left_menu"><a href="login.php" class="link_menu"><?php echo $_smarty_tpl->tpl_vars['auto']->value;?>
</a></div>
		<div class="right_menu"><a href="signup.php" class="link_menu"><?php echo $_smarty_tpl->tpl_vars['reg']->value;?>
</a></div>
	</menu>

	<main>
		
	</main>

	<footer class="footer_site">
		<span class="copy">Copyright &#169; <?php echo $_smarty_tpl->tpl_vars['date']->value;?>
 Chizhik Andrey</span>
	</footer>
</body>
</html><?php }
}
