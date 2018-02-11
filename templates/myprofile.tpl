<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <link href="css/style.css" rel="stylesheet" type="text/css"><!--Подключение стилей-->
	<title>{$site_name}</title>
</head>
<body>
	<header class="header_site">
		<span>{$site_name}</span>
	</header>

	<menu>
		<div class="left_menu"><a href="login.php" class="link_menu">{$auto}</a></div>
		<div class="right_menu"><a href="signup.php" class="link_menu">{$reg}</a></div>
	</menu>

	<main>
		<div class="user_info">
			<span class="info">Hi, {$username}</span><br>
			<span class="info">Your email: {$email}</span><br>
			<span class="info">Your city: {$city}</span><br>
		</div>
		<form method="POST" action="signout.php">
			<button name="submit">SIGN OUT</button>
		</form>
		<button onclick="showPopup();">EDIT</button>
	</main>

	<footer class="footer_site">
		<span class="copy">Copyright &#169; {$date} {$author}</span>
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

	<script src="js/edit.js" type="text/javascript"></script>
</body>
</html>