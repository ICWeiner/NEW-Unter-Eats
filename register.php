<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Brand Spanking NEW Unter Eats</title>
		<link href="forms.css" rel="stylesheet">
	</head>
	<body>
		<header>
			<h1>NEW Unter Eats</h1>
            <!-- <a href="about.php">About</a> -->
			<div id="signup">
				<a href="login.php">Login</a>
				<a href="register.php">Register</a>
			</div>
		</header>
		<img src="TestImages/mainImage.jpeg" alt="Homepage image of new unter eats" id="mainImage">
		<h2>Discover amazing restaurants</h2>
		<main>
		<h2>Register</h2>
			<form action="action_register.php" method="post" class="register">
				<input type="text" name="username" placeholder="Username">
				<input type="password" name="password" placeholder="Password">
				<input type="password" name="confirm_password" placeholder="Confirm password">
				<input type="text" name="address" placeholder="Address">
				<input type="tel" name="phone" placeholder="Phone number">
				<button type="submit">Register</button>
				<a href="login.php">Already have an account? Login here</a>
			</form>
		</main>
	</body>
</html>
