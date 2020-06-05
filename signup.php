<main>
	<h1>Signup</h1>
	<?php
		if(isset($_GET['error'])) {
			if($_GET['error'] == "emptyfields") {
				echo '<p>Required fields are empty!<p>';
			}
			else if($_GET['error'] == "invalidemailuid") {
				echo '<p>Invalid email and username!<p>';
			}
			else if($_GET['error'] == "invalidemail") {
				echo '<p>Invalid email!<p>';
			}
			else if($_GET['error'] == "invaliduid") {
				echo '<p>Invalid username!<p>';
			}
			else if($_GET['error'] == "passwordcheck") {
				echo '<p>Invalid password!<p>';
			}
			else if($_GET['error'] == "usertaken") {
				echo '<p>Username already taken!<p>';
			}
			else if($_GET['signup'] == "success") {
				echo '<p>Signup successful!<p>';
			}
		} 
	?>
	<form action="includes/signup.inc.php" method="POST">
		<input type="text" name="uid" placeholder="Username" required>
		<input type="email" name="email" placeholder="Email" required>
		<input type="password" name="password" placeholder="*******" required>
		<input type="password" name="password-repeat" placeholder="*******" required>
		<button type="submit" name="signup-submit">Submit</button>
	</form>
</main>