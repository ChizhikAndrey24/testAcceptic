<?php
/* Smarty version 3.1.30, created on 2018-02-11 16:33:21
  from "Z:\home\localhost\www\smarty\templates\myprofile.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a805431759c40_96784853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50f3937d30d2d5e477435e1e9d8e987a8173ee70' => 
    array (
      0 => 'Z:\\home\\localhost\\www\\smarty\\templates\\myprofile.tpl',
      1 => 1518359597,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a805431759c40_96784853 (Smarty_Internal_Template $_smarty_tpl) {
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
		<div class="user_info">
			<span class="info">Hi, <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</span><br>
			<span class="info">Your email: <?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</span><br>
			<span class="info">Your city: <?php echo $_smarty_tpl->tpl_vars['city']->value;?>
</span><br>
		</div>
		<form method="POST" action="signout.php">
			<button name="submit">SIGN OUT</button>
		</form>
		<button onclick="showPopup();">EDIT</button>
	</main>

	<footer class="footer_site">
		<span class="copy">Copyright &#169; <?php echo $_smarty_tpl->tpl_vars['date']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['author']->value;?>
</span>
	</footer>

	<div class="popup"  onclick="hidePopup();">
		<div class="popup_bg"></div>
		<div class="form">
		<form method="POST" action="js/edit.js">
			<input type="email" id="new_email" placeholder="New email">
			<input type="text" id="new_city" placeholder="New city">
			
			<button name="submit" class="edit_info">EDIT INFO</button>
		</form>
	</div>

	<?php echo '<script'; ?>
 src="js/edit.js" type="text/javascript"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
