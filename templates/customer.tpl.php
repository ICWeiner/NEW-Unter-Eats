<?php function drawProfile(Customer $user) { ?>
	<main id="profile">
				<h1>Hello <?=$user->name?> :) </h1>
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
					<label for="first_name">First Name:</label>
  					<input id="first_name" type="text" name="first_name" value="<?=$user->address?>">

  					<a href="profile_edit.php" class="button">Editar</a>
				</div>
			</main>
<?php } ?>

<?php function drawEditProfile(Customer $user) { ?>
			<main>
				<!--<div class="profile_navbar">
					<nav>
					<ul>
						<li><a href= "">My addresses</a></li>
						<li><a href= "">My payment methods</a></li>
						<li><a href= "">Favorites</a></li>
					</ul>
					</nav>
				</div>-->
				
				<h1>Hello <?=$user->name?> :) </h1>
				<img src="./images/users/originals/<?=$user->id?>.jpg" alt="user profile pic" width="200" height="200">
				<form action="action_edit_profile.php" method="post">
					<h2>Informação de contacto</h2>
					

					<label for="first_name">Username:</label>
  					<input type="text" name="newName" value="<?=$user->name?>">

  					<label for="first_name">Phone:</label>
  					<input type="tel" name="newPhone" value="<?=$user->phone?>" pattern="[0-9]{9}">

  					<label for="first_name">E-Mail:</label>
  					<input type="email" name="newEmail" value="<?=$user->email?>">

					<h2>Default address</h2>
					<label for="first_name">Address:</label>
  					<input type="text" name="newAddress" value="<?=$user->address?>">

  					<button type="submit">Concluir</button>

  					<!--Concluir ediçao -->
				</form>
			</main>

<?php } ?>