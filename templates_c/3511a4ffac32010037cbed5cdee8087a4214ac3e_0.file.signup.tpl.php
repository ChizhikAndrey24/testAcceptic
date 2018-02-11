<?php
/* Smarty version 3.1.30, created on 2018-02-11 17:04:33
  from "Z:\home\localhost\www\smarty\templates\signup.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a805b8133e4d7_99118544',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3511a4ffac32010037cbed5cdee8087a4214ac3e' => 
    array (
      0 => 'Z:\\home\\localhost\\www\\smarty\\templates\\signup.tpl',
      1 => 1518358532,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a805b8133e4d7_99118544 (Smarty_Internal_Template $_smarty_tpl) {
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
		<form method="POST" action="js/reg.js">
			<label for="username">Enter login</label>
			<input type="text" id="username" name="username"><br>

			<label for="password">Enter password</label>
			<input type="password" id="password" name="password"><br>

			<label for="rep_password">Repeat password</label>
			<input type="password" id="rep_password" name="rep_password"><br>

			<label for="email">Enter email</label>
			<input type="email" id="email" name="email"><br>

			<label for="city">Enter city</label>
			<input type="text" id="city" name="city"><br>
			
			<button name="submit" class="signup">SIGN UP</button>
		</form>
	</main>

	<footer class="footer_site">
		<span class="copy">Copyright &#169; <?php echo $_smarty_tpl->tpl_vars['date']->value;?>
 Chizhik Andrey</span>
	</footer>

	<?php echo '<script'; ?>
 src="js/reg.js" type="text/javascript"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
