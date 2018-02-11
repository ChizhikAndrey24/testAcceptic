<?php
/* Smarty version 3.1.30, created on 2018-02-11 17:09:37
  from "Z:\home\localhost\www\acceptic\templates\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a805cb1cc29a5_99445520',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb2c39114d99ea06703ff3e006c6cd707136d00c' => 
    array (
      0 => 'Z:\\home\\localhost\\www\\acceptic\\templates\\login.tpl',
      1 => 1518361215,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a805cb1cc29a5_99445520 (Smarty_Internal_Template $_smarty_tpl) {
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
		<form method="POST" action="js/log.js">
			<label for="username">Enter login</label>
			<input type="text" id="log_username" name="username"><br>

			<label for="password">Enter password</label>
			<input type="password" id="log_password" name="password"><br>
			
			<button name="submit" class="login">LOGIN UP</button>
		</form>
	</main>

	<footer class="footer_site">
		<span class="copy">Copyright &#169; <?php echo $_smarty_tpl->tpl_vars['date']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['author']->value;?>
</span>
	</footer>

	<?php echo '<script'; ?>
 src="js/log.js" type="text/javascript"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
