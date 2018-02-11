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
		<span class="copy">Copyright &#169; {$date} Chizhik Andrey</span>
	</footer>

	<script src="js/reg.js" type="text/javascript"></script>
</body>
</html>