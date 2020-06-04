<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<header>
		<!-- <nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="#">Portfolio</a></li>
				<li><a href="#">About me</a></li>
			</ul>
		</nav> -->
		<form action="includes/login.inc.php" method="POST">
			<input type="text" name="mailuid" placeholder="Enter email" required>
			<input type="password" name="password" placeholder="*****" required>
			<button type="submit">Login</button>
		</form>
		<a href="signup.php">Signup</a>
	</header>
</body>
</html>