<?php declare(strict_types = 1); ?>

<?php function drawHeader() { ?>
	<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Brand Spanking NEW Unter Eats</title>
			<link href="css/forms.css" rel="stylesheet">
		</head>
		<body>
			<header>
				<h1>NEW Unter Eats</h1>
	            <!-- <a href="about.php">About</a> -->
				<div id="signup"><!-- TO-DO: mudar este div para nav? -->
					<a href="login.php">Login</a>
					<a href="register.php">Register</a>
				</div>
			</header>

<?php } ?>

<?php function drawLogin() { ?>
			<main>
				<img src="TestImages/mainImage.jpeg" alt="Homepage image of new unter eats" id="mainImage">
				<div id="">
					<h3>Discover amazing restaurants</h3>
					<h2>Login</h2>
					<form action="action_login.php" method="post" class="login">
						<input type="text" name="email" placeholder="E-Mail" required>
						<input type="password" name="password" placeholder="Password" required>
						<button type="submit">Login</button>
						<a href="register.php">Dont have an account yet? Register here</a>
					</form>
				</div>
			</main>
		</body>
	</html>
<?php } ?>


<?php function drawRegister() { ?>
			<main>
				<img src="TestImages/mainImage.jpeg" alt="Homepage image of new unter eats" id="mainImage">
				<div id="">
					<h3>Discover amazing restaurants</h3>
					<h2>Register</h2>
					<form action="action_register.php" method="post" class="register">
						<input type="text" name="username" placeholder="Username" required>
						<input type="email" name="email" placeholder="E-Mail" required>
						<input type="password" name="password" placeholder="Password" required>
						<input type="password" name="confirmPassword" placeholder="Confirm password" required>
						<input type="text" name="address" placeholder="Address" required>
						<input type="tel" name="phone" placeholder="Phone Number" pattern="[0-9]{9}" required>
						<input type="file" name="image" required><!--TODO: Style this :^) -->
						<button type="submit">Register</button>
						<a href="login.php">Already have an account? Login here</a>
					</form>
				</div>
			</main>
		</body>
	</html>
<?php } ?>