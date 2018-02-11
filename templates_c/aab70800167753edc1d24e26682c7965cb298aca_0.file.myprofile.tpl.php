<?php
/* Smarty version 3.1.30, created on 2018-02-11 17:11:24
  from "Z:\home\localhost\www\acceptic\templates\myprofile.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a805d1cea5257_46838559',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aab70800167753edc1d24e26682c7965cb298aca' => 
    array (
      0 => 'Z:\\home\\localhost\\www\\acceptic\\templates\\myprofile.tpl',
      1 => 1518361882,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a805d1cea5257_46838559 (Smarty_Internal_Template $_smarty_tpl) {
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

	<div class="popup">
		<div class="popup_bg" onclick="hidePopup();"></div>
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
