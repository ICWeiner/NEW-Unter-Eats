<?php function drawProfile(Customer $user) { ?>
	<main id="profile">
		<h1>Hello <?=$user->name?> :^) </h1>
		<img src="./images/users/originals/<?=$user->id?>.jpg" alt="user profile pic" width="200" height="200">
		<div>
			<h2>Contact Information</h2>
			<div id="profile_info">
				<label for="first_name">First Name:</label><input id="first_name" type="text" name="first_name" value="<?=$user->name?>">
			</div>
			<div id="profile_info">
				<label for="first_name">Phone Number:</label>
				<input id="first_name" type="text" name="first_name" value="<?=$user->phone?>">
			</div>
			<div id="profile_info">
				<label for="first_name">Email address:</label>
				<input id="first_name" type="text" name="first_name" value="<?=$user->email?>">
			</div>
		</div>
		<div>
			<h2>Default address</h2>
			<label for="first_name">Address</Address></Address>:</label>
			<input id="first_name" type="text" name="first_name" value="<?=$user->address?>">

			<a href="profile_edit.php" class="button">Editar</a>
			<a id="change_password_button" href="profile_edit_password.php" class="button">Mudar password</a>
		</div>
	</main>
<?php } ?>

<?php function drawEditProfile(Customer $user) { ?>
	<main id="profile">
		<h1>Hello <?=$user->name?> :^) </h1>
		<img src="./images/users/originals/<?=$user->id?>.jpg" alt="user profile pic" width="200" height="200">
			<div>
				<form action="actions/action_edit_profile.php" method="post">
					<h2>Informação de contacto</h2>
					<div>	
						<label for="first_name">Username:</label>
						<input type="text" name="newName" value="<?=$user->name?>">

						<label for="first_name">Phone:</label>
						<input type="tel" name="newPhone" value="<?=$user->phone?>" pattern="[0-9]{9}">

						<label for="first_name">E-Mail:</label>
						<input type="email" name="newEmail" value="<?=$user->email?>">
					</div>
					<div>
						<h2>Default address</h2>
						<label for="first_name">Address:</label>
						<input type="text" name="newAddress" value="<?=$user->address?>">

						<button type="submit">Concluir</button>
					</div>	
				</form>
			</div>
	</main>
<?php } ?>

<?php function drawEditPassword() { ?>
	<main id="profile">		
		<div id="new_password_div">
			<h2>Mudar password</h2>
			<form action="actions/action_edit_password.php" method="post">
				<div>	
					<label for="password">New password:</label>
					<input type="password" name="password">

					<label for="confirmPassword">Confirm new password:</label>
					<input type="password" name="confirmPassword">

					<button type="submit">Concluir</button>
				</div>
			</form>
		</div>
	</main>
<?php } ?>