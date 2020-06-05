<?php 
	session_start();
?>
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
		<?php
			if(isset($_SESSION['userID'])) {
				echo '<form action="includes/logout.inc.php" method="POST">
				<button type="submit" name="logout-submit">Logout</button>
				</form>';
			}
			else {
				echo '<form action="includes/login.inc.php" method="POST">
				<input type="text" name="mailuid" placeholder="Enter email" required>
				<input type="password" name="password" placeholder="*****" required>
				<button type="submit" name="login-submit">Login</button>
				</form>
				<a href="signup.php">Signup</a>';
			} 
		?>	
	</header>
</body>
</html>